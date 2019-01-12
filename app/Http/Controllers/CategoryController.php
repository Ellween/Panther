<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
    public function addcategory(Request $request)
    {
      $this->validate($request , array(
        'category' => 'required|max:255',
      ));

      $category = Category::create([

        'category' => request('category'),

      ]);


      return redirect('/posts');
    }
}
