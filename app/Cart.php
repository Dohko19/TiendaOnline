<?php

namespace App;

use App\CartDetail;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    function details()
    {
    	return $this->hasMany(CartDetail::class);
    }
}
