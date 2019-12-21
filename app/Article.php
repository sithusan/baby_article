<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function subSubCategory(){
        return $this->belongsTo('App\SubSubCategory');
    }
}
