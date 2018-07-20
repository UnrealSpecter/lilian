<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Writing extends Model
{
    protected $fillable = ['title', 'description', 'year_of_publishing', 'image_path'];
}
