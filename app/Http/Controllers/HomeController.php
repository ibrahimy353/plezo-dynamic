<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\CaseStudy; // Import the CaseStudy model
use App\Models\Hero;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Fetch hero data if needed
        $heroData = Hero::all();
        // Fetch all partners from the database
        $partners = Partner::all();

        // Fetch all case studies from the database
        $caseStudies = CaseStudy::all();



        // Pass all data to the view
        return view('frontend.home', compact('heroData', 'caseStudies', 'partners'));
    }
}
