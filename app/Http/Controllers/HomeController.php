<?php

namespace App\Http\Controllers;


use App\Tour;

class HomeController extends Controller
{
    public function index()
    {
        $tours = Tour::take(9)->get();
        $tours_count = Tour::count();
        return view('index', compact('tours', 'tours_count'));
    }
}
