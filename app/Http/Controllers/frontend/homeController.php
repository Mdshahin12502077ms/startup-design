<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function about(){
        return view('home.about');
    }
    public function service(){
        return view('home.service');
    }
    public function blog(){
        return view('home.blog');
    }
    public function contact(){
        return view('home.contact');
    }
    public function portfolio(){
        return view('home.portfolio');
    }
}
