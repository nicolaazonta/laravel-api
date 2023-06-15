<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['type', 'technologies'])->orderByDesc('id')->paginate(6) ;

        return response()->json([
            'success' => true,
            'projects' => $projects,
        ]);
    }

    public function show($slug) {
       
        $project = Project::with(['type', 'technologies'])->where('slug', $slug)->first();
       
        if ($project) {
            return response()->json([
                'success' => true,
                'result' => $project
            ]);
        } else {
            return response()->json([
                'success' => false,
                'result' => '404: Project Not Found'
            ]);
        }
    }
}
