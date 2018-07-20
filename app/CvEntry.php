<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CvEntry extends Model
{
    protected $fillable = ['year_of_achievement', 'description'];
    protected $table = 'cv_entries';

    public function category()
    {
        return $this->belongsTo('App\CvCategory');
    }

}
