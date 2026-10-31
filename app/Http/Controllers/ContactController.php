<?php

namespace App\Http\Controllers;

use App\Models\OrderStep;

class ContactController extends Controller
{
    public function index()
    {
        $steps = OrderStep::orderBy('step_number')->get();

        return view('contact', compact('steps'));
    }
}
