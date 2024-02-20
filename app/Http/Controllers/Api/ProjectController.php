<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index(){
        // Funxionalita di EAGER LOADING con il nome del metodo presente all'interno del model
        $projects = Project::with('type','technologies')->paginate(20);
        // con la with lui si fa i where da  solo cercando le risorse che hanno una relazione con la risorsa in questione

        // Al termine del nostro metodo nel Controller quindi chiameremo il metodo
        // response()->json(array);
        // L'array verrà trasformato in un JSON vero e proprio da consegnare all’utente (chi ha chiamato la nostra API).
        return response()->json(
            [
                "success" => true,
                "results" => $projects
            ]);
    }



    // Show
    public function show(Project $project){
        return response()->json($project);
    }



    // Search per testare le Query String 
    public function search(Request $request){
        // Request 
        $data = $request->all();

        // Se data ha find e' settato 
        if ( isset($data['find'])){ 
            $stringa = $data['find'];
            //                           vvv la tabella dove va a cercare  
            $projects = Project::where('status', 'LIKE', "%{$stringa}%")->get();
        }
        elseif ( is_null($data['find'])) {
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

