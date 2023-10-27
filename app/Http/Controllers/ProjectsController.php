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
        $projects = project::all();

        return view('projects', ['projects', $projects]);
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
<<<<<<< HEAD
            // Handle the case where the user is not authenticated
            return redirect()->back()->with([
                'message' => 'User not authenticated',
=======
            // Error message
            return redirect()->back()->with([
                'message' => 'Something went wrong! Check your info and try again!',
>>>>>>> parent of 6deb4e9 (aswan help)
                'status' => 'Error',
            ]);
        }
    }

    public function show(string $id)
    {
<<<<<<< HEAD
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
=======
        $project = project::find($id);
        if ($project->user_id === Auth::user()->id) {
        return view('update', compact('project'));
        } else {
            return view('nope');
        }
    }

    public function edit(Request $request, $id): RedirectResponse
    {
        //Haalt het project op
        $project = project::find($id);

        //Checkt of het is ingevuld en/of min/max. X characters heeft en een string is
        $request->validate([
            'title' => 'required|min:5|max:50|string',
            'picture_url' => 'required|string',
            'description' => 'required|min:1|max:250|string',
            'explanation' => 'required|min:1|max:3000|string'
        ]);

        //Als de opgeslagen user id hetzelfde is als de user id als degene in de database. Dit is niet te deeplinken (zo ver ik weet)
        if ($project->user_id === Auth::user()->id) {
            $project->title = $request->input('title');
            $project->picture_url = $request->input('picture_url');
            $project->description = $request->input('description');
            $project->explanation = $request->input('explanation');
            $project->update();
            return redirect('projects');
        } else {
            return redirect('nope');
        }
    }

    public function delete(Request $request, $id): RedirectResponse
    {
        $project = project::find($id);

        if ($project->user_id === Auth::user()->id) {
        $project->title = $request->input('title');
        $project->picture_url = $request->input('picture_url');
        $project->description = $request->input('description');
        $project->explanation = $request->input('explanation');
        $project->delete();
        return redirect('projects');
        } else {
        return redirect('nope');
        }
    }

>>>>>>> parent of 6deb4e9 (aswan help)
}
