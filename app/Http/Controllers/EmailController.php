<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    /**
     * Submission for contact form
     */
    public function submitContact(ContactRequest $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');

        Mail::send('email.contact',
        [
            'name' => $name,
            'email' => $email,
            'contact_message' => $request->get('message')

        ], function ($message) use ($email, $name) {
            $message->from($email, $name);
            $message->to(env('MAIL_USERNAME'));

        });

        return redirect()->back()->with(['message' => 'Thank you for contacting me! I will be in touch soon']);
    }

}
