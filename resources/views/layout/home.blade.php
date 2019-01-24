@extends('main')


@section('content')



<section class ='section-1'>
<div class="container-fluid">
  <div class="row">
    <div class="col-12 p-0">
      <div class="home_bg_img">
        <div class="container d-flex flex-column justify-content-around h-100 align-items-center">
          <div class="row">
            <div class="col-md-12 pt-5">
              <h1 class ='text-light text-center' style= 'font-weight: 300;' >WELCOME TO</h1>
              <h1 class ='text-light' style ='font-size: 150px; font-weight: bold;' >PANTHER</h1>
              <hr style ='background: white; border-width: 4px; width: 20%;'>
              <h3 class ='text-light text-center pt-4' style ='font-weight: 300;'  >HIKING IS LOVE , HIKING IS LIFE</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-12">

              <button style= 'padding: 2rem 7.75rem; background-color: #b1b6bc78; border-color: #757e82; font-weight: bold; ' type="button"  class ='btn btn-primary wat' name="button">Register</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>



<div class="login">
  <div class="container">
    <div class="row">
      <div class="login_header d-flex justify-content-center w-100" >
        <h1>Login</h1>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <form action="{{ route('login') }}" method="POST">
        @csrf
          <div class="login_username d-flex flex-column align-items-center justify-content-center w-100 p-5">
              <div class="username w-100 text-center">
                <h1>username</h1>
                <input type = 'email' class ='form-control'  name ='email'>
              </div>
              <div class="password w-100 text-center">
                <h1>password</h1>
                <input type ='password' class ='form-control' name ='password' >
              </div>
              <div class="log pt-5">
                <button type ='submit'  class ='btn btn-primary' >Login</button>
              </div>
            </div>
      </form>
    </div>
  </div>
</div>


<section class='section_2'>
<div class="container-fluid">
  <div class="row">
    <div class="col-12 p-0">
      <div class="section_1_bg_img">
        <div class="container d-flex flex-column justify-content-around h-100 align-items-center">
          <div class="both pb-3 pt-5">
            <div class="row">
              <div class="col-12">
                <form method="POST" action="{{ route('register') }}" >
                  @csrf

                  <label class ='d-flex justify-content-center text-light font-weight-bold'  style ='font-size: 35px;' for="">Register</label>
                  <div class="form_name" style = 'position: relative;'>
                    <label for="name" class ='va'  >Name</label>
                    <input id ='name' class ='form-control mt-4 hm' type="text" name="name" value="" required>
                  </div>
                  <div class="form_name" style = 'position: relative;'>
                    <label for="email" class ='va'  >Email</label>
                    <input id ='email' class ='form-control mt-4 hm' type="text" name="email" value="" required>
                  </div>
                  <div class="form_name" style = 'position: relative;'>
                      <label for="email" class ='va'  >Password</label>
                      <input id ='password' class ='form-control mt-4 hm' type="password" name="password" value="" required>
                  </div>
                  <div class="form_name" style = 'position: relative;'>
                    <label for="phone" class ='va'  >Phone Number</label>
                    <input id ='phone'  class ='form-control mt-4 hm' type="text" name="phone" value="" required>
                  </div>
                  <div class="form_name" style = 'position: relative;'>
                    <label for="data" class ='va'  >Data</label>
                    <input id ='data'  class ='form-control mt-4 hm' type="text" name="data" value="" required>
                  </div>
                  <div class="form_name" style = 'position: relative;'>
                    <label for="locations" class ='va'  >Location</label>
                    <input id ='locations'  class ='form-control mt-4 hm' type="text" name="locations" value="" required>
                  </div>
                  <div class="form_name" style = 'position: relative;'>
                    <label for="passangers" class ='va'  >Number of passangers</label>
                    <input id ='passangers' class ='form-control mt-4 hm' type="text" name="passangers" value="" required>
                  </div>
                  <div class="d-flex justify-content-center w-100 pt-5">
                    <button class ='btn btn-primary w-50 p-3 btn-submit' style ='background-color: #007bff00;'  type="submit" >Done</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>




