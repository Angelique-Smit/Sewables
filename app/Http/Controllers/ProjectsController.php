<?php

namespace App\Http\Controllers;

use App\Models\project; // Preserve the capitalization of project
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    public function index(): View
    {
        return view('projects');
    }

    public function create(): View
    {
        return view('projects.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // Check if the user is authenticated before accessing their ID
        if (Auth::check()) {
            $user_id = Auth::user()->id; // Use Auth::user() to access the authenticated user
            $project = new project(); // Preserve the capitalization
            $project->users_id = $user_id;
            $project->title = $request->input('title');
            $project->picture_url = $request->input('picture_url');
            $project->description = $request->input('description');
            $project->explanation = $request->input('explanation');
            $project->save();

            return redirect()->back()->with([
                'message' => 'Project Submitted',
                'status' => 'Success',
            ]);
        } else {
            // Handle the case where the user is not authenticated
            return redirect()->back()->with([
                'message' => 'User not authenticated',
                'status' => 'Error',
            ]);
        }
    }

    public function show(string $id)
    {
        // You can implement the code to show a project by its ID here
    }

    public function edit(string $id)
    {
        // You can implement the code to edit a project here
    }

    public function update(Request $request, string $id)
    {
        // You can implement the code to update a project here
    }

    public function destroy(string $id)
    {
        // You can implement the code to delete a project here
    }
}
