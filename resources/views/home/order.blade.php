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
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

      <style>
        

      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         
         <div style="margin-top: 100px">
            <table class="table">
                <tr>
                    <th scope="col">Product Title</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Payment Status</th>
                    <th scope="col">Delivery Status</th>
                    <th scope="col">Image</th>
                    <th scope="col">Cancel Order</th>
                    
                </tr>
                @foreach ( $order as $order )
                <tr>
                    <td>{{ $order->product_title }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->price }}</td>
                    <td>{{ $order->payment_status }}</td>
                    <td>{{ $order->delevery_status }}</td>
                    <td>
                        <img height="100" width="100" src="product/{{ $order->image }}" alt="">
                    </td>
                    <td>
                        @if($order->delevery_status=='processing')
                        <a onclick="return confirm('Are You sure to cancel this order')" class="btn btn-danger" href="{{ url('cancel_order',$order->id) }}">Cansel Order</a>
                        @else
                        <p style="color:blue">Not Allowed</p>
                        @endif
                    </td>
                </tr>
                @endforeach
                


            </table>
         </div>
      </div>
      <!-- why section -->
     
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>