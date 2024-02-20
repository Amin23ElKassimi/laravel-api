<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index(){
        // ? EAGER LOADING con il nome del metodo presente all'interno del model
        $projects = Project::all();

        // Al termine del nostro metodo nel Controller quindi chiameremo il metodo
        // response()->json(array);
        // L'array verrà trasformato in un JSON vero e proprio da consegnare all’utente (chi ha chiamato la nostra API).
        return response()->json($projects);
    }

    public function show(Project $project){
        return response()->json($project);
    }
}
 