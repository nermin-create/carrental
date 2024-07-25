<?php
namespace App\ValueObjects;
namespace App\Http\Controllers;
use App\Models\Photo;
use App\public\storage\images;
use Illuminate\Contracts\Database\Eloquent\Castable;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    
    public function index(){
        
        return view ('uploadpage');
    }

    //storge

    public function store(Request $request){



        $data=new Photo;
        if($request->file('filename')){

            $file=$request->file('filename');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->filename->move('storage',$filename);
            $data->filename=$filename;
        }
        $data->save();
        return redirect('/uploaddata');
    }

}
