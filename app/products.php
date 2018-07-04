<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table= "product";
    protected $primaryKey="id";
    protected $fillable= ["name","category_id" , "image"];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
