<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use App\Models\Message; 
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalProjects = Project::count();
        // $totalMessages = Message::count(); 

        return view('admin.dashboard', compact('totalUsers', 'totalProjects'));
    }
}
