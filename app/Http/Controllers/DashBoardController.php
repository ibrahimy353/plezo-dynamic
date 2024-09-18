<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use App\Models\Hero;
use App\Models\Partner;
// use App\Models\Hero;
// use App\Models\HowItWorks;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Get the count of items from each model
        $caseStudiesCount = CaseStudy::count();
        $partnersCount = Partner::count();
        $heroCount = Hero::count();
        // $howItWorksCount = HowItWorks::count();

        // Pass these counts to the dashboard view
        return view('components.dashboard', compact(
            'caseStudiesCount',
            'partnersCount',
            'heroCount',
            // 'howItWorksCount'
        ));
    }
}
