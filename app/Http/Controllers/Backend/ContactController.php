<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display Contacts
     */
    public function index()
    {
        $data = Contact::where('type', '0')->paginate(15);
        return view('backend.contacts.index', compact('data'));
    }

    /**
     * Edit Contact
     */
    public function edit($id)
    {
        $data = Contact::find($id);
        return view('backend.contacts.edit', compact('data'));
    }
}
