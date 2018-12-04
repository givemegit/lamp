<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index(){
        $projects = Project::all();
        // return $projects;
        return view('project.index' , compact('projects'));
    }

    public function create(){
        return view('project.create');
    }
    public function store(Request $request){
        $project = new Project;
        $project->title = $request->title;
        $project->description = $request->description;
        $project->save();
        return redirect('/projects');
    }
    public function show($id){
        $project = Project::findorfail($id);
        return view('project.show', compact('project'));
    }
    public function edit($id){
        $project = Project::findorfail($id);
        return view('project.edit ', compact('project'));
    }
    public function update(Request $request,$id){
        $project = Project::findorfail($id);
        $project->title = $request->title;
        $project->description = $request->description;
        $project->update();
        return redirect('/projects/'.$id);
    }
    public function destroy($id){

        $project = Project::findorfail($id);
        $project->delete();
        return redirect('/projects');
    }
}
