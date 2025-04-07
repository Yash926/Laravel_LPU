<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects=[
            'Project 1',
            'Project 2',
            'Project 3'
        ];
        return view('projects.index', compact('projects'));

    }
}