<section class ='section_3'>
<div class="container-fluid">
  <div class="row">
    <div class="col-12 p-0">
      <div class="section_2_bg_img pt-5 pb-5">        
      <div class ='popup-location'>
        <div class="close_btn w-100 d-flex justify-content-end">
          <p class ='p-0 m-0 pr-2' ><i class="fas fa-times close"></i></p>
        </div>
        <div class="location_form">
          <form class="post_form" action="/add_post" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="location_title d-flex flex-column">
              <label for="title">Title</label>
              <input class ='form-control hm' type="text" name="title" value="">
            </div>
            <div class="location_image d-flex flex-column">
              <label for="image">Upload the Image</label>
              <input class ='hm' type="file" name="image" value="">
            </div>
            <div class="location_gif d-flex flex-column">
              <label for="gif">Upload the gif</label>
              <input class =' hm' type="file" name="gif" value="">
            </div>
            <div class="location_gif d-flex flex-column">
                <label for="gif">Upload background</label>
                <input class =' hm' type="file" name="bg-img" value="">
              </div>
            <div class="location_gif d-flex flex-column">
              <label for="category_input">Choose Category</label>
              <select class="form-control" name="category_id">
                @foreach($category as $category)
                  <option value="{{$category->id}}">{{$category->category}}</option>
                @endforeach
              </select>
            </div>
            <div class="location_place_name d-flex flex-column">
              <label for="place_name">Place Name: </label>
              <input class ='form-control hm' type="text" name="place_name" value="">
            </div>
            <div class="location_content d-flex flex-column">
              <label for="content">description:</label>
              <textarea class ='form-control' type="text" name="content" value=""></textarea>
            </div>
            <div class="location_text d-flex flex-column">
              <label for="long_text">Text:</label>
              <textarea class='form-control' type="text" name="long_text" value=""></textarea>
            </div>
            <div class ='location_add w-100 d-flex justify-content-center'>
              <button type="submit" class ='btn btn-primary add_loc mt-2 ' style ='background-color: #b1b6bc78; border-color: #b1b6bc36;'  name="button">ADD Location</button>
            </div>
          </form>

        </div>
      </div>
      

        <div class="container-fluid d-flex flex-column justify-content-around text-light h-100 align-items-center">
            

            <h1 class ='all_categories' >Category</h1>
          <div class="category d-flex">
            @foreach($categories as $category)
              <option class ='cat category_id' value="{{$category->id}}">{{$category->category}}</option>
            @endforeach
          </div>

          <div class="row w-100 amas" style ='width: 86% !important;'>
              @foreach($post as $post)
                <div @if(Auth::check()) id ={{$user->id}} @endif data-id ={{$post->id}} class="col-md-6  col-lg-4 col-sm-12  mt-3  home-bg-img" style ='overflow: hidden; background-image:linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 1.33) ), url("{{asset("images/" . $post->bg_img)}}"); '>
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
                      @if(Auth::check())
                        <div id ={{$posts_array}}  data-id = {{$post->id}}>

                         
                          

                             
                       @if(in_array($post->id, $posts_array->toArray()))

                          <p><i class="fas fa-star star" style ='color: yellow;'></i></p>

                          @else 

                          <p><i class="fas fa-star star"></i></p>
                          
                        @endif 
                            


                        </div>

                        @else 
                        
                        <p><i class="fas fa-star star"></i></p>

                        @endif


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
        <div class="container-fluid">
          <div class="many_more w-100 d-flex justify-content-center pt-5 mt-5">
            <button style= 'padding: 2rem 7.75rem; background-color: #b1b6bc78; border-color: #b1b6bc36; font-weight: bold; ' type="button"  class ='btn btn-primary add_loc' name="button">Add Location</button>
            <a href ='/posts'><button style= 'padding: 2rem 7.75rem; background-color: #b1b6bc78; border-color: #b1b6bc36; font-weight: bold; ' type="button"  class ='btn btn-primary  ml-2' name="button">More Location</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>




<section class ='section_4'>
<div class="container-fluid">
  <div class="row">
    <div class="col-12 p-0">
      <div class="section_4_bg_img">
        <div class="container d-flex flex-column justify-content-center align-items-center" style ='min-height: 100vh;'>
          <div class="row">
            <div class="col-md-12 pt-5 pb-5 mb-5">
              <h1 class ='text-light text-center ' style ='font-weight: 300; font-size: 5.5rem;' >Tour Leaders</h1>
              <h1 class ='text-light text-center mb-5' style ='font-weight: 300' >Professionals</h1>
              <div class="profiles d-flex justify-content-around">
                <div class="img-1 d-flex ">
                  <div class="img-name d-flex justify-content-center flex-column items-align-center">
                    <img class ='leader-img' style ='width: auto; height: 130px; border-radius: 50%; padding: 0 40px;' src="/images/author.png" alt="">
                    <p class ='text-center pt-3 text-light' style ='font-size: 20px;' >David Smith</p>
                  </div>
                  <div class="leader_disc text-light" style =''>
                    <div class="xxx">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                    </div>
                    </div>
                </div>
                <div class="img-1 d-flex ">
                  <div class="img-name d-flex justify-content-center flex-column items-align-center">
                    <img class ='leader-img' style ='width: auto; height: 130px; border-radius: 50%; padding: 0 40px;' src="/images/author.png" alt="">
                    <p class ='text-center pt-3 text-light' style ='font-size: 20px;' >Jason Bitch</p>
                  </div>
                  <div class="leader_disc text-light" style =''>
                    <div class="xxx">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                    </div>
                    </div>
                </div>
                <div class="img-1 d-flex ">
                  <div class="img-name d-flex justify-content-center flex-column items-align-center">
                    <img class ='leader-img' style ='width: auto; height: 130px; border-radius: 50%; padding: 0 40px;' src="/images/author.png" alt="">
                    <p class ='text-center pt-3 text-light' style ='font-size: 20px;' >Jay  Brown</p>
                  </div>
                  <div class="leader_disc text-light" style =''>
                    <div class="xxx">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                    </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>


@endsection
