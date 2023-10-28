<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class Routing extends Controller
{
    public function homepage(): View
    {
        return view('homepage');
    }

    public function nope(): RedirectResponse
    {
        return redirect('nope');
    }

}
