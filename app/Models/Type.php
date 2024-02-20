<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

// Nel Model principale inseriamo una funzione con un nome che identifichi larelazione con l’altra tabella.
// Nel nostro caso, il Model principale (o indipendente) è Project.
// Aggiungiamo il metodo projects() nel quale
// restituiamo il tipo di relazione hasMany() con il Model secondario Project.

    public function projects() { 
        $this->hasMany(Project::class);

     }

}
