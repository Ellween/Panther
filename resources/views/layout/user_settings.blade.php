@extends('main')



@section('content')
    

    <div class="container-fluid pt-5 section_1_bg_img">
        <div class="row">
            <div class="col-lg-3 col-md-3 p-0">
                <ul class="profiles">
                    <a href ='/user'><li class="myprofile "><span class='try' >My Profile</span></li></a> 
                    <a href ='/user/profile_settings'><li class="myprofile"><span class='try' >Profile settings</span></li></a>
                    <a href ='#'><li class="myprofile"><span class='try' >My Posts</span></li></a>
                    <a href ='/user_posts'><li class="myprofile"><span class='try' >Favorite Posts</span></li></a> 
                    <a href ='/logout'><li class="myprofile"><span class='try' >Log Out</span></li></a>
                </ul>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="main_side d-flex px-3">
                
                    <div class="profile_interest">
                        <form action="/change" method="POST" enctype="multipart/form-data" class ='w-50'>
                            {{ csrf_field() }}
                                <div class="change_username">
                                    <h3>Change UserName</h3>
                                        <p>Your UserName :  {{$user->name}}</p>
                                        <input type="text" name ='new_name' class ='form-control'>
                                    </div>
                                    <div class="change_password pt-3">
                                        <h3>Change Password</h3>
                                        <label for="old_pass">Old Password</label>
                                        <input type="password" name ='old_pass' class= 'form-control'>
                                        <label for="new_pass">New Password</label>
                                        <input type="password" name ='new_pass' class ='form-control'>

                                       
                                    </div>

                                    <div class="change_picture pt-3">
                                        <h3>Change Profile Picture</h3>
                                            <input type="file" name ='img'>
                                    </div>

                                    <div class="change_settings pt-3 text-center">
                                            <button class ='btn btn-success' type ='submit' > Change</button>
                                    </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection