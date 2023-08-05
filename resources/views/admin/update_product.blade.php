
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    @include('admin.css')

    <style>
        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .font_size{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .text_color{
            color:black;
            padding-bottom: 20px;
        }
        lable{
            display: inline-block;
            width: 200px;
        }
        .div_design{
            padding-bottom: 15px; 
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




                <div class="div_center">

                    <h1 class="font_size">Update product</h1>
                <form action="{{ url('/update_product_confirm',$product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf 
                <div class="div_design">

                    <lable>Product Title : </lable>
                    <input class="text_color"type="text" name="title" placeholder="write a title" required="" value="{{$product->title}}">
                </div>
                <div class="div_design">

                    <lable>Product Description : </lable>
                    <input class="text_color"type="text" name="Description" placeholder="write Description" required="" value="{{$product->description}}">
                </div>
              
                <div class="div_design">

                    <lable>Product Price : </lable>
                    <input class="text_color"type="number" name="Price" placeholder="Price" required="" value="{{$product->price}}">
                </div>
                <div class="div_design">

                    <lable>Discount price : </lable>
                    <input class="text_color"type="number" name="dis_price" placeholder="Discount price" value="{{$product->discount_price}}">
                </div>
                <div class="div_design">

                    <lable>Product Quantitity : </lable>
                    <input class="text_color" type="number" min ="0" name="Quantitity" placeholder="Product Quantitity" required="" value="{{$product->quantity}}">
                </div>
                <div class="div_design">

                    <lable>Product Category : </lable>
                    <select name="catagory" id="" class="text_color" required="">
                        <option value="{{$product->catagory}}" selected="">{{$product->catagory}}</option>
                        @foreach ($catagory as $catagory)
                            <option value="{{ $catagory->catagory_name }}">{{ $catagory->catagory_name }}</option>
                        @endforeach
                     
                    </select>
                </div>


                <div class="div_design">

                    <lable>Current Product Image : </lable>

                    <img style="margin:auto" height="100" width="100" src="/product/{{$product->image}}" alt="">
                    
                </div>




                <div class="div_design">

                    <lable>Change Product Image : </lable>

                    <input type="file" name="image" >
                    
                </div>
                <div class="div_design">

                    <input type="submit" value="Update Product" class="btn btn-primary">
                    
                </div>
                </form>
            </div>  

            </div>
        </div>
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>