<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userlogout extends Model
{
    //
    public function user(){
        return $this->hasOne('App\user');
    }
}
