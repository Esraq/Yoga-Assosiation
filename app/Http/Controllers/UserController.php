<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
     public function index(){
       $users = DB::select('select * from student');
        return view('new_test',['users'=>$users]);
    }
    
	
   public function insert(Request $request){
      $name = $request->input('a');
      $school=$request->input('b');
      DB::insert('insert into student (name,email) values(?,?)',[$name,$school]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
   }
}
