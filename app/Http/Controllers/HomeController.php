<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        return view('home');
    }

    public function admin(): View
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        if (Auth::check() && $user->admin) {
            return view('admin');
        } else {
            return view('nope');
        }
    }

    public function show(): View
    {
        $user_id = Auth::user()->id;
        $user_info = User::find($user_id);
        return view('user', ['User' => $user_info]);
    }

    public function edit($id): View
    {
        $User = User::find($id);
        if ($User->id === Auth::user()->id) {
            return view('update_user', compact('User'));
        } else {
            return view('nope');
        }
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //Haalt het project op
        $User= User::find($id);

        //Checkt of het is ingevuld en/of min/max. X characters heeft en een string is
        $request->validate([
            'name' => 'required|min:2|max:50|string',
            'email' => 'required|max:255|string',
            'password' => 'required|min:7|max:250|string',

        ]);

        //Als de opgeslagen user id hetzelfde is als de user id als degene in de database. Dit is niet te deeplinken (zo ver ik weet)
        if ($User->id === Auth::user()->id) {
            $User->name = $request->input('name');
            $User->email = $request->input('email');

            $newPassword = $request->input('password');
            if (!empty($newPassword)) {
                $User->password = Hash::make($newPassword);
            }
            $User->update();

            return redirect('user');
        } else {
            return redirect('nope');
        }
    }

    public function delete (Request $request, $id): RedirectResponse
    {
        $User = User::find($id);

        if ($User->id === Auth::user()->id) {
            $User->id = $request->input('id');
            $User->name = $request->input('name');
            $User->email = $request->input('email');
            $User->email_verified_at = $request->input('email_verified_at');
            $User->password = $request->input('password');
            $User->admin = $request->input('admin');
            $User->rememberToken = $request->input('rememberToken');
            $User->timestamps = $request->input('timestamps');
            $User->delete();

            return redirect('homepage');
        } else {
            return redirect('nope');
        }
    }
}
