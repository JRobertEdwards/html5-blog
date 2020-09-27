<?php 

namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use App\Contact;
use App\Mail\EmailSent; 
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
 
    public function saveContact(Request $request)
    { 

        $this->validate(
            $request, [
            'name' => 'required',
            'email' => 'required|email',
            'user_query' => 'required'
            ]
        );

        Contact::create($request->all());

        //  Send mail to admin
        Mail::send(
            'mailsent', [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_query' => $request->get('user_query'),
            ], function ($message) use ($request) {
                $message->from('jre@joshedwards.dev');
                $message->to('josh.r.edwards@gmail.com', 'Admin')->subject('joshedwards.dev site contact');
            }
        );
        return back()->with('status', 'Thank you for contacting me, I\'ll be in touch!');
    }
}