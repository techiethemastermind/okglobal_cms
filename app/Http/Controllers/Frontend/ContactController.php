<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Store Contact
     */
    public function saveContact(Request $request)
    {
        $contact_data = [
            'name' => $request->full_name,
            'email' => $request->your_email,
            'subject' => $request->subject,
            'message' => $request->message,
            'status' => 0,
            'type' => 0
        ];

        $contact = Contact::create($contact_data);

        return response()->json([
            'success' => true,
            'message' => 'Thank you for your message. It has been sent.'
        ]);
    }

    /**
     * Store Subscriber
     */
    public function saveSubscribe(Request $request)
    {
        $subscribe_data = [
            'email' => $request->email,
            'status' => 0,
            'type' => 1
        ];

        $contact = Contact::create($subscribe_data);

        return response()->json([
            'success' => true,
            'message' => 'Your subscription has been confirmed.'
        ]);
    }
}
