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
                    <div class="profile_picture" style ='background-image: url("{{asset('images/' . $user->user_pic)}}")' >
                        {{--  <img class ='w-100 h-100'  src="https://i.ytimg.com/vi/8rb2NoEZ5r0/maxresdefault.jpg" alt="">  --}}
                    </div>
                    <div class="profile_interest">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Asperiores unde magni dignissimos temporibus quam, 
                            reprehenderit ipsam sunt quidem nemo nihil quo sit esse. 
                            Fuga eligendi modi facere mollitia necessitatibus expedita
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Asperiores unde magni dignissimos temporibus quam, 
                            reprehenderit ipsam sunt quidem nemo nihil quo sit esse. 
                            Fuga eligendi modi facere mollitia necessitatibus expedita
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Asperiores unde magni dignissimos temporibus quam, 
                            reprehenderit ipsam sunt quidem nemo nihil quo sit esse. 
                            Fuga eligendi modi facere mollitia necessitatibus expedita
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Asperiores unde magni dignissimos temporibus quam, 
                            reprehenderit ipsam sunt quidem nemo nihil quo sit esse. 
                            Fuga eligendi modi facere mollitia necessitatibus expedita
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Asperiores unde magni dignissimos temporibus quam, 
                            reprehenderit ipsam sunt quidem nemo nihil quo sit esse. 
                            Fuga eligendi modi facere mollitia necessitatibus expedita
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Asperiores unde magni dignissimos temporibus quam, 
                            reprehenderit ipsam sunt quidem nemo nihil quo sit esse. 
                            Fuga eligendi modi facere mollitia necessitatibus expedita
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Asperiores unde magni dignissimos temporibus quam, 
                            reprehenderit ipsam sunt quidem nemo nihil quo sit esse. 
                            Fuga eligendi modi facere mollitia necessitatibus expedita
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Asperiores unde magni dignissimos temporibus quam, 
                            reprehenderit ipsam sunt quidem nemo nihil quo sit esse. 
                            Fuga eligendi modi facere mollitia necessitatibus expedita
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Asperiores unde magni dignissimos temporibus quam, 
                            reprehenderit ipsam sunt quidem nemo nihil quo sit esse. 
                            Fuga eligendi modi facere mollitia necessitatibus expedita
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Asperiores unde magni dignissimos temporibus quam, 
                            reprehenderit ipsam sunt quidem nemo nihil quo sit esse. 
                            Fuga eligendi modi facere mollitia necessitatibus expedita
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection