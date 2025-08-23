<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievement;

class AchievementController extends Controller
{
    // Show all achievements
    public function index()
    {
        $achievements = Achievement::orderBy('date', 'desc')->get();
        return view('admin.achievements', compact('achievements'));
    }

    // Store new achievement
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'nullable|string|max:255',
            'certification' => 'nullable|string|max:255',
            'organization' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'images' => 'nullable|string',
            'category' => 'nullable|string|max:255',
        ]);

        Achievement::create([
            'user_id' => auth()->id() ?? 1,
            'name' => $request->name,
            'type' => $request->type,
            'certification' => $request->certification,
            'organization' => $request->organization,
            'date' => $request->date,
            'images' => $request->images,
            'category' => $request->category,
        ]);

        return redirect()->back()->with('success', 'Achievement added successfully!');
    }

    // Delete achievement
    public function destroy($id)
    {
        $achievement = Achievement::findOrFail($id);
        $achievement->delete();

        return redirect()->back()->with('success', 'Achievement deleted successfully!');
    }
}
