<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of Blogs.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blog::paginate(10);
        return view('backend.blogs.index', compact('data'));
    }
}
