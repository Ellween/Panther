@extends('main')


@section('content')
  <section class ='section_3'>
      <div class="section_2_bg_img pt-5 pb-5">

                <div class="container-fluid d-flex flex-column justify-content-around text-light h-100 align-items-center">
                  <form class="" action="/add_category" method="post">
                    @csrf
                    <input type="text" class ='form-control' name="category" value="">
                    <button type="submit" name="button">add Category</button>
                  </form>
                  <div class="row w-100 amas" style ='width: 86% !important;'>
                      @foreach($post as $post)
                        <div data-id ={{$post->id}} class="col-md-6  col-lg-4 col-sm-12  mt-3  bg-img" style ='overflow: hidden; background-image:linear-gradient( rgba(0, 0, 0, 0.16), rgba(0, 0, 0, 1.33) ), url("{{asset("images/" . $post->gif)}}");' >

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

                          </div>

                          <div class="Read_more_vote">

                          </div>
                          <div class="Read_more d-flex flex-column justify-content-end text-right">
                            <div class ='voting d-flex justify-content-end'>
                            <form class=" d-flex align-items-center" action="/add_vote/{{$post->id}}" method="post">
                              @csrf
                              <i class="fas fa-arrow-alt-circle-up vote"></i>
                                  <p class ='votes ml-2' style ='margin: 0;' >{{$post->vote}}</p>
                            </form>


                          </div>
                            <a  href ='/post/{{$post->id}}' style ='color: white;' ><p  class ='specific_post' style ='text-decoration: underline;' >Read More</p></a>

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
</section>
@endsection
