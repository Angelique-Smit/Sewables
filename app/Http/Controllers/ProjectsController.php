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

        return view('projects', ['projects' => $projects]);
    }

    public function create(): View
    {
        return view('projects.create');
    }

    public function store(Request $request): View
    {
        // login = Data sent to the database
        // !login = Data sent to the empty void of darkness never to be seen again
        if (Auth::check()) {
            $user_id = Auth::user()->id;

            $request->validate([
                'title' => 'required|min:5|max:50|string',
                'picture_url' => 'required|string',
                'description' => 'required|min:1|max:250|string',
                'explanation' => 'required|min:1|max:3000|string'
            ]);

            $project = new project();
            $project->users_id = $user_id;
            $project->title = $request->input('title');
            $project->picture_url = $request->input('picture_url');
            $project->description = $request->input('description');
            $project->explanation = $request->input('explanation');
            $project->save();

            return view('projects');
        } else {
            return view ('error');
        }
    }

    public function update($id): View
    {
        $project = project::find($id);
        if ($project->user_id === Auth::user()->id) {
        return view('update', compact('project'));
        } else {
            return view ('projects');
        }
    }

    public function edit(Request $request, $id): View
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
            return view('projects');
        } else {
            return view('error');
        }
    }

    public function delete(Request $request, $id): View
    {
        $project = project::find($id);
        $post_check = Auth::user()->id;
        $posts_checked = project::where('users_id', 'like', '%' . $post_check . '%')->get();

        if ($project->user_id === Auth::user()->id && $posts_checked->count() >= 5) {
                $project->title = $request->input('title');
                $project->picture_url = $request->input('picture_url');
                $project->description = $request->input('description');
                $project->explanation = $request->input('explanation');
                $project->delete();
                return view('projects');
        } else {
            return view('error');
        }
    }

    public function search(Request $request): View
    {
        $request->validate([
            'search_query' => 'required'
        ]);

        $search_query = $request->input('search_query');
           if ($search_query) {
               $search_result = project::where('title', 'like', '%' . request('search') . '%')->
               orWhere('description', 'like', '%' . request('search') . '%')->get();

               return view('list', ['search_result' => $search_result]);
           }else{
               return view('error');
           }
    }

}
