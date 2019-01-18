<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'com_text',
        'post_id',
      ];
      protected $table = 'comments';

    public function posts()
    {
        return $this->belongsTo('App\Post');
    }
}
