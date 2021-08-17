<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsToMany(MovieCategory::class, 'movie_movie_category', 'movie_id', 'category_id');
    }
}
