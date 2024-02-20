<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'description',
        'status',
        'view',
        'start_date',
        'end_date',
        'client_id',
        'budget',
        'priority',
        'type_id',
    ];

// Esattamente come nella relazione One to One, nel Model secondario mappiamo la relazione inversa usando il metodo belongsTo().
// Nel nostro caso, inseriamo nel Model secondario Post il metodo type() che
// rappresenta la relazione di dipendenza verso il Model Type principale.

    public function type() { 
        return  $this->belongsTo(Type::class);
     }

     public function Technologies(){
        return $this->belongsToMany(Technology::class)->withTimestamps();
    }

}
