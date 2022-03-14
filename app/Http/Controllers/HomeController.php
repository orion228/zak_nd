<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function our_project(){
        return view('project');
    }

    public function service(){
        return view('welcome');
    }

    public function contact(){
        return view('contact');
    }

    public function architechture(){
        return view('architechture');
    }

    public function road(){
        return view('road');
    }
    public function big(){
        return view('big');
    }
    public function auther_services(){
        return view('auther_services');
    }
    public function decoration(){
        return view('decoration');
    }
}
