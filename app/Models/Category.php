<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    /*Paso 1
    se ocupa el fillable para poner los datos que se registraran */
    protected $fillable = ['title', 'slug' ];

    public function posts(){
        return $this->belongsTo(Category::class);
    }
}
