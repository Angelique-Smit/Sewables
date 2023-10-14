<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse; // Add this import
use App\Http\Requests\StoreProjectPost; // Add this import

class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function store(StoreProjectPost $request): RedirectResponse
    {
        // Retrieve the validated input data...
        $validated = $request->validated();

        Post::create($validated);
        return redirect('/');
    }
}

