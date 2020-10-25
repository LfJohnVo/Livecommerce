<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'description', 'thumbnail'];

    //Crea un listener del evento
    //Cuando se crea un nuevo producto, verifica el slug y si no existe, genera uno nuevo
    protected static function booted()
    {
        static::creating(function ($product){
            $slug = Str::slug($product->name, '-');
            $product->slug = Product::where('slug', $slug)->exists() ? ($slug - uniqid()) : $slug;
        });
    }
}
