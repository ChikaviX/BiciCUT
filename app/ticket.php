<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    public function user(){
    	return hasMany(App\User)<
    }
}
