<?php

namespace App\Http\Controllers;

use App\Models\PriceLevel;
use App\Models\Feature;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    // Show the form to create a new pricing level
    public function create()
    {
        return view('components.insert_pricing');
    }

    // Store a new pricing level
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'features.*' => 'nullable|string',
        ]);

        $pricingLevel = new PriceLevel();
        $pricingLevel->name = $request->input('name');
        $pricingLevel->description = $request->input('description');
        $pricingLevel->price = $request->input('price');
        $pricingLevel->save();

        // Store features
        if ($request->has('features')) {
            foreach ($request->input('features') as $feature) {
                Feature::create([
                    'pricing_level_id' => $pricingLevel->id,
                    'feature' => $feature,
                ]);
            }
        }

        return redirect()->route('view_pricing')->with('status', 'Pricing level added successfully!');
    }

    // View all pricing levels
    public function index()
    {
        $pricingLevels = PriceLevel::with('features')->get();
        return view('components.view_pricing', compact('pricingLevels'));
    }

    // Show the form to edit a pricing level
    public function edit($id)
    {
        $pricingLevel = PriceLevel::with('features')->findOrFail($id);
        return view('components.edit_pricing', compact('pricingLevel'));
    }

    // Update a pricing level
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'features.*' => 'nullable|string',
        ]);

        $pricingLevel = PriceLevel::findOrFail($id);
        $pricingLevel->name = $request->input('name');
        $pricingLevel->description = $request->input('description');
        $pricingLevel->price = $request->input('price');
        $pricingLevel->save();

        // Update features
        Feature::where('pricing_level_id', $id)->delete();
        if ($request->has('features')) {
            foreach ($request->input('features') as $feature) {
                Feature::create([
                    'pricing_level_id' => $pricingLevel->id,
                    'feature' => $feature,
                ]);
            }
        }

        return redirect()->route('view_pricing')->with('status', 'Pricing level updated successfully!');
    }

    // Delete a pricing level
    public function destroy($id)
    {
        $pricingLevel = PriceLevel::findOrFail($id);
        $pricingLevel->delete();

        // Also delete associated features
        Feature::where('pricing_level_id', $id)->delete();

        return redirect()->route('view_pricing')->with('status', 'Pricing level deleted successfully!');
    }
}
