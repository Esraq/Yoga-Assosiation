<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageGallery;
class GallerController extends Controller
{
    public function index()
    {
        $images = ImageGallery::get();
        return view('welcome',compact('images'));
    }
}
