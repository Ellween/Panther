<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
use App\Category;


class PageController extends Controller
{
  public function getIndex()
    {
      $category = Category::all();
      $categories = Category::all();
      $post = DB::table('posts')->orderBy('vote', 'desc')->take(6)->get();
      return view('layout.home', compact('post','category','categories'));
    }

    public function getPosts()
    {
      $post = Post::all();
      return view('layout.posts', compact('post'));
    }

    public function getSingle($id)
    {
      $post = Post::find($id);

      return view('layout.single', compact('post'));
    }

    public function get_category($id)
    {
      $category = Category::all();
      $categories = Category::all();
      $post = Post::where('category',$id)->get();
      return response()->json(['response' => 'success', 'post' => $post]);

    }
}
