<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    // TELUTIZEN VIEW
    public function home() {
        return view('home', [
            'title' => 'Home'
        ]);
    }
    
    public function ukm() {
        return view('ukm', [
            'title' => 'UKM'
        ]);
    }
    
    public function event() {
        return view('event', [
            'title' => 'Event'
        ]);
    }

    public function about() {
        return view('about-us', [
            'title' => 'About Us'
        ]);
    }

    // UKM VIEW
    public function home_ukm() {
        return view('home-ukm', [
            'title' => 'Home UKM'
        ]);
    }
}
