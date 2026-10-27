<?php

namespace App\Http\Controllers;

use App\Models\BusinessProfile;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $profile = BusinessProfile::first();
        $galleries = Gallery::all();

        return view('gallery', [
            'profile' => $profile,
            'galleries' => $galleries,
        ]);
    }
}
