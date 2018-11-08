<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class First_Page_Controller extends Controller
{
    public function index(){


       return view("first_page");

    }

    public function insert(Request $request){
      $content	
      $name = $request->input('a');
      $school=$request->input('b');
      DB::insert('insert into details (content,name,email) values(?,?)',[$content,$name,$school]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
   }
}
