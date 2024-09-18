<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function insertaboutus()
    {
        return view('components.insertaboutus');
    }
    public function viewaboutus()
    {
        return view('components.viewaboutus');
    }
}
