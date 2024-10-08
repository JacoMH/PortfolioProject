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
        $projects = Project::with([
            'images' => function($query) {
                $query->orderBy('id'); // Eager load images and order by 'id'
            },
            'skills' => function($query) {
                $query->select('skill.id', 'skill.SkillName'); // Select relevant fields from skills
            }
        ])
        ->get();

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
    public function show($id)
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

        $projectSkills = DB::table('projectskill')
        ->leftJoin('skill', 'projectskill.skill_id', '=', 'skill.id')
        ->select('projectskill.*', 'skill.SkillName')
        ->get();
        
        //return projects
        return view('portfolio/project', ['projects' => $projects, 'projectImages' => $projectImages, 'skills' => $projectSkills]);
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
