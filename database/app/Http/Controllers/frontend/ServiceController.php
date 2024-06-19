<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function soft_dev(){
        return view('home.soft_dev');
    }

    public function web_dev(){
        return view('home.web_dev ');
    }

    public function buss_dev(){
        return view('home.buss_dev ');
    }

    public function application_dev(){
        return view('home.application_dev');
    }

    public function consult_dev(){
        return view('home.consult_dev');
    }

    public function app_dev(){
        return view('home.app_dev');
    }
}
