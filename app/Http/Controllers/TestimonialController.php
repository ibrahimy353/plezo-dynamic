<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function inserttestimonial()
    {
        return view('components.inserttestimonial');
    }
    public function viewtestimonial()
    {
        return view('components.viewtestimonial');
    }
}
