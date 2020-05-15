<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;

class ContactsController extends Controller
{
    //
    public function create(){
        return view('contacts.create');
    }

    public function store(ContactRequest $request){
        // $message = new Message;
        // $message->name = $request->name;
        // $message->email = $request->email;
        // $message->message = $request->message;
        // $message->save();

        $message = Message::create($request->only('name', 'email', 'message'));

        //$mailable = new ContactMessageCreated($message);
        Mail::to(config('Laracarte.admin_support_email'))->send(new ContactMessageCreated($message));
       // new ContactMessageCreated($request->name, $request->email, $request->message);
       flashy()->primaryDark('Nous traitons votre requête!.', 'http://your-awesome-link.com');
       return redirect()->route('root_path');
    }
}
