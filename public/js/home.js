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


    // Store Posts  With ajax 

    $(document).ready(function(){
      $('.add_game').click(function(e){
        e.preventDefault();

        $.ajax({
          url:'/add_post',
          data:new FormData($("#upload_form")[0]),
          dataType:'json',
          async:false,
          type:'post',
          processData: false,
          contentType: false,
          success:function(response){
            
            console.log(response);
            console.log(response.post.id);

            var inputs='';

            var inputs =`  <div data-id =`+ response.post.id + ` class="col-md-6  col-lg-4 col-sm-12  mt-3  home-bg-img" style ='overflow: hidden;  background-image:linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 1.33) ), url(/images/`+ response.post.bg_img +`);' >
            <div class="both_images_titles h-100  d-flex justify-content-between flex-column" style ='position: relative;'>
              <div class="titles pt-3 text-center">
                <h3 style ='font-weight: 300;'>`+ response.post.title + `</h3>
              </div>

              <div class="img-title d-flex pb-3 w-100 justify-content-between">
                <div class ='image_title d-flex'>
                <img src="/images/`+ response.post.image +`" alt="" style='height: 100%; width: 100px;'>
                <div class="d-flex flex-column">
                  <h3 class ='text-light pl-3' style ='font-weight: 700; font-size: 22px;'>`+ response.post.place_name + `</h3>



                </div>
              </div>
                <div class ='voting'>
                <form class=" d-flex align-items-center" action="/add_vote/{{$post->id}}" method="post">
                  <i class='fas fa-arrow-alt-circle-up vote'></i>
                      <p class ='votes ml-2' style ='margin: 0;' >`+ '0' + `</p>
                </form>


              </div>
            </div>
            <div class ='post_link w-100 d-flex justify-content-end'>
              <div class="div stars_read d-flex flex-column">

                  <p><i class="fas fa-star star"></i></p>
                  <a  href ='/post/{{$post->id}}' style ='color: white;' ><p  class ='specific_post' style ='text-decoration: underline;' >Read More</p></a>

              </div>
            </div>

            </div>
            
            <div class="description p-2">
              <p class ='p-2' >`+ response.post.content +`</p>
            </div>
            <img class ='invisible' src ='/images/img_size.svg'>
          </div>`;



            $('.amas').append(inputs);

          },
        });

      });

    });


    // $(document).ready(function(){
    //   var $grid = $('.amas').masonry({
    //     columnWidth: 80
    //   });
    //   // change size of item by toggling gigante class
    //   $grid.on( 'click', '.grid-item', function() {
    //     $(this).toggleClass('gigante');
    //     // trigger layout after item size changes
    //     $grid.masonry('layout');
    //   });
    
    
    //   $('.add_loc').on( 'click', function() {
    // // create new item elements
    // var $items = $('<div class="grid-item"><img src ="https://i.pinimg.com/236x/28/61/2c/28612c9437c0756210d9e43fabd7779c.jpg"></div>');
    // // append items to grid
    // $('.amas').append( $items )
    // // add and lay out newly appended items
    // .isotope( 'appended', $items );
    // });
    
    // });


