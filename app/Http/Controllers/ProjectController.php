<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = DB::table('project')
        ->leftJoin(DB::raw('(SELECT * FROM projectimages LIMIT 1) as projectimages'), 'projectimages.project_id', '=', 'project.id') //only 1 image from projectimages
        ->select('project.*', 'projectimages.*')
        ->get()
        ->map(function ($post){
        $post->updated_at = Carbon::parse($post->updated_at); // changes the string created by the STDclass to a carbon instance
        $post->created_at = Carbon::parse($post->created_at);
        return $post;
        });

        //return projects
        return view('portfolio/index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(project $project, $id)
    {
        //
         $projects = project::where('id', $id)
        ->get()
        ->map(function ($post){
            $post->updated_at = Carbon::parse($post->updated_at); //changes the string created by the STDclass to a carbon instance
            $post->created_at = Carbon::parse($post->created_at);
            return $post;
        });

        $projectImages = DB::table('projectimages')->where('project_id', $id)->get();
        
        //return projects
        return view('portfolio/project', ['projects' => $projects, 'projectImages' => $projectImages]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(project $project)
    {
        //
    }
}
