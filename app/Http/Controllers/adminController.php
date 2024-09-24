<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class adminController extends Controller
{
    //
    public function index()
    {
        $projects = Project::with(['images' => function($query) {
            $query->orderBy('id')->limit(1); //this query made with help of AI as i am not very experienced with eloquent yet
        }])->get();

        return view('dashboard', ['projects' => $projects]);
    }
}
