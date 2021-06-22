<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upcoming Product</title>
</head>
<body>
    <a href="{{ route('admin.index') }}">back</a>
    <h2>Upcoming product list</h2>
    <table border="1">
        <tr>
            <th>product Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
       
            @foreach ($upcomingProduct as $product)
            <tr>
                <td>{{$product->productName}}</td>
                <td>{{$product->unitPrice}}</td>
                <td>{{$product->category}}</td>
                <td>
                    <a href="/product/upcomingProduct/edit/{{$product->product_id}}">EDIT</a> | 
                    <a href="/product/upcomingProduct/delete/{{$product->product_id}}">DELETE</a>
                </td>
             
            </tr>
            @endforeach
       
    </table>
</body>
</html>