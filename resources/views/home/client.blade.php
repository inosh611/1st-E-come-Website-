<section class="client_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Customer's Testimonial
          </h2>
       </div>
       <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
             
             
             @foreach ($comment as $comment)

                  @if($loop->index ==0)
                     <div class="carousel-item active">
                        <div class="box col-lg-10 mx-auto">
                           <div class="img_container">
                              <div class="img-box">
                                 <div class="img_box-inner">
                                    <img src="images/client.jpg" alt="">
                                 </div>
                              </div>
                           </div>
                           <div class="detail-box">
                              <h5>
                                 {{ ($comment->name) }}
                              </h5>
                              <h6>
                                 Customer
                              </h6>
                              <p>
                                 {{ ($comment->comment) }}
                              </p>
                           </div>
                        </div>
        
        
                     </div>
                  
               @else
             <div class="carousel-item">
               <div class="box col-lg-10 mx-auto">
                  <div class="img_container">
                     <div class="img-box">
                        <div class="img_box-inner">
                           <img src="images/client.jpg" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="detail-box">
                     <h5>
                        {{ ($comment->name)}}
                     </h5>
                     <h6>
                        Customer
                     </h6>
                     <p>
                        {{ ($comment->comment) }}
                     </p>
                  </div>
               </div>
            </div>
            @endif
             @endforeach
             





          </div>



          <div class="carousel_btn_box">
             <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
             <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
             <span class="sr-only">Previous</span>
             </a>
             <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
             <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
             <span class="sr-only">Next</span>
             </a>
          </div>


       </div>
    </div>
 </section>