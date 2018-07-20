<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CvCategory extends Model
{
    protected $fillable = ['name'];
    protected $table = 'cv_categories';

    public function entries(){
        return $this->hasMany('App\CvEntry', 'category_id');
    }

}
