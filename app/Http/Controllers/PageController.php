<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
use Auth;
use App\Category;
use App\User;



class PageController extends Controller
{
  public function getIndex()
    {
      $user = Auth::user();
      $category = Category::all();
      $categories = Category::all();
      $post = DB::table('posts')->orderBy('vote', 'desc')->take(6)->get();
      return view('layout.home', compact('post','category','categories','user'));
    }

  public function userPage()
  {
    $user = Auth::user();

    return view('layout.user' , compact('user'));
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
      $posts = DB::table('posts')->orderBy('vote', 'desc')->take(6)->get();
      return response()->json(['response' => 'success', 'post' => $post , 'posts' => $posts]);

    }
}
