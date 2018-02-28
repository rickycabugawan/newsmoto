<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    function user() {
    	return $this->belongsTo('App\User');
    }

    function article() {
    	return $this->belongsTo('App\Article');
    }
    
    function reply() {
        return $this->hasMany('App\Reply');
    }
}
