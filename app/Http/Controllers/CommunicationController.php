<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunicationController extends Controller
{
    public function index(){
        return view('communication');
    }

    public function defination(){
        return view('yoga');
    }
    public function benefit(){
        return view('yoga_benefical');
    }
    public function test(){
        return view('history');
    }
    public function test1(){
        return view('contact');
    }
    public function test2(){
        return view('varity');
    }
    public function test3(){
        return view('number1');
    }
    public function test4(){
        return view('number');
    }
    public function test5(){
        return view('number2');
    }
    public function test6(){
        return view('number4');
    }
    public function test7(){
        return view('numbert5');
    }
    public function test8(){
        return view('number6');
    }
    public function test9(){
        return view('number7');
    }
    public function test10(){
        return view('number8');
    }
    public function test11(){
        return view('guide');
    }
    public function test12(){
        return view('video');
    }


}
