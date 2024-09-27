<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    //
    public function index()
    {
        $projects = Project::with(['images' => function($query) {
            $query->orderBy('id'); //this query made with help of AI as i am not very experienced with eloquent yet
        }])->get();

        return view('admin/dashboard', ['projects' => $projects]);
    }

    public function editPage($id) 
    {
        $projects = project::where('id', $id)
        ->get()
        ->map(function ($post){
            $post->updated_at = Carbon::parse($post->updated_at); //changes the string created by the STDclass to a carbon instance
            $post->created_at = Carbon::parse($post->created_at);
            return $post;
        });

        $projectImages = DB::table('projectimages')->where('project_id', $id)->get();
        
        //return projects
        return view('admin/edit', ['projects' => $projects, 'projectImages' => $projectImages]);
    }

    public function add() 
    {
        return view('admin/add');
    }
}
