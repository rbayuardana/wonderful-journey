<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['category_id', 'user_id','title','description','image'];
    public function Category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function User(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
