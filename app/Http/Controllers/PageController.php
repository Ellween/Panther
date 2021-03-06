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
      // $post = DB::table('posts')->orderBy('vote', 'desc')->take(6)->get();
      // $post= Post::with(['users' => function($query) use ($user){

      //   $query->whereId($user->id);

        
      // }])->orderBy('vote','desc')->take(6)->get();

      // $post = $user->posts()->get();
      
      $post = Post::with('users')->get();
      

        if(Auth::check())
        {
          $posts_array =  $user->posts->pluck('id');

        }

      


      
      return view('layout.home', compact('post','category','categories','user', 'posts_array'));
    }

  public function userPage()
  {
    $user = Auth::user();

    return view('layout.user' , compact('user'));
  }

  public function profile_setting()

  {
    $user = Auth::user();
    return view('layout.user_settings' , compact('user'));
  }

  public function user_posts()
  {
    $user = Auth::user();
    $post = $user->posts()->get();

    return view('layout.user_posts' , compact('user','post'));
  }

  public function getPosts()
    {
      $user = Auth::user();
      $post = Post::all();
      return view('layout.posts', compact('post' ,'user'));
    }

  public function getSingle($id)
    {
      $post = Post::find($id);
      $user = Auth::user();
      return view('layout.single', compact('post' ,'user'));
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
