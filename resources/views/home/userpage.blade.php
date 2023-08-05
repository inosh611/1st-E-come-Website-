<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>FASION</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('home/css/bootstrap.css') }}" />
      <!-- font awesome style -->
      <link href="{{ asset("home/css/font-awesome.min.css") }}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{ asset("home/css/style.css") }}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{ asset("home/css/responsive.css") }}" rel="stylesheet" />

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
         @include('home.slider')
         <!-- end slider section -->
      </div>
      <!-- why section -->
      @include('home.why')
      <!-- end why section -->
      
      <!-- arrival section -->
      @include('home.arival')
      <!-- end arrival section -->
      
      <!-- product section -->
      @include('home.product')
      <!-- end product section -->

      

      

      <!-- subscribe section -->
      @include('home.subscribe')
      <!-- end subscribe section -->
      <!-- client section -->
      @include('home.client')
      <!-- end client section -->
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2023 All Rights Reserved By Inosh Harsha Deshappriya<br>
         
            
        
            LinkedIn <a href="https://www.linkedin.com/in/inosh-harsha-872088193" target="_blank">Click to view My profile</a>
         </p>
      </div>

      <script>
         function reply(caller){

               document.getElementById('CommentId').value=$(caller).attr('data-commentid');
               $('.replyDiv').insertAfter($(caller));
               $('.replyDiv').show();

         }
         function reply_close(caller){
               
               $('.replyDiv').hide();

         }
      </script>
      <script>
         document.addEventListener("DOMContentLoaded", function(event) { 
             var scrollpos = localStorage.getItem('scrollpos');
             if (scrollpos) window.scrollTo(0, scrollpos);
         });
 
         window.onbeforeunload = function(e) {
             localStorage.setItem('scrollpos', window.scrollY);
         };
     </script>



      <!-- jQery -->
      <script src="{{ asset("home/js/jquery-3.4.1.min.js") }}"></script>
      <!-- popper js -->
      <script src="{{ asset("home/js/popper.min.js") }}"></script>
      <!-- bootstrap js -->
      <script src="{{ asset("home/js/bootstrap.js") }}"></script>
      <!-- custom js -->
      <script src="{{ asset("home/js/bootstrap.js") }}"></script>
   </body>
</html>