
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
       
        .font_size{

            text-align: center;
            font-size: 40px;
            padding-top:20px;
            margin-bo: 50px;

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

                @if(session()->has('message'))

                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{ session()->get('message') }}
                </div>

                @endif 





                <h2 class="font_size">All Product </h2>
                <table class="table">
                    <tr id="tr1">
                        <th scope="col">Product Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Catagory</th>
                        <th scope="col">Price</th>
                        <th scope="col">Discount Price</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Edit</th>
                    </tr>
               
                @foreach ($product as $product )
                    
                
                <tr>
                    <td>{{ $product-> title}}</td>
                    <td>{{ $product-> description}}</td>
                    <td>{{ $product-> quantity}}</td>
                    <td>{{ $product-> catagory}}</td>
                    <td>{{ $product-> price}}</td>
                    <td>{{ $product-> discount_price}}</td>
                    <td>
                        <img class="img_size" src="/product/{{ $product->image }}" alt="">
                    </td>
                    <td ><a href="{{ url('delete_product',$product->id) }} " class="btn btn-danger" onclick="return confirm('Are you Suer to Delete this')">Delete</td>
                    <td><a href="{{ url('update_product',$product->id) }}" class="btn btn-success">Edit</td>
                </tr>
                @endforeach
            </table>

            </div>
        </div>
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>