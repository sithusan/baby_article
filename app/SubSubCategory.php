<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    //
    public function subCategory(){
        return $this->belongsTo('App\SubCategory');
    }
    public function article(){
        return $this->hasMany('App\Article');
    }
}
