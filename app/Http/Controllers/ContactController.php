<?php

namespace App\Http\Controllers;

use App\Models\BusinessProfile;
use App\Models\OrderStep;

class ContactController extends Controller
{
    public function index()
    {
        $profile = BusinessProfile::first();
        $steps = OrderStep::all();

        return view('contact', [
            'profile' => $profile,
            'steps' => $steps,
        ]);
    }
}
