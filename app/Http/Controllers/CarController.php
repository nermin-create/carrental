<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Category;

use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
class CarController extends Controller
{
    //

//interface -----------
//1-to show car in index
    public function show_car(){
        $cars=Car::all();
        return view ('interface.index',compact('cars'));
    }

//listing cars

public function listing_car(){
    $cars=Car::all();
    return view ('interface.listing',compact('cars'));
}
    
//2-to  details of car in single
    public function single_car(string  $id){
        $cars=Car::FindOrFail($id);
        $categ=Category::get();
      
        return view ('interface.single',compact('cars','categ'));
    }
   

    //show cars in admin
    public function all_car(){
        $cars=Car::get();
        return view ('admin.cars',compact('cars'));
    }
  
    //add car view
    
    public function create(){
        $cars=Car::get();
        $categs=Category::get();
        return view('admin.addCar',compact('cars','categs'));
     }



   
 
     // add cars(store data)
     public function store(Request $request):RedirectResponse{

        $new_car =new Car();
     

        if($request->file('filename')){

            $file=$request->file('filename');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->filename->move('storage',$filename);
           $new_car->filename=$filename;
        }
            
        $new_car->Title=$request->title;
        $new_car->Content=$request->content;
        $new_car->luggage=$request->luggage;
        $new_car->door=$request->doors;
        $new_car->passenger=$request->passengers;
        $new_car->price=$request->price;
        // $new_car->image_data=$request->image;
        $new_car->category=$request->category;
        $new_car->save();
        return redirect ('admin/cars');

     

     
      
    }
    
    
    // public function edit(string  $id){
    //     $cars=Car::FindOrFail($id);
    //     $categs=Category::get();
    //         return view ('admin.editcar',compact('cars','categs'));  
    // }
    // public function update(Request $request, string $id):RedirectResponse{
    //     Car::where('id' ,$id)->update([
        
    //        'Title'=>$request->title,
    //      'Content'=>$request->content,
    //        'luggage'=>$request->luggage,
    //       'door'=>$request->doors,
    //       'passenger'=>$request->passengers,
    //       'price'=>$request->price,
    //      'image_data'=>$request->image,
    //     'category'=>$request->category
        
         
    //     ]);
     
    //     return redirect ('/admin/cars');

    // }
     //delete cars
     public function destroy(Request $request):RedirectResponse
     {
         $id=$request->id;
       Car::where ('id',$id)->delete();
         return redirect ('admin/cars');
     }



  


    public function edit(string  $id){
        $cars=Car::FindOrFail($id);
        $categs=Category::get();
            return view ('admin.editcar',compact('cars','categs'));  
    }
    public function update(Request $request, string $id):RedirectResponse{
        $cars=Car::find($id);
        $cars->Title=$request->input('title');
        $cars->Content=$request->input('content');
        $cars->luggage=$request->input('luggage');
        $cars->door=$request->input('doors');
        $cars->passenger=$request->input('passengers');
        $cars->price=$request->input('price');
        $cars->category=$request->input('category');
       
     
       if($request->hasFile('filename'))
       {
        $test='storage/'.$cars->filename;
        if(File::exists($test)){
            File::delete($test);
        }

        $file=$request->file('filename');
             $filename=time().'.'.$file->getClientOriginalExtension();
             $request->filename->move('storage',$filename);
             $cars->filename=$filename;
       }
   
      
        $cars->update();
        return redirect ('admin/cars');

         
      
    

    }
}
