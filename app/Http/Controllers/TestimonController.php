<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonController extends Controller
{
    //

    // public $testimons;
    // public function __construct($testimons)

    // {
    //     $this->testimons=$testimons;
    // }

    public function all_testiomn(){
        $testimons=Testimonial::get();
        return view ('admin.testimonial',compact('testimons'));
    }
    //add testimonials view
    
    public function create(){
        $testimons=Testimonial::get();
        return view('admin.addTestimonials',compact('testimons'));
     }


     // add testimonial(store data)
     public function store(Request $request):RedirectResponse{


            
        $new_testimon =new Testimonial();

        if($request->file('filename')){

            $file=$request->file('filename');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->filename->move('storage',$filename);
            $new_testimon->filename=$filename;
        }



        $new_testimon->name=$request->name;
        $new_testimon->content=$request->content;
        $new_testimon->position=$request->position;
       
        $new_testimon->save();
        return redirect ('admin/testimonials');
    }
    //edit testimons
    public function edit(string  $id){
        $testimons=Testimonial::FindOrFail($id);
            return view ('admin.editTestimonials',compact('testimons'));  
    }
    public function update(Request $request, string $id):RedirectResponse{
        $testimons=Testimonial::find($id);
       $testimons->name=$request->input('name');
       $testimons->content=$request->input('content');
       $testimons->position=$request->input('position');
     
       if($request->hasFile('filename'))
       {
        $test='storage/'.$testimons->filename;
        if(File::exists($test)){
            File::delete($test);
        }

        $file=$request->file('filename');
             $filename=time().'.'.$file->getClientOriginalExtension();
             $request->filename->move('storage',$filename);
             $testimons->filename=$filename;
       }
   
      
        $testimons->update();
        return redirect ('/admin/testimonials');

         
      
    

    }
     //delete testimonials
     public function destroy(Request $request):RedirectResponse
     {
         $id=$request->id;
       Testimonial::where ('id',$id)->delete();
         return redirect ('admin/testimonials');
     }



     public function testi(){
        $testimons=Testimonial::all();
        return view ('interface.testimonials',compact('testimons'));
    }
}
