<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReplayRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index()
    {
        # code...

        $contact  =  Contact::all();

        return view('admin.contact.index',compact('contact'));
    }

    public function show($id)
    {
        $general = Contact::findOrfail($id);

        return view('admin.contact.show',compact('general'));
    }  
    public function replay($id){
        $general = Contact::find($id);
        return view('admin.contact.replay',compact('general','id'));
    }

    public function contact_replay(ReplayRequest $request){
        $contact = Contact::find($request->contact_id);

        $user_email   = $contact->email;     //user email
        $user_name    = $contact->name;     //user name
        $user_message = $request->message; //admin message
        $subject      = $request->subject; //email subject
      
       Mail::send('mail.admin_replay', [
           'user_email'   =>  $user_email,
           'user_name'    =>  $user_name,
           'user_message' =>  $user_message

       ], function ($message) use ($user_email ,$subject)
       {
           $message->from(env('MAIL_USERNAME'));
           $message->to($user_email)->subject($subject);
       });
       return redirect()->route('contact.index')->with(['success'=>trans('general.aside.mail_sent')]);
    }
    public function destroy($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back();
    }

}
