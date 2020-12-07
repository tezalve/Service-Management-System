<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestlteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function home(){

        // return view('home');
        return view('admin_template');

    }

    public function welcome(){

        return view('welcome');

    }

    public function admin_template(){

        return view('admin_template');

    }
}
