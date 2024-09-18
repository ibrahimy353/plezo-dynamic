<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    // Show the form to create a new hero content
    public function create()
    {
        return view('components.create_hero');
    }

    // Store a new hero content
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $hero = new Hero();
        $hero->title = $request->input('title');
        $hero->description = $request->input('description');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('hero_images', 'public');
            $hero->image = $imagePath;
        }

        $hero->save();

        return redirect()->route('view_hero')->with('status', 'Hero content added successfully!');
    }

    // Display all hero content
    public function index()
    {
        $heroes = Hero::all();
        return view('components.view_hero', compact('heroes'));
    }

    // Show the form to edit an existing hero content
    public function edit($id)
    {
        $hero = Hero::findOrFail($id);
        return view('components.edit_hero', compact('hero'));
    }

    // Update an existing hero content
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $hero = Hero::findOrFail($id);
        $hero->title = $request->input('title');
        $hero->description = $request->input('description');

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($hero->image) {
                Storage::disk('public')->delete($hero->image);
            }
            $imagePath = $request->file('image')->store('hero_images', 'public');
            $hero->image = $imagePath;
        }

        $hero->save();

        return redirect()->route('view_hero')->with('status', 'Hero content updated successfully!');
    }

    // Delete an existing hero content
    public function destroy($id)
    {
        $hero = Hero::findOrFail($id);
        // Delete image if exists
        if ($hero->image) {
            Storage::disk('public')->delete($hero->image);
        }
        $hero->delete();

        return redirect()->route('view_hero')->with('status', 'Hero content deleted successfully!');
    }


    //Fetch data to the front end
    public function getHeroData()
    {
        $heroData = Hero::all(); // Fetch all the hero data
        return view('frontend.home', compact('heroData')); // Pass data to the front end view
    }
}
