<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    // Display all partners
    public function index()
    {
        $partners = Partner::all();
        return view('components/partners.index', compact('partners'));
    }

    // Show form to create a new partner
    public function create()
    {
        return view('components/partners.create');
    }

    // Store a new partner
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'logo' => 'image|nullable|max:1999',
        ]);

        if ($request->hasFile('logo')) {
            // Handle file upload
            $fileName = time() . '.' . $request->file('logo')->getClientOriginalExtension();
            $path = $request->file('logo')->storeAs('public/partners', $fileName);
        } else {
            $fileName = null;
        }

        Partner::create([
            'name' => $request->name,
            'logo' => $fileName,
        ]);

        return redirect()->route('partners.index')->with('status', 'Partner added successfully!');
    }

    // Show form to edit a partner
    public function edit(Partner $partner)
    {
        return view('components/partners.edit', compact('partner'));
    }

    // Update a partner
    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'name' => 'required',
            'logo' => 'image|nullable|max:1999',
        ]);

        if ($request->hasFile('logo')) {
            // Handle file upload
            $fileName = time() . '.' . $request->file('logo')->getClientOriginalExtension();
            $path = $request->file('logo')->storeAs('public/partners', $fileName);
            $partner->logo = $fileName;
        }

        $partner->name = $request->name;
        $partner->save();

        return redirect()->route('partners.index')->with('status', 'Partner updated successfully!');
    }

    // Delete a partner
    public function destroy(Partner $partner)
    {
        if ($partner->logo) {
            // Delete logo from storage
            Storage::delete('public/partners/' . $partner->logo);
        }
        $partner->delete();

        return redirect()->route('partners.index')->with('status', 'Partner deleted successfully!');
    }

    public function getPartnerData()
    {
        $partnerData = Partner::all(); // Fetch all the hero data
        return view('frontend.home', compact('partnerData')); // Pass data to the front end view
    }
}
