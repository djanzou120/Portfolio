<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('pages.admin.project.index')->with(['projects' => $projects]);
    }

    public function create()
    {
        return view('pages.admin.project.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), (new ProjectRequest())->rules());
        if ($validator->fails())
            return redirect()->back()->withErrors([$validator->errors()]);

        $fields = $request->only((new Project())->getFillable());

        $path = $request->file('image')->store('projects', 'local');
        $fields['image'] = $path;
        $fields['moment'] = Carbon::createFromFormat('Y-m', $fields['moment'])->format('Y');

        $project = Project::create($fields);
        if (empty($project))
            return redirect()->back()->with('error', 'Project not found');
        return redirect()->route('project.index')->with('success', 'Projet cree avec succes');
    }
}
