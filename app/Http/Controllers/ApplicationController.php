<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    //
    public function index()
    {
        $applications = Application::with('user')
            ->latest()
            ->take(50)
            ->get();

        return view('home', ['applications' => $applications]);
    }
}
