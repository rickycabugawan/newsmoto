<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    function comment() {
    	return $this->belongsTo('App\Comment');
    }

    function user() {
    	return $this->belongsTo('App\User');
    }
}
