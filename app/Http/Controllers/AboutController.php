<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        // Nanti: ambil profil usaha dan keunggulan lewat Model
        return view('about');
    }
}
