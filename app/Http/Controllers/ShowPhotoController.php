<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use Illuminate\Http\Request;

class ShowPhotoController extends Controller
{
    //

    public function show(){
        $cars=Photo::all();
        
        return view ('test',compact('cars'));
    }
}
