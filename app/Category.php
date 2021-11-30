<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Article(){
        return $this->hasMany(Article::class);
    }
}
