<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PdfGallery;
class PdfController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $images = PdfGallery::get();
        return view('pdf-gallery',compact('images'));
    }


    /**
     * Upload image function
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif,pdf|max:2048',
        ]);


        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);


        $input['title'] = $request->title;
        PdfGallery::create($input);


        return back()
            ->with('success','File Uploaded successfully.');
    }


    /**
     * Remove Image function
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PdfGallery::find($id)->delete();
        return back()
            ->with('success','File removed successfully.');
    }
}
