<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    // protected $table = 'posts';
    //
    // protected $primarykey = 'post_id';

    protected $fillable = [

      'title',
      'content'


    ];

}
