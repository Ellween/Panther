<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
   'title',
   'place_name',
   'image',
   'body',
   'content',
   'vote',
 ];

 public function category()
 {
   return $this->belongsTo('App\Category');
 }

 public function comments()
 {
   return $this->hasMany('App\Comment');
 }

}
