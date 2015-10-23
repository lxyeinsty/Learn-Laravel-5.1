<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected  $table = 'comment';
    protected  $fillable = ['nickname', 'email', 'website', 'content', 'page_id'];


}
