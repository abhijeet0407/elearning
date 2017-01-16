<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userlog extends Model
{
    //

    public function user(){
        return $this->hasOne('App\user');
    }
}
