<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projet extends Model
{
    use SoftDeletes;

    protected $fillable = ['author', 'title', 'sub_title', 'article', 'sub_article', 'category_id'];

    public function category() { 
        return $this->belongsTo(Category::class); 
    }
}
