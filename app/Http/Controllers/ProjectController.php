<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view('admin.projects', compact('projects'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id'     => 'nullable|integer',
            'name'        => 'required|string|max:255',
            'description' => 'required|string',
            'github_url'  => 'nullable|url|max:255',
            'demo_url'    => 'nullable|url|max:255',
            'images'      => 'nullable|string|max:255', // You can store comma-separated URLs or paths
            'type'        => 'nullable|string|max:100',
            'reference'   => 'nullable|string|max:255',
            'tools'       => 'nullable|string|max:255',
            'keywords'    => 'nullable|string|max:255',
            'status'      => 'nullable|string|max:50',
        ]);

        Project::create($validated);

        return redirect()->back()->with('success', 'Project added successfully.');
    }
}
