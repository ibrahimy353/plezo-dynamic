<?php

namespace App\Http\Controllers;

use App\Models\HowItWorks;
use Illuminate\Http\Request;

class HowItWorksController extends Controller
{
    // Display the form to create a new record
    public function create()
    {
        return view('components.insert_how_it_works');
    }

    // Store the new record in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $howItWorks = new HowItWorks();
        $howItWorks->title = $request->input('title');
        $howItWorks->description = $request->input('description');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('how_it_works', 'public');
            $howItWorks->image = $imagePath;
        }

        $howItWorks->save();

        return redirect()->route('view_how_it_works')->with('status', 'How It Works section added successfully!');
    }

    // Display all records
    public function index()
    {
        $howItWorks = HowItWorks::all();
        return view('components.view_how_it_works', compact('howItWorks'));
    }

    // Show the form to edit a record
    public function edit($id)
    {
        $howItWorks = HowItWorks::findOrFail($id);
        return view('components.edit_how_it_works', compact('howItWorks'));
    }

    // Update a record in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $howItWorks = HowItWorks::findOrFail($id);
        $howItWorks->title = $request->input('title');
        $howItWorks->description = $request->input('description');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('how_it_works', 'public');
            $howItWorks->image = $imagePath;
        }

        $howItWorks->save();

        return redirect()->route('view_how_it_works')->with('status', 'How It Works section updated successfully!');
    }

    // Delete a record from the database
    public function destroy($id)
    {
        $howItWorks = HowItWorks::findOrFail($id);
        $howItWorks->delete();

        return redirect()->route('view_how_it_works')->with('status', 'How It Works section deleted successfully!');
    }
}
