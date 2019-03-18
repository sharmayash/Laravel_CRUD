<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = "Wecome to LS_APP.";
        return view('pages.index', compact('title'));
        // return view('pages.index')->with('title');
    }

    public function about()
    {
        $title = "About";
        return view('pages.about', compact('title'));
    }

    public function services()
    {
        $data = array(
            'title' => "Services",
            'services' => ['Web Design', 'Programming', 'Seo']
        );
        return view('pages.services')->with($data);
    }
}
