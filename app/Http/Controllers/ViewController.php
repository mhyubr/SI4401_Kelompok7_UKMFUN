<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    // TELUTIZEN VIEW
    public function home() {
        return view('telutizen.home', [
            'title' => 'Home'
        ]);
    }
    
    public function ukm() {
        return view('telutizen.ukm', [
            'title' => 'UKM'
        ]);
    }
    
    public function event() {
        return view('telutizen.event', [
            'title' => 'Event'
        ]);
    }

    public function about() {
        return view('telutizen.about-us', [
            'title' => 'About Us'
        ]);
    }

    // UKM VIEW
    public function home_ukm() {
        return view('ukm.home-ukm', [
            'title' => Auth::user()->nama
        ]);
    }

    public function edit_ukm() {
        return view('ukm.edit-ukm', [
            'title' => 'Edit'
        ]);
    }

    public function daftar_ukm() {
        return view('ukm.daftar-ukm', [
            'title' => 'Pendaftaran'
        ]);
    }
}
