<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $page = config('divija.pages.gallery');
        $poster = Gallery::poster()->first();
        $galleries = Gallery::showcase()->orderBy('id')->get();

        return $this->render('gallery', compact('page', 'poster', 'galleries'));
    }
}
