<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        // newest first by from_date (adjust if you prefer to_date)
        $experiences = Experience::orderBy('from_date', 'desc')->get();
        return view('admin.experiences', compact('experiences'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id'      => 'nullable|integer',
            'type'         => 'required|string|max:100',
            'designation'  => 'required|string|max:150',
            'organization' => 'required|string|max:150',
            'from_date'    => 'required|date',
            'to_date'      => 'nullable|date|after_or_equal:from_date',
        ]);

        Experience::create($validated);

        return back()->with('success', 'Experience added successfully!');
    }

    public function destroy($id)
    {
        $exp = Experience::findOrFail($id);
        $exp->delete();

        return back()->with('success', 'Experience deleted successfully!');
    }
}
