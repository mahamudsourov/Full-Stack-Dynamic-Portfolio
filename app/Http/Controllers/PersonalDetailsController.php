<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalDetail;

class PersonalDetailsController extends Controller
{
    public function index()
    {
        $details = PersonalDetail::orderBy('id')->get();
        return view('admin.personal_details', compact('details'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id'     => 'nullable|integer',
            'description' => 'nullable|string',
            'blood_group' => 'nullable|string|max:10',
            'department'  => 'nullable|string|max:255',
            'age'         => 'nullable|integer|min:0',
            'dob'         => 'nullable|date',
            'address'     => 'nullable|string|max:500',
            'gender'      => 'nullable|string|max:10',
        ]);

        PersonalDetail::create($validated);

        return redirect()->back()->with('success', 'Personal details added successfully.');
    }
}
