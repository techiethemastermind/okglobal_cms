<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Page;

class PageController extends Controller
{
    /**
     * Display a listing of Pages.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Page::paginate(10);
        return view('backend.pages.index', compact('data'));
    }

    /**
     * Create a new Page
     */
    public function create()
    {
        return view('backend.pages.create');
    }

    /**
     * Store page information
     */
    public function store(Request $request)
    {
        $page_data = [
            'title' => $request->pageTitle,
            'slug' => $request->pageSlug,
            'content' => $request->components,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'template' => $request->template,
            'published' => $request->published
        ];

        $page = Page::create($page_data);

        return response()->json([
            'success' => true,
            'page_id' => $page->id,
            'message' => 'New page created'
        ]);
    }

    /**
     * Edit page
     * $id -> page id
     */
    public function edit($id)
    {
        $page = Page::find($id);
        return view('backend.pages.edit', compact('page'));
    }

    /**
     * Update page controller
     * $id -> page id
     */
    public function updatePage(Request $request)
    {
        $data = $request->all();

        $page_data = [
            'title' => $data['pageTitle'],
            'slug' => $data['pageSlug'],
            'template' => $data['template'],
            'header' => $data['header'],
            'content' => $data['components'],
            'published' => $data['published']
        ];

        $page = Page::find($data['id']);

        try {
            $page->update($page_data);
        } catch (Exception $e) {
            $error = $e->getMessage();
            return response()->json([
                'success' => false,
                'message' => $message
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Successfully Updated'
        ]);
    }

    public function deletePage($id) {

        try {
            Page::find($id)->delete();

            return response()->json([
                'success' => true,
                'action' => 'delete'
            ]);
        } catch (Exception $e) {

            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    /**
     * Page Show
     * $id -> page id
     */
    public function getComponent(Request $request)
    {
        $component = $request->component;

        switch($component) {

            case 'heroComponent':
                $component_html = view('layouts.backend.components.hero-banner.empty')->render();
            break;

            case 'coinsComponent':
                $component_html = view('layouts.backend.components.coins-section.empty')->render();
            break;

            case 'colComponent':
                $component_html = view('layouts.backend.components.col-section.empty')->render();
            break;

            case 'htmlComponent':
                $component_html = view('layouts.backend.components.html-section.empty')->render();
            break;

            case 'iconComponent':
                $component_html = view('layouts.backend.components.icon-section.empty')->render();
            break;

            case 'imageComponent':
                $component_html = view('layouts.backend.components.image-section.empty')->render();
            break;

            case 'roadmapComponent':
                $component_html = view('layouts.backend.components.roadmap-section.empty')->render();
            break;

            case 'teamComponent':
                $component_html = view('layouts.backend.components.team-section.empty')->render();
            break;

            case 'videoComponent':
                $component_html = view('layouts.backend.components.video-section.empty')->render();
            break;

            case 'sectionComponent':
                $component_html = view('layouts.backend.components.custom-section.empty')->render();
            break;

            case 'bannerComponent':
                $component_html = view('layouts.backend.components.banner-section.empty')->render();
            break;

            case 'countryComponent':
                $component_html = view('layouts.backend.components.country-section.empty')->render();
            break;

            case 'featuresComponent':
                $component_html = view('layouts.backend.components.features-section.empty')->render();
            break;

            case 'contactForm':
                $component_html = view('layouts.backend.components.contact-form.empty')->render();
            break;

            case 'mapComponent':
                $component_html = view('layouts.backend.components.map-section.empty')->render();
            break;

            default:
                //
        }

        return response()->json([
            'success' => true,
            'html' => $component_html
        ]);
    }
}
