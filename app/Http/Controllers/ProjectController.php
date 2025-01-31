<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('frontend.addproject');
    }
    public function addProject(Request $req)
    {
       $validated = $req->validate([
        'pname' => 'required|string|min:3',
        'hours' => 'required',
        'status' => 'required|string',
        'priority' => 'required|string',
        'mangername' => 'required|string|min:3',
        'assign' => 'required|string|min:3',
       ]);
       Project::create($validated);
       return redirect()->back()->with('success','Project added successfully');
    }
}
