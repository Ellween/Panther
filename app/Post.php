<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
   'title',
   'place_name',
   'image',
   'content',
   'vote',
 ];

 public function category()
 {
   return $this->belongsTo('App\Category');
 }
}
