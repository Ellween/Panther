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
           
        ));

      
        
        
        

        $user = Auth::user();

       
        
        
   
          
        if($request->hasFile('img')) {
            $user_img_name = $request->file('img');
            $user_name = time().'.'.$user_img_name->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $user_img_name->move($destinationPath, $user_name);


          }

        if(Hash::check($request->old_pass,$user->password))
        {
         $user->password =  Hash::make($request->new_pass);
       }
      

        
        $user->name = $request->new_name;
        $user->user_pic = $user_name;

       
       

        
        $user->save();


        return redirect()->back();


    }
}
