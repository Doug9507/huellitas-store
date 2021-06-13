<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $guarded = ["id","created_at","updated_at"];

    //Relacion uno a muchos inversa - muchos a uno
    public function product(){
        return $this->belongsTo(Product::class);
    }

    //Relacion muchos a muchos
    public function colors(){
        return $this->belongsToMany(Color::class);
    }
}
