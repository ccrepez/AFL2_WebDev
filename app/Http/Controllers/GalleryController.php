<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $poster = Gallery::where('category', 'poster')->first();

        $galleries = Gallery::where('category', 'produk')
            ->orderBy('id')
            ->get();

        return view('gallery', [
            'poster' => $poster,
            'galleries' => $galleries,
        ]);
    }
}
