<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'page';

    public  function hasManyComments()
    {
        return $this->hasMany('App\Comment', 'page_id', 'id');
    }
}
