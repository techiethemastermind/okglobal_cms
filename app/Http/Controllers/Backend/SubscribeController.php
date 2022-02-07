<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Contact;

class SubscribeController extends Controller
{
    /**
     * Display Subscribers
     */
    public function index()
    {
        $data = Contact::where('type', '1')->paginate(15);
        return view('backend.subscribers.index', compact('data'));
    }
}
