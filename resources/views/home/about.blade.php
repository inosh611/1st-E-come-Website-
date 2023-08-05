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
      <title>Famms - Fashion HTML Template</title>
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



        
    
      <!-- inner page section -->
      <section class="inner_page_head">
        <div class="container_fuild">
           <div class="row">
              <div class="col-md-12">
                 <div class="full">
                    <h3>About us</h3>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- end inner page section -->
      <!-- why section -->
      @include('home.why')
      <!-- end why section -->
      
      <!-- arrival section -->
      @include('home.arival')
      <!-- end arrival section -->
      
      

      

      

      
      <!-- client section -->
      @include('home.client')
      <!-- end client section -->
      <!-- footer start -->
      
      <!-- footer section -->
      <footer class="footer_section">
        <div class="container">
           <div class="row">
              <div class="col-md-4 footer-col">
                 <div class="footer_contact">
                    <h4>
                       Reach at..
                    </h4>
                    <div class="contact_link_box">
                       <a href="">
                       <i class="fa fa-map-marker" aria-hidden="true"></i>
                       <span>
                      No 542, Ingaradaula,Narangoda
                       </span>
                       </a>
                       <a href="">
                       <i class="fa fa-phone" aria-hidden="true"></i>
                       <span>
                       Call 0766482616
                       </span>
                       </a>
                       <a href="">
                       <i class="fa fa-envelope" aria-hidden="true"></i>
                       <span>
                       inoshharsha51@gmail.com
                       </span>
                       </a>
                    </div>
                 </div>
              </div>
              <div class="col-md-4 footer-col">
                 <div class="footer_detail">
                    <a href="index.html" class="footer-logo">
                    Famms
                    </a>
                    <p>
                       Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
                    </p>
                    <div class="footer_social">
                       <a href="">
                       <i class="fa fa-facebook" aria-hidden="true"></i>
                       </a>
                       <a href="">
                       <i class="fa fa-twitter" aria-hidden="true"></i>
                       </a>
                       <a href="">
                       <i class="fa fa-linkedin" aria-hidden="true"></i>
                       </a>
                       <a href="">
                       <i class="fa fa-instagram" aria-hidden="true"></i>
                       </a>
                       <a href="">
                       <i class="fa fa-pinterest" aria-hidden="true"></i>
                       </a>
                    </div>
                 </div>
              </div>
              <div class="col-md-4 footer-col">
                 <div class="map_container">
                    <div class="map">
                       <div id="googleMap"></div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="footer-info">
              <div class="col-lg-7 mx-auto px-0">
                 <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By Inosh Harsha Deshappriya <br>
        
                    LinkedIn <a href="https://www.linkedin.com/in/inosh-harsha-872088193" target="_blank">Click to view My profile</a>
                 </p>
              </div>
           </div>
        </div>
     </footer>



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