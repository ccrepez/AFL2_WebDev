<?php

namespace App\Http\Controllers;

use App\Models\OrderStep;

class ContactController extends Controller
{
    public function index()
    {
        $page = config('divija.pages.contact');
        $steps = OrderStep::orderBy('step_number')->get();

        return $this->render('contact', compact('page', 'steps'));
    }
}
