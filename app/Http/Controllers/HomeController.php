<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        return view('home.home');
    }

    function about() {
        return view('home.about');
    }
    function team() {
        return view('home.team');
    }
    function partners() {
        return view('home.partners');
    }
    function testimonials() {
        return view('home.testimonials');
    }
    function news() {
        return view('home.news');
    }
    function projects() {
        return view('home.projects');
    }
    function products() {
        return view('home.products');
    }
    function contact() {
        return view('home.contact');
    }
    function services() {
        return view('home.services');
    }
    function history() {
        return view('home.history');
    }

}
