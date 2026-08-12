<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function index()
    {
        return view('frontend.properties');
    }

    public function show()
    {
        return view('frontend.property-single');
    }
}
