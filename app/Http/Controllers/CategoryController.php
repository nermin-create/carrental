<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    //
    public function all_category(){
        $categ=Category::get();
        return view ('admin.categories',compact('categ'));
    }


/////////////////////////////////


  


    public function create(){
        return view('admin.addCategory');
     }


     // add category(store data)
     public function store(Request $request):RedirectResponse{

        // $messages=[
        //     'name.required'=>'name is required',
        //     'name.string'=>' name Should be string',
        //     'email.required'=> 'email is required',
        //     'email.unique'=> 'email must be unique'
        //     ];
        //      $request->validate([
        //     'name'=>'required|string',
        //     //'email'=> 'required|unique:customers|max:255'
            
        //     ], $messages);
            
        $new_categ =new Category();
        $new_categ->category_name=$request->add_category;
        $new_categ->save();
        return redirect ('admin/categories');
    }

    //edit user

    public function edit(string  $id){
        $categ=Category::FindOrFail($id);
            return view ('admin.editCategory',compact('categ'));  
    }
    public function update(Request $request, string $id):RedirectResponse{
        Category::where('id' ,$id)->update([
           'category_name' =>$request->add_category,
        
        ]);
        return redirect ('admin/categories');

    }

    //delete category
    public function destroy(Request $request):RedirectResponse
    {
        $id=$request->id;
      Category::where ('id',$id)->delete();
        return redirect ('admin/categories');
    }
    // public function show_cate(){
    
    //     $categ=Category::get();
    //     return view ('interface.single',compact('categ'));
       
    // }
}
