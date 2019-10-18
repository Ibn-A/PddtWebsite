<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = ['author', 'title', 'sub_title', 'article', 'sub_article'];

    public function category() { 
        return $this->belongsTo(Category::class); 
    }
}
