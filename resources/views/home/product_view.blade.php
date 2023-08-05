<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>All Products</h2>
          <div>
            <form action="{{ url('search_product') }}" method="GET">
               @csrf
               <input type="text" name="search" placeholder="Search for Something" class="form-control" id="usr">
               <input  type="submit" name="" Value ="Search" class= "btn btn-secondary" >
            </form>
          </div>
       </div>
       @if(session()->has('message'))
               

                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{ session()->get('message') }}
                </div>

                @endif
       <div class="row">
         @foreach ($product as $products )
            
          <div class="col-sm-6 col-md-4 col-lg-4">
             <div class="box">
                <div class="option_container">
                   <div class="options">
                      <a href="{{ url('product_details',$products->id) }}" class="option1">
                      Product Detail
                      </a>
                      <form action="{{ url('add_cart',$products->id )}}" method="Post">
                        @csrf
                        <div class="row">
                           <div  class="col-md-4">
                              <input type="number" name="quantity" value="1" min="1"  class="form-control" id="input1">
                           </div>
                           
                           <div class="col-md-4">
                              <button type="submit" value="Add to cart" id="button1" class="form-control" id="button1">Add to cart</button>
                           </div>
                        </div>

                        
                      </form>
                   </div>
                </div>
                <div class="img-box">
                   <img src="product/{{$products->image}}" alt="">
                </div>
                <div class="detail-box">
                   <h5>
                     {{ $products->title }}
                   </h5>
                   @if($products->discount_price!=null)
                        <h6 style="color:red">
                           Discount Price
                           <br>
                           ${{ $products->discount_price }}
                        </h6>
                        <h6 style="text-decoration:line-through; color:blue">
                            Price
                           <br>
                           ${{ $products->price }}
                        </h6>
                   @else
                   <h6 style="color:blue">
                      Price
                     <br>
                     ${{ $products->product_price }}
                   </h6>
                   @endif
                   
                </div>
             </div>
          </div>
          @endforeach
          <span style="padding-top: 20px">
            {!! $product->withQueryString()->links('pagination::bootstrap-5')!!}

          </span>
          
    </div>
 </section>