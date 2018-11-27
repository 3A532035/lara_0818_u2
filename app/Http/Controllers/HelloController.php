<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //

    public function index($name = 'Everybode'){
        $data = ['name' => $name];

        return view('hello.index',$data);
    }
}
