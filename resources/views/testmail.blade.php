<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS & JS -->
</head>
<body>
<h1 class="text-center">Your order : {{ $id_bill }}</h1>
<br>
    <br>
    <br>
    <h3>Thông tin khách hàng : </h3>
    <br>
    <p>Customer Name: {{$customerName}}</p>
    <p>Gender: {{$customerGender}}</p>
    <p>Address: {{$customerAddress}}</p>
    <p>Email: {{$customerEmail}}</p>
    <p>Phone Number: {{$customerPhone}}</p>
    <p>Note: {{$customerNote}}</p>
<br><br><br>
<h3>Your bill detail</h3>
     <table class="table" border="1">
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
        @foreach($query_billDetail as $key => $item)
        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->id_bill }}</td>
            <td>{{ $item->quantity }}</td>
            @if($item->promotion == 0)
            <td>{{ number_format($item->unit_price) }} VND</td>
            <td>0 VND</td>
            @else
            <td>{{ number_format($item->unit_price) }} VND</td>
            <td>{{ number_format($item->promotion) }} VND</td>
            @endif
            @if($item->promotion == 0)
            <td>{{ number_format($item->unit_price*$item->quantity) }} VND</td>
            @else
            <td>{{ number_format($item->promotion*$item->quantity) }} VND</td>
            @endif
        </tr>
        @endforeach
        <tr>
            <th colspan="5">Total Bill : </th>
            <th colspan="2">{{ number_format($item->total) }} VND</th>
        </tr>
    </tbody>
    </table>
    <br>
    <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Default</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
      </tr>      
      <tr class="success">
        <td>Success</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr class="danger">
        <td>Danger</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr class="info">
        <td>Info</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
      <tr class="warning">
        <td>Warning</td>
        <td>Refs</td>
        <td>bo@example.com</td>
      </tr>
      <tr class="active">
        <td>Active</td>
        <td>Activeson</td>
        <td>act@example.com</td>
      </tr>
    </tbody>
  </table>
</body>
</html>