<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\AboutUs;

class HomeController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        $about = AboutUs::latest()->first();
        return view('home', compact('galleries', 'about'));
    }
}
