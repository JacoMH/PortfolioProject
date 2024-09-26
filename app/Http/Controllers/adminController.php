<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;

class adminController extends Controller
{
    //
    public function index()
    {
        $projects = Project::with(['images' => function($query) {
            $query->orderBy('id'); //this query made with help of AI as i am not very experienced with eloquent yet
        }])->get();

        return view('portfolio/index', ['projects' => $projects]);
    }
}
