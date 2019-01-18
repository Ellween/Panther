@extends('main')


@section('content')
  <section class ='section_3' data-id= "{{$post->id}}">
      <div class="section_2_bg_img pt-5 pb-5">
        <div class="container-fluid d-flex flex-column justify-content-around text-light h-100 align-items-center">
          <h1>{{$post->title}}</h1>
        </div>
        <div class="container-fluid">
          <div class="row px-5">
            <div class="col-md-12 px-5">
              <div class="container-fluid px-5">
                <div class="row px-5 py-5">
                  <div class="col-md-2">
                    <div class="name_img d-flex flex-column align-items-center">
                      <div class="name">
                        <h3 class ='text-light' >{{$post->place_name}}</h3>
                      </div>
                      <div class="img">
                        <img style ='width: 100%;' src="{{asset('images/' . $post->image)}}" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-10 px-5">
                    <div class="post_content">
                      <p class ='text-light' >{{$post->body}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 d-flex justify-content-center">

                <div class="comment">
                      <div class="comment_text">
                          <textarea name="text" id="comment_text" class ='form-control mt-4'  rows="5"></textarea>
                         </div>
                         <div class="add_comment d-flex justify-content-center pt-3">
                           <button type ='submit' class= 'btn bnt-primary' id ='add_comment' >Add Comment</button>
                         </div>
                </div>
            </div>
          </div>
        </div>

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="all_comments pt-5">
                @foreach ($post->comments as $comment)
                  @include('layout.comments')
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
@endsection
