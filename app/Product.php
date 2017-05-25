<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'producto';

    protected $fillable = [
        'title', 'description', 'price', 'image', 'estimatedTime', 'estado'
    ];


}
