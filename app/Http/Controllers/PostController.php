<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Image;
use App\Post;


class PostController extends Controller
{
    public function store(Request $request)
    {

      $this->validate($request, array(
        'title' => 'required|max:5000',
        'image' => 'required',
        'place_name' => 'required|max:5000',
        'content' => 'required|max:5000',
        'long_text' => 'required|max:5000',
      ));




         if($request->hasFile('image')){

         $image = $request->file('image');
         $pic_filename = time() . '.' . $image->getClientOriginalExtension();
         $pic_location = public_path('/images/' . $pic_filename);
         Image::make($image)->save($pic_location);
       }

           if ($request->hasFile('gif')) {
          $gif = $request->file('gif');
          $name = time().'.'.$gif->getClientOriginalExtension();
          $destinationPath = public_path('/images');
          $gif->move($destinationPath, $name);
        }



      $post = Post::create([
        'title' => request('title'),
        'image' => $pic_filename,
        'place_name' => request('place_name'),
        'content' => request('content'),

      ]);
          $post->body = $request->long_text;
          $post->gif = $name;
          $post->category = $request->category_id;
          $post->save();


      return redirect('/posts');

    }

    public function storevote(Request $request , $post)
    {




      $post = Post::find($post);

      $post->vote = $post->vote +  1;



     $post->save();







    }
}
