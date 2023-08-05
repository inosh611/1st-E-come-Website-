
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/table2.css') }}">
   
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />

    <style>
    .title_deg{
        text-align:center;
        font-size: 25px;
        font-weight: bold;
        padding-bottom:50px;


    }
    .table_deg{
        border: 2px solid white;
        width: 100%;
        margin: auto;
        
        text-align: center;


    }
    .th_deg{
        background: skyblue;
    }
    .img_size{
        width: 100px;
        height: 100px;
    }
        
    </style>
  </head>
  <body>
    
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.slidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <h1 class="title_deg">All order</h1>

                <div style="">
                    <form action="{{ url('search') }}" method="get">
                        @csrf
                        <input style="color:black;" type="text" name="search" placeholder="Serach for Something" class="form-control">
                        <input  type="submit" name="" Value ="Search" class= "btn btn-primary"  style="margin-bottom:50px;margin-top:20px">
                    </form>
                </div>


                <table class="table_deg">
                    <tr class="th_deg">
                        <th style="padding:10px">Name</th>
                        <th style="padding:10px">Email</th>
                        <th style="padding:10px">Address</th>
                        <th style="padding:10px">Phone</th>
                        <th style="padding:10px">Product_title</th>
                        <th style="padding:10px">Quantity</th>
                        <th style="padding:10px">Price</th>
                        <th style="padding:10px">Payment status</th>
                        <th style="padding:10px">Delevery status</th>
                        <th style="padding:10px">Image</th>
                        <th style="padding:10px">Delevered</th>
                        <th style="padding:10px">Print PDF</th>
                        <th style="padding:10px">Send Email</th>
                        
                    </tr>
                    @forelse ($order as $order )
                    <tr>
                        
                        <td>{{ $order-> name}}</td>
                        <td>{{ $order-> email}}</td>
                        <td>{{ $order-> address}}</td>
                        <td>{{ $order-> phone}}</td>
                        <td>{{ $order-> product_title}}</td>
                        <td>{{ $order-> quantity}}</td>
                        <td>{{ $order-> price}}</td>
                        <td>{{ $order-> payment_status}}</td>
                        <td>{{ $order-> delevery_status}}</td>

                        <td>
                            <img src="/product/{{ $order->image }}" alt="" class="img_size">
                        </td>
                       <td>
                        @if($order->delevery_status=='processing')
                            <a href="{{ url('delivered',$order->id) }}" onclick="return confirm('Are you suer this product Delivered')" class="btn btn-primary">Delivered</a>
                        @else
                            <P style="color:green">Delivered</P>
                        
                        @endif
                       </td>
                       <td>
                            <a href="{{ url('print_pdf',$order->id) }}" class="btn btn-secondary">Print PDF</a>
                       </td>
                       <td>
                        <a href="{{ url('send_email',$order->id) }}" class="btn btn-info">Send Email</a>
                      </td>
                    </tr>


                    @empty

                        <tr>
                            <td colspan="16">No Data Found<</td>
                        </tr>
                     
                    @endforelse
                   
                </table>
            </div>
        </div>
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>