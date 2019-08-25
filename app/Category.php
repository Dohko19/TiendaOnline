<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
        public static $messages = [
        'name.required' => 'Es necesario Ingresar un nombre para la categoria',
        'name.min' => 'El nombre de la categoria debe tener al menos 3 caracteres',
        'description.max' => 'No debe de exeder los 250 caracteres',
        ];
        public static $rules = [
            'name' =>'required|min:3',
            'description' =>'max:250',
        ];
    protected $fillable = ['name', 'description'];

        public function products()
    {
    	return $this->hasMany(Product::class);
    }

    public function getFeaturedImageUrlAttribute()
    {
        $featuredProduct = $this->products()->first();
        return $featuredProduct->featured_image_url;
    }
}
