<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::orderBy('name')->get();
        return view('admin.skills', compact('skills'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'nullable|integer',
            'name'    => 'required|string|max:255',
            'type'    => 'nullable|string|max:100',
            'level'   => 'nullable|string|max:50',
            'logo'    => 'nullable|string|max:255', // URL or path to logo image
        ]);

        Skill::create($validated);

        return redirect()->back()->with('success', 'Skill added successfully.');
    }
}
