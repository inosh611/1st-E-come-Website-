
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    @include('admin.css')

    <style>
        label{
            display:inline-block;
            width: 200px;
            font-size: 15px;
            font-weight: bold;
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
                <h1 style="text-align: center;font-size:25px">Send Email to {{ $order->email }}</h1>
                
            <form action="{{ url('send_user_email',$order->id) }}" method="POST">

                @csrf
                <div style="padding-left:35%;padding-top:30px">
                    <label>Email Greeting</label>
                    <input type="text" name="greeting" style="color:black;">
                </div>

                <div style="padding-left:35%;padding-top:30px">
                    <label>Email FirstLine</label>
                    <input type="text" name="firstline" style="color:black;">
                </div>
                <div style="padding-left:35%;padding-top:30px">
                    <label>Email Body</label>
                    <input type="text" name="body"style="color:black;">
                </div>

                <div style="padding-left:35%;padding-top:30px">
                    <label>Email Button Name</label>
                    <input type="text" name="button" style="color:black;">
                </div>

                <div style="padding-left:35%;padding-top:30px">
                    <label>Email url</label>
                    <input type="text" name="url" style="color:black;">
                </div>

                <div style="padding-left:35%;padding-top:30px">
                    <label>Email Last Line</label>
                    <input type="text" name="lastline" style="color:black;">
                </div>
                <div style="padding-left:35%;padding-top:30px">
                    
                    <input type="submit" value="Send Email " class="btn btn-primary">
                </div>


            </form>
                
            </div>
        </div>
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>