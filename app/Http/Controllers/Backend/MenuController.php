<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of Menus.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Menu::orderBy('order')->paginate(10);
        return view('backend.menus.index', compact('data'));
    }

    /**
     * Create New Navigation
     */
    public function store(Request $request)
    {
        $menu_data = [
            'title' => $request->title,
            'link' => $request->link
        ];

        $menu = Menu::create($menu_data);
        $menu_card = view('layouts.backend.portial.menu', ['menu' => $menu])->render();

        return response()->json([
            'success' => true,
            'html' => $menu_card,
            'message' => 'New navigation created'
        ]);
    }

    /**
     * Update Menu
     */
    public function update(Request $request)
    {
        $menu = Menu::find($request->id);
        $update_data = [
            'title' => $request->title,
            'link' => $request->link,
            'type' => $request->type,
            'parent' => $request->parent
        ];

        try {
            $menu->update($update_data);
        } catch (Exception $e) {
            $error = $e->getMessage();
            return response()->json([
                'success' => false,
                'message' => $message
            ]);
        }

        return response()->json([
            'success' => true
        ]);
    }
}
