<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Hash;



use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function change(Request $request)
    {
        $this->validate($request,array(
            'new_name' => 'required|string|max:255',
            'new_pass' => 'required|string|min:6',
            'old_pass' => 'required|string|min:6',
            'new_image' => 'required',
        ));

      

        
        

        $user = Auth::user();

       
        
        if ($request->hasFile('gif')) {
            $gif = $request->file('gif');
            $name = time().'.'.$gif->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $gif->move($destinationPath, $name);
          }

          else {
              dd($request);
          }
  
   



        if(Hash::check($request->old_pass,$user->password))
        {
         $user->password =  Hash::make($request->new_pass);
       }
      

        
        $user->name = $request->new_name;
        $user->user_pic = $name;
        

        $user->save();

        return redirect()->back();


    }
}
