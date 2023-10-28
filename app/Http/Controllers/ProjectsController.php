<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    public function index(): View
    {
        $projects = project::all();
        return view('projects', compact('projects'));
    }

    public function store(Request $request): RedirectResponse
    {
        // Logged in = uploaded
        //!Logged in = error

        $request->validate([
            'title' => 'required|min:5|max:50|string',
            'picture_url' => 'required|string',
            'description' => 'required|min:1|max:250|string',
            'explanation' => 'required|min:1|max:3000|string'
        ]);

        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $project = new project();
            $project->users_id = $user_id;
            $project->title = $request->input('title');
            $project->picture_url = $request->input('picture_url');
            $project->description = $request->input('description');
            $project->explanation = $request->input('explanation');
            $project->save();

            return redirect('projects')->with([
                'message' => 'Project succesfully made!',
                'status'=> 'Succes'
            ]);
        } else {
            return redirect('projects')->with([
                'message' => 'Project succesfully made!',
                'status'=> 'Succes'
            ]);
        }
    }

    public function update ($id): View
    {
        $project = project::find($id);
        if ($project->users_id == Auth::user()->id) {
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
        if ($project->users_id === Auth::user()->id) {
            $project->title = $request->input('title');
            $project->picture_url = $request->input('picture_url');
            $project->description = $request->input('description');
            $project->explanation = $request->input('explanation');
            $project->update();
            return redirect('projects')->with([
                'message' => 'Project succesfully editted!',
                'status'=> 'Succes'
            ]);
        } else {
            return redirect('/project')->with([
                'message' => 'You do not seem to be the owner of this project. Please try again on the right account.',
                'status'=> 'error'
            ]);
        }
    }

    public function delete(Request $request, $id): RedirectResponse
    {
        $project = project::find($id);

        $post_check = Auth::user()->id;
        $posts_checked = project::where('users_id', 'like', '%' . $post_check . '%')->get();

        if ($project->users_id === Auth::user()->id && $posts_checked->count() >= 5) {
            $project->title = $request->input('title');
            $project->picture_url = $request->input('picture_url');
            $project->description = $request->input('description');
            $project->explanation = $request->input('explanation');
            $project->delete();
            return redirect('projects')->with([
                'message' => 'Project Succesfully deleted!',
                'status'=> 'Succes'
            ]);
        } else {
            return redirect('projects')->with([
                'message' => 'You do not seem to be the owner of this project or have not uploaded a minimum of 5 projects. Please try again later.',
                'status'=> 'error'
            ]);
        }
    }

    public function search(Request $request): View
    {
        $request->validate([
            'search_query' => 'required|string'
        ]);

        $search_query = $request->input('search_query');

        if (!empty($search_query)) {
            $query_result = project::where('title', 'like', '%' . $search_query . '%')
                ->orWhere('description', 'like', '%' . $search_query . '%')->get();

            return view('list', ['query_result' => $query_result])->with([
                'message' => 'We found some projects that might be what you are looking for',
                'status' => 'Succes'
            ]);

        } else {
            return view('projects')->with([
                'message' => 'No corresponding projects could be found',
                'status' => 'Error'
            ]);
        }
    }
}
