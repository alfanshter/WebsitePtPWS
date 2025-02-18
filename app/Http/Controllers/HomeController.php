<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()  {
        return view('home.home');
    }

    function about() {
        return view('about.about');
    }
    function contact() {
        return view('contact.contact');
    }
    function portfolio() {
        return view('portfolio.portfolio');
    }
    function android() {
        return view('service.android.android');
    }
    function ios() {
        return view('service.ios.ios');
    }
    function website() {
        return view('service.website.website');
    }
    function desktop() {
        return view('service.desktop.desktop');
    }
    function cctv() {
        return view('service.cctv.cctv');
    }
    function iot() {
        return view('service.iot.iot');
    }
}
