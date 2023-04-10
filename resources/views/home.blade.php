<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>All Products</title>
</head>
<body>
    <h1>All Products</h1>


    @foreach($products as $product)
    <a href="product/{{ $product["id"] }}">
        <div class="product {{ $product["status"] }}">
            <h1>{{ $product["name"] }}</h1>
            <p>Status: {{ $product["status"] }}</p>
            <p>Price: {{ $product["price"] }}</p>
        </div>
    </a>
    @endforeach
</body>
</html>