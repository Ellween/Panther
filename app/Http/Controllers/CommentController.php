<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentController extends Controller
{
    public function store(Request $request , $post)
    {

        
       
        $comment = Comment::create([
            'com_text' => $request->text,
            'post_id' => $post,
          
        ]);

        
        return view('layout.comments',compact('comment'))->render();


    }
}