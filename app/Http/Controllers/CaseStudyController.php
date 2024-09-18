<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CaseStudyController extends Controller
{
    // Show the form to create a new case study
    public function create()
    {
        return view('components.create_case_study');
    }

    // Store a new case study
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $caseStudy = new CaseStudy();
        $caseStudy->title = $request->input('title');
        $caseStudy->description = $request->input('description');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('case_study_images', 'public');
            $caseStudy->image = $imagePath;
        }

        $caseStudy->save();

        return redirect()->route('case_studies.index')->with('status', 'Case study added successfully!');
    }

    // Display all case studies
    public function index()
    {
        $caseStudies = CaseStudy::all();
        return view('components.view_case_study', compact('caseStudies'));
    }

    // Show the form to edit an existing case study
    public function edit($id)
    {
        $caseStudy = CaseStudy::findOrFail($id);
        return view('components.edit_case_study', compact('caseStudy'));
    }

    // Update an existing case study
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $caseStudy = CaseStudy::findOrFail($id);
        $caseStudy->title = $request->input('title');
        $caseStudy->description = $request->input('description');

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($caseStudy->image) {
                Storage::disk('public')->delete($caseStudy->image);
            }
            $imagePath = $request->file('image')->store('case_study_images', 'public');
            $caseStudy->image = $imagePath;
        }

        $caseStudy->save();

        return redirect()->route('case_studies.index')->with('status', 'Case study updated successfully!');
    }

    // Delete an existing case study
    public function destroy($id)
    {
        $caseStudy = CaseStudy::findOrFail($id);
        // Delete image if exists
        if ($caseStudy->image) {
            Storage::disk('public')->delete($caseStudy->image);
        }
        $caseStudy->delete();

        return redirect()->route('case_studies.index')->with('status', 'Case study deleted successfully!');
    }


    // Display a single case study
    public function show($id)
    {
        $caseStudy = CaseStudy::findOrFail($id);
        return view('components.show_case_study', compact('caseStudy'));
    }
    // Fetch data to the front end
    public function getCaseStudyData()
    {
        $caseStudies = CaseStudy::all(); // Fetch all the case studies
        return view('frontend.home', compact('caseStudies')); // Pass data to the front end view
    }
}
