<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::orderBy('passing_year', 'desc')->get();
        return view('admin.educations', compact('educations'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id'       => 'nullable|integer',  // optional or you can set rules
            'type'          => 'required|string|max:255',
            'name'          => 'required|string|max:255',
            'institute'     => 'required|string|max:255',
            'enrolled_year' => 'required|integer|min:1900|max:' . (date('Y') + 5),
            'passing_year'  => 'required|integer|min:1900|max:' . (date('Y') + 5),
            'grade'         => 'nullable|string|max:50',
        ]);

        Education::create($validated);

        return redirect()->back()->with('success', 'Education added successfully.');
    }
}
