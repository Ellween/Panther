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
                <div class="main_side d-flex px-3 ">
                
                        <div class="row w-100 amas" style ='width: 86% !important;'>
                                @foreach($post as $post)
                                  <div @if(Auth::check()) id ={{$user->id}} @endif data-id ={{$post->id}} class="col-md-6  col-lg-4 col-sm-12  mt-3  home-bg-img" style ='overflow: hidden; background-image:linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 1.33) ), url("{{asset("images/" . $post->bg_img)}}"); min-height: auto; color: white;'>
                                    <div class="both_images_titles h-100  d-flex justify-content-between flex-column" style ='position: relative;'>
                                      <div class="titles pt-3 text-center">
                                        <h3 style ='font-weight: 300;'>{{$post->title}}</h3>
                                      </div>
                  
                                      <div class="img-title d-flex pb-3 w-100 justify-content-between">
                                        <div class ='image_title d-flex'>
                                        <img src="{{asset('images/' . $post->image)}}" alt="" style='height: 100%; width: 100px;'>
                                        <div class="d-flex flex-column">
                                          {{-- <h3 class ='text-light pl-3' style ='font-weight: 700; font-size: 22px;'>{{შვეიცარია}}</h3> --}}
                                          <h3 class ='text-light pl-3' style ='font-weight: 700; font-size: 22px;'>{{$post->place_name}}</h3>
                  
                  
                  
                                        </div>
                                      </div>
                                        <div class ='voting'>
                                        <form class=" d-flex align-items-center" action="/add_vote/{{$post->id}}" method="post">
                                          @csrf
                                          <i class="fas fa-arrow-alt-circle-up vote"></i>
                                              <p class ='votes ml-2' style ='margin: 0;' >{{$post->vote}}</p>
                                        </form>
                  
                  
                                      </div>
                                    </div>
                  
                                    
                                    <div class ='post_link w-100 d-flex justify-content-end'>
                                      <div class="div stars_read d-flex flex-column">
                                          <div>
                                              <p class ='star' ><i class="fas fa-star"></i></p>
                                          </div>
                                      <a  href ='/post/{{$post->id}}' style ='color: white;' ><p  class ='specific_post' style ='text-decoration: underline;' >Read More</p></a>
                    
                                      </div>
                                      </div>
                                       
                                    </div>
                                    <div class="description p-2">
                                      <p class ='p-2' >{{$post->content}}</p>
                                    </div>
                                    <img class ='invisible' src ='/images/img_size.svg'>
                                  </div>
                                @endforeach
                            </div>
                </div>
            </div>
        </div>
    </div>

@endsection