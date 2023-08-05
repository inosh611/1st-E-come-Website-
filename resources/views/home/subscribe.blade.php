<section class="subscribe_section">
    <div class="container-fuild">
       <div class="box">
          <div class="row">
             <div class="col-md-6 offset-md-3">
                <div class="subscribe_form ">
                   <div class="heading_container heading_center">
                      <h3>Add Your Comment Here !</h3>
                   </div>
                   <form action="{{ url('add_comment') }}" method="POST">
                     @csrf
                     <textarea class="form-control"   name="comment" id="" cols="30" rows="10" placeholder="Comment Somthing here" required></textarea>
                     <br>
                    
                     <button type="submit" class="form button">Comment</button>
      
      
                  </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>