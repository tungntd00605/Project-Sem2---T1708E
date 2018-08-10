<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $table = 'folders';

    public function files(){
        return $this->hasMany('App\File');
    }

    // Lấy ra các folder con của đối tượng
    public function children()
    {
        return $this->hasMany('App\Folder', 'parentId', 'id');
    }

    // Gọi ra folder cha của đối tượng
    public function parent()
    {
        return $this->belongsTo('App\Folder', 'parentId');
    }
}
