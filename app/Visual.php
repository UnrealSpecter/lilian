<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visual extends Model
{
    protected $fillable = ['tile', 'year_of_publishing', 'image_path'];
}
