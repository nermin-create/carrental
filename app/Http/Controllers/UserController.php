<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //lists user
//     public function all_user(){
//         $users=User::get();
//         return view ('admin.users',compact('users'));
//     }


// //add user view
    
//     public function create(){
//         return view('admin.addUser');
//      }


//      // add user(store data)
//      public function store(Request $request):RedirectResponse{

//         // $messages=[
//         //     'name.required'=>'name is required',
//         //     'name.string'=>' name Should be string',
//         //     'email.required'=> 'email is required',
//         //     'email.unique'=> 'email must be unique'
//         //     ];
//         //      $request->validate([
//         //     'name'=>'required|string',
//         //     //'email'=> 'required|unique:customers|max:255'
            
//         //     ], $messages);
            
//         $new_user =new User();
//         $new_user->name=$request->name;
//         $new_user->user_name=$request->user_name;
//         $new_user->email=$request->email;
//         $new_user->password=$request->password;
//         $new_user->save();
//         return redirect ('admin/users');
//     }

// //edit user

//     public function edit(string  $id){
//         $users=User::FindOrFail($id);
//             return view ('admin.edituser',compact('users'));  
//     }
//     public function update(Request $request, string $id):RedirectResponse{
//         User::where('id' ,$id)->update([
//            'name' =>$request->name,
//            'user_name'=>$request->user_name,
//            'email'=>$request->email,
//            'password' =>$request->password,
//            'password' => Hash::make($request->password)
//         ]);
//         return redirect ('/admin/users');

//     }

}
