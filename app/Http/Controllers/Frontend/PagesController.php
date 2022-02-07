<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Page;

class PagesController extends Controller
{
    /** 
     * Get Homepage
     */
    public function index() {
        $page = Page::where('template', 'Homepage')->first();
        $page_content = json_decode($page->content);
        $page_header = $page->header;
        return view('frontend.pages.home', ['content' => $page_content, 'header' => $page_header]);
    }

    /**
     * Get page to show
     */
    public function getPage($slug)
    {
        if($slug == 'why-us') {
            return view('frontend.pages.why-us', ['header' => 'ground']);
        }

        if($slug == 'meet-team') {
            return view('frontend.pages.meet-team', ['header' => 'ground-block']);
        }

        $page = Page::where('slug', $slug)->first();

        if(!$page) {
            return abort(404);
        }

        $page_type = $page->template;
        $page_title = $page->title;
        $page_slug = $page->slug;
        $page_header = $page->header;
        $page_content = json_decode($page->content);

        switch($page_type) {
            case 'Homepage': 
                return view('frontend.pages.home', ['content' => $page_content, 'header' => $page_header]);
            break;

            case 'Default': 
                return view('frontend.pages.single', ['content' => $page_content, 'slug' => $page_slug, 'header' => $page_header]);
            break;

            case 'Dark': 
                return view('frontend.pages.dark', ['content' => $page_content, 'header' => $page_header]);
            break;

            default:
                return view('frontend.pages.single', ['content' => $page_content, 'header' => $page_header]);
        }
    }

    /**
     * Test page will be implemented to main
     */
    public function test()
    {
        return view('frontend.pages.test', ['header' => 'flex']);
    }
}
