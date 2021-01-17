<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {
        return view('frontend.index');
    }

    public function gallery()
    {
        return view('frontend.gallery')->with('images', Image::where('public', true)->get());
    }
}
