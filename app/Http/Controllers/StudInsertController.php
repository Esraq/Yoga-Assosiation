<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class StudInsertController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function insertform(){
        return view('hello');
    }

    public function insert(Request $request){
        $name = $request->input('name');
        DB::insert('insert into first (name) values(?)',[$name]);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
}
