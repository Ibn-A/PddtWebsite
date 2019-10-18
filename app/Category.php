<?php

namespace App;

use App\Projet;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function projets() { 
        return $this->hasMany(Projet::class); 
    }
}