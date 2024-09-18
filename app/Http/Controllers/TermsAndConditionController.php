<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsAndConditionController extends Controller
{
    public function termsandcondition()
    {
        return view('components.termsandcondition');
    }

    public function viewtermsandcondition()
    {
        return view('components.viewtermsandcondition');
    }
}
