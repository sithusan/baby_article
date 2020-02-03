<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    public function baby(){
        return $this->hasOne(Baby::class);
    }
}
