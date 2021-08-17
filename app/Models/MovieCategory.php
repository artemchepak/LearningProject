<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieCategory extends Model
{
    use HasFactory;

    public function movies(){
        return $this->belongsToMany(Movie::class, 'movie_movie_category', 'category_id', 'movie_id');
    }
}
