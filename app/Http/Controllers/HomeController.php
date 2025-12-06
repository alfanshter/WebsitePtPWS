<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Display home page
     * Note: View caching dilakukan di level Laravel view:cache, bukan runtime cache
     */
    function index()  {
        return view('home.home');
    }

    /**
     * Display about page
     */
    function about() {
        return view('about.about');
    }

    /**
     * Display contact page
     */
    function contact() {
        return view('contact.contact');
    }

    /**
     * Display portfolio page
     */
    function portfolio() {
        return view('portfolio.portfolio');
    }

    /**
     * Display android service page
     */
    function android() {
        return view('service.android.android');
    }

    /**
     * Display iOS service page
     */
    function ios() {
        return view('service.ios.ios');
    }

    /**
     * Display website service page
     */
    function website() {
        return view('service.website.website');
    }

    /**
     * Display desktop service page
     */
    function desktop() {
        return view('service.desktop.desktop');
    }

    /**
     * Display CCTV service page
     */
    function cctv() {
        return view('service.cctv.cctv');
    }

    /**
     * Display IoT service page
     */
    function iot() {
        return view('service.iot.iot');
    }

    /**
     * Display automation service page
     */
    function otomasi() {
        return view('service.otomasi.otomasi');
    }
}
