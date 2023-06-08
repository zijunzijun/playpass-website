<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class AttractionController extends Controller
{
    public function index()
    {
        return view('website.attraction.index');
    }
}
