<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\BusinessProfile;

class AboutController extends Controller
{
    public function index()
    {
        $profile = BusinessProfile::first();
        $advantages = Advantage::all();

        return view('about', [
            'profile' => $profile,
            'advantages' => $advantages,
        ]);
    }
}
