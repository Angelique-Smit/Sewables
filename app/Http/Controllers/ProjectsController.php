<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;


class ProjectsController extends Controller
{
    public function index(): View
    {
        return view('projects');
    }
/**
 * Show the form for creating a new resource.
 */
public function create(Request $request): View {
    return view('projects.create');
}

/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    $project = new Project;
    $project->user_id = $request->input('user_id');
    $project->title = $request->input('title');
    $project->user_id = $request->input('picture_url');
    $project->user_id = $request->input('description');
    $project->user_id = $request->input('explanation');
    $project->save();

    return redirect()->back()->with([
    'message' =>'Project Submitted',
    'status' => 'Succes'
    ]);
}

/**
 * Display the specified resource.
 */
public function show(string $id)
{
    //
}

/**
 * Show the form for editing the specified resource.
 */
public function edit(string $id)
{
    //
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    //
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    //
}
}
