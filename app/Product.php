<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use Searchable;
    protected $table = 'Products';
    /**
     * Attributes that are mass assignable
     * @var array
     */
    protected $fillable = ['name', 'price', 'description_thumbnail', 'description', 'image_url'];
}
