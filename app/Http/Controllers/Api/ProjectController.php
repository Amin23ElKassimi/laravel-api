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

    public function search(Request $request){
        $data = $request->all();

        // Se data ha name settato 
        if ( isset($data['priority'])){
            $stringa = $data['priority'];
            $projects = Project::where('name', 'LIKE', "%{$stringa}%")->get();
        }
        elseif ( is_null($data['priority'])) {
            $projects = Project::all();
        } 
        // Altrimenti avbort
        else {
            abort(404);
        }

        return response()->json([
            "success" => true,
            "results" => $projects,
            // Contsa quanti proggetti hai trovato  
            "matches" => count($projects)
        ]);
         
    }
}

