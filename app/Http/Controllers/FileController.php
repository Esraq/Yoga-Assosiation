<?php

namespace App\Http\Controllers;
use App\PdfGallery;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        $images = PdfGallery::get();
        return view('pdf',compact('images'));
    }
}
