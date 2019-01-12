$(document).ready(function(){
      var section_2 = $(".section_2").position();
      var section_3 = $(".section_3").position();
      var section_4 = $('.section_4').position();
  $('.wat').click(function(){
    $('html, body').animate({
          scrollTop: section_2.top
        }, 800);
        return false;
  });



    $('.menu-li-home, .logo').click(function(){
      $('html, body').animate({
          scrollTop: $('body').scrollTop(),
        }, 800, function(){
        });
          });

    $('.menu-li-location').click(function(){
      $('html, body').animate({
            scrollTop: section_3.top
          }, 800);
          return false;
    });

    $('.menu-li-guide').click(function(){
      $('html, body').animate({
          scrollTop: section_4.top
          }, 800);
          return false;
    });

    });

    $(document).ready(function(){

      $('.form_name input').on({
        focus: function(){
          $(this).prev().addClass('active');
        },
        blur: function(){
          $(this).prev().removeClass('active');
        }
      })


    });



    $(document).ready(function(){



      $('.bg-img').on({
        mouseover: function(){
          $(this).find('.img-title').addClass('active');
          $(this).find('.description').addClass('active');
          $(this).find('.titles').addClass('active');
          $(this).addClass('active');
        },
        mouseleave: function(){
          $(this).find('.img-title').removeClass('active');
          $(this).find('.description').removeClass('active');
          $(this).find('.titles').removeClass('active');
          $(this).removeClass('active');
        }
      });


      $('.img-1').on({
        mouseover: function(){
          $(this).find('.leader_disc').addClass('active');
        },
        mouseleave: function(){
          $(this).find('.leader_disc').removeClass('active');
        }
      });

      $('.hm').blur(function() {
          if( $(this).val().length !== 0 ) {

              $(this).prev().attr('style' , 'top: 100%');
          }
      })


      $('.add_loc').click(function(){
          $('.popup-location').toggleClass('active');
      });

      $('.close').click(function(){
        $('.popup-location').removeClass('active');
      });

    });


$(document).ready(function(){
    $('.vote').click(function(event){
      event.preventDefault();

      var variable = $(this).parent().parent().find('.votes');

      var votes = $(this).parent().parent().find('.votes').text();

      var post_id = $(this).parent().parent().parent().parent().parent().attr('data-id');

      console.log(post_id);

      $.ajax({

        headers: {
             'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
           },

           method: 'POST',
           url: '/add_vote/' + post_id,


             success: function(data)
           {
             $(variable).text(parseInt(votes) + 1);


           },
           error: function()
           {
             console.log('ara')
           },

      });
    });
});


$(document).ready(function(){
  $('.category_id').click(function(){
    var id = $(this).val();
    var post = jQuery.parseJSON(JSON.stringify(data));
    var myGloVar;



    $.ajax({

      headers: {
           'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
         },

         method: 'POST',
         url: '/get_category/' + id,


           success: function(response)
         {

          console.log(response.post.length);
         console.log(response.post[0].id)
          var inputs ='';

         for(var i = 0 ; i < response.post.length; i++)
         {
            inputs += `  <div data-id =`+ response.post[i].id + ` class="col-md-6  col-lg-4 col-sm-12  mt-3  bg-img" style ='overflow: hidden;' >
                <div class="both_images_titles h-100  d-flex justify-content-between flex-column" style ='position: relative;'>
                  <div class="titles pt-3 text-center">
                    <h3 style ='font-weight: 300;'>`+ response.post[i].title + `</h3>
                  </div>

                  <div class="img-title d-flex pb-3 w-100 justify-content-between">
                    <div class ='image_title d-flex'>
                    <div class="d-flex flex-column">
                      <h3 class ='text-light pl-3' style ='font-weight: 700; font-size: 22px;'>`+ response.post[i].place_name + `</h3>



                    </div>
                  </div>
                    <div class ='voting'>
                    <form class=" d-flex align-items-center" action="/add_vote/{{$post->id}}" method="post">
                      @csrf
                      <i class="fas fa-arrow-alt-circle-up vote"></i>
                          <p class ='votes ml-2' style ='margin: 0;' >`+ response.post[i].vote + `</p>
                    </form>


                  </div>
                </div>
                <div class ='post_link w-100 d-flex justify-content-end'>

                <a  href ='/post/{{$post->id}}' style ='color: white;' ><p  class ='specific_post' style ='text-decoration: underline;' >Read More</p></a>

</div>




                </div>
                <div class="description p-2">
                  <p class ='p-2' >{{$post->content}}</p>
                </div>
                <img class ='invisible' src ='/images/img_size.svg'>
              </div>`;
         }



          $('.amas').html(inputs)



        },
         error: function()
         {
           console.log('ara')
         },

    });

  });
});
