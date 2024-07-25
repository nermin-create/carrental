<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create(){
        return view('interface.contact');
     }
    //

    public function store(Request $request):RedirectResponse{

            
        $new_contact =new Contact();
        $new_contact->firstname=$request->firstname;
        $new_contact->lastname=$request->lastname;
        $new_contact->email=$request->email;
        $new_contact->Content=$request->content;
       
        $new_contact->save();
        return redirect ('contact');
    }

    //show messages in admin panel
    public function show_contact(){
        $contacts=Contact::get();
        return view ('admin.messages',compact('contacts'));
    }
//delete messages
    public function destroy(Request $request):RedirectResponse
    {
        $id=$request->id;
      Contact::where ('id',$id)->delete();
        return redirect ('admin/messages');
    }

    public function show_details(string $id){
        $contacts=Contact::findOrFail($id);
        return  view ('admin.showMessage',compact ('contacts'));
    }
}
