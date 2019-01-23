@extends('main')



@section('content')
    

    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <ul class="profiles">
                        <a href ='/user'><li class="myprofile">My Profile</li></a> 
                        <a href ='/user/profile_settings'><li class="myprofile">Profile settings</li></a>
                        <li class="myprofile">My Posts</li>
                        <li class="myprofile">Favorite Posts</li>
                        <a href ='/logout'><li class="myprofile">Log Out</li></a>
                </ul>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="main_side d-flex px-3">
                
                    <div class="profile_interest">
                        <form action="/change" method="POST">
                            @csrf
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