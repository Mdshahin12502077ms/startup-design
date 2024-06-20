<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ERP(){
        return view('home.product.ERP');
    }

    public function ecom_web(){
        return view('home.product.ecom_web');
    }

    public function statin_manage(){
        return view('home.product.station_manage');
    }

    public function school_manage(){
        return view('home.product.school_manage');
    }

    public function inventory_manage(){
        return view('home.product.inventory');
    }

    public function lc_manage(){
        return view('home.product.lc_manage');
    }

    public function auto_rice_manage(){
        return view('home.product.auto_rice_manage');
    }

    public function hr_manage(){
        return view('home.product.hr');
    }

    public function hospital_manage(){
        return view('home.product.hospital_manage');
    }

    public function booking_manage(){
        return view('home.product.booking_manage');
    }

    public function other(){
        return view('home.product.other');
    }
}
