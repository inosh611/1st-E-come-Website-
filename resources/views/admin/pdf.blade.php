<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order PDF</title>
</head>
<body>
    <h1>Order Details</h1>
   Coustomer Name : <h3>{{ $order->name }}</h3>
   Coustomer email : <h3>{{ $order->email}}</h3>
   Coustomer phone : <h3>{{ $order->phone }}</h3>
   Coustomer address :  <h3>{{ $order->address }}</h3>
   Coustomer ID : <h3>{{ $order->user_id }}</h3>


   product Name : <h3>{{ $order->product_title }}</h3>
   product  price: <h3>{{ $order->price }}</h3>
   product Quantity : <h3>{{ $order->quantity }}</h3>
   product Status : <h3>{{ $order->payment_status }}</h3>
   product Id : <h3>{{ $order->product_id }}</h3>

   <img height="250px
   " src="product/{{ $order->image }}" alt="">

</body>
</html>