<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files';

    public function tag(){
        return $this->belongsTo('App/Tag');
    }

    public function user(){
        return $this->belongsTo('App/User');
    }

    public function folder(){
        return $this->belongsTo('App\Folder');
    }
}
