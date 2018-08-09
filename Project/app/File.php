<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public function tag(){
        return $this->hasOne('App/Tag');
    }

    public function user(){
        return $this->hasOne('App/User');
    }

    public function folder(){
        return $this->belongsTo('App\Folder');
    }
}