$(document).on('click' ,'.vote' ,function(event){
   
      
      var variable = $(event.target).parent().parent().find('.votes');

      var votes = $(event.target).parent().parent().find('.votes').text();

      var post_id = $(event.target).parent().parent().parent().parent().parent().attr('data-id');

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

          $(document).ready(function(){
            $('.all_categories').click(function(){
            
              var all ='';

              for (let i = 0; i < response.posts.length; i++) {
                
                all+= `  <div data-id =`+ response.posts[i].id + ` class="col-md-6  col-lg-4 col-sm-12  mt-3  home-bg-img" style ='overflow: hidden; background-image:linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 1.33) ), url(/images/`+ response.posts[i].bg_img +`);' >
                <div class="both_images_titles h-100  d-flex justify-content-between flex-column" style ='position: relative;'>
                  <div class="titles pt-3 text-center">
                    <h3 style ='font-weight: 300;'>`+ response.posts[i].title + `</h3>
                  </div>

                  <div class="img-title d-flex pb-3 w-100 justify-content-between">
                    <div class ='image_title d-flex'>
                    <img src="/images/`+ response.posts[i].image +`" alt="" style='height: 100%; width: 100px;'>
                    <div class="d-flex flex-column">
                      <h3 class ='text-light pl-3' style ='font-weight: 700; font-size: 22px;'>`+ response.posts[i].place_name + `</h3>



                    </div>
                  </div>
                    <div class ='voting'>
                    <form class=" d-flex align-items-center" action="/add_vote/{{$post->id}}" method="post">
                      <i class="fas fa-arrow-alt-circle-up vote"></i>
                          <p class ='votes ml-2' style ='margin: 0;' >`+ response.posts[i].vote + `</p>
                    </form>


                  </div>
                </div>
                <div class ='post_link w-100 d-flex justify-content-end'>

                <a  href ='/post/`+ response.posts[i].id +`' style ='color: white;' ><p  class ='specific_post' style ='text-decoration: underline;' >Read More</p></a>

</div>




                </div>
                <div class="description p-2">
                  <p class ='p-2' >`+ response.posts[i].content +`</p>
                </div>
                <img class ='invisible' src ='/images/img_size.svg'>
              </div>`;
                
              }

              $('.amas').html(all);

            });

          });

          var inputs ='';

         for(var i = 0 ; i < response.post.length; i++)
         {
            inputs += `  <div data-id =`+ response.post[i].id + ` class="col-md-6  col-lg-4 col-sm-12  mt-3  home-bg-img" style ='overflow: hidden;  background-image:linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 1.33) ), url(/images/`+ response.post[i].bg_img +`);' >
                <div class="both_images_titles h-100  d-flex justify-content-between flex-column" style ='position: relative;'>
                  <div class="titles pt-3 text-center">
                    <h3 style ='font-weight: 300;'>`+ response.post[i].title + `</h3>
                  </div>

                  <div class="img-title d-flex pb-3 w-100 justify-content-between">
                    <div class ='image_title d-flex'>
                    <img src="/images/`+ response.post[i].image +`" alt="" style='height: 100%; width: 100px;'>
                    <div class="d-flex flex-column">
                      <h3 class ='text-light pl-3' style ='font-weight: 700; font-size: 22px;'>`+ response.post[i].place_name + `</h3>



                    </div>
                  </div>
                    <div class ='voting'>
                    <form class=" d-flex align-items-center" action="/add_vote/{{$post->id}}" method="post">
                      <i class="fas fa-arrow-alt-circle-up vote"></i>
                          <p class ='votes ml-2' style ='margin: 0;' >`+ response.post[i].vote + `</p>
                    </form>


                  </div>
                </div>
                <div class ='post_link w-100 d-flex justify-content-end'>

                <a  href ='/post/`+ response.post[i].id +`' style ='color: white;' ><p  class ='specific_post' style ='text-decoration: underline;' >Read More</p></a>

</div>




                </div>
                <div class="description p-2">
                  <p class ='p-2' >`+ response.post[i].content +`</p>
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


$(document).ready(function(){
  $('#add_comment').click(function(e){
    e.preventDefault();

    var text = $('#comment_text').val();
    var id = $('.section_3').attr('data-id');
    
    $.ajax({

      headers: {
           'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
         },

         method: 'POST',
         url: '/add_comment/' + id,
         data: {text: text} ,

        success:function(data)
        {
          console.log(data);
          $('.all_comments').append(data);
        },

        error:function()
        {
          console.log('merh');
        }



      });
    





  });
});

$(document).ready(function(){
  $('.menu-li-login').click(function(){
    $('.login').addClass("active");
  });
}); 


$(document).on('click','.star' , function(event){
    var star  = event.target;
    var id = $(event.target).parent().parent().parent().parent().parent().parent().attr('id');
    var post_id = $(event.target).parent().parent().parent().parent().parent().parent().attr('data-id');
    $.ajax({

      headers: {
           'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
         },

         method: 'POST',
         url: '/add_favorite/' + post_id ,
         data: {id: id} ,

        success:function(data)
        {
          $(star).attr('style' ,'color: yellow');
         
        },

        error:function()
        {
          console.log('merh');
        }



      });

 
}); 
