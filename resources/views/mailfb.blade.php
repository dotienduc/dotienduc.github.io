<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <h1 class="text-center">Your order : {{ $bill }}</h1>
    <br>
    <br>
    <br>
    <h3>Thông tin khách hàng : </h3>
    <br>
    <p>Customer Name: {{$name}}</p>
    <p>Gender: {{$gender}}</p>
    <p>Address: {{$address}}</p>
    <p>Email: {{$email}}</p>
    <p>Phone Number: {{$phone}}</p>
    <p>Note: {{$note}}</p>
    <br>
    <br>
    <p>Your bill detail</p>
     <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Product</th>
        <th scope="col">Bill Number</th>
        <th scope="col">Quantity</th>
        <th scope="col">Unit Price</th>
        <th scope="col">Promotion Price</th>
        <th scope="col">Total Product</th>
        </tr>
    </thead>
    <tbody>
        @foreach($billDetail as $key => $item)
        <tr>
            <th scope="row">{{ $item['id'] }}</th>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['id_bill'] }}</td>
            <td>{{ $item['quantity'] }}</td>
            @if($item['promotion_price'] == 0)
            <td>{{ number_format($item['unit_price']) }} VND</td>
            <td>0 VND</td>
            @else
            <td>{{ number_format($item['unit_price']) }} VND</td>
            <td>{{ number_format($item['promotion_price']) }} VND</td>
            @endif
            @if($item['promotion_price'] == 0)
            <td>{{ number_format($item['unit_price']*$item['quantity']) }} VND</td>
            @else
            <td>{{ number_format($item['promotion_price']*$item['quantity']) }} VND</td>
            @endif
        </tr>
        @endforeach
        <tr>
            <th colspan="5">Total Bill : </th>
            <th colspan="2">{{ number_format($totalPrice) }} VND</th>
        </tr>
    </tbody>
    </table>
</body>
</html>
