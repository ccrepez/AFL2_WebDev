<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function index()
    {
        // Nanti: ambil langkah cara pesan dan info kontak lewat Model
        return view('contact');
    }
}
