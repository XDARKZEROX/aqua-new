<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First Document</title>
</head>
<body>
    <h1>
    @foreach($products as $producto)
        <li> {{$producto->price}}</li>
    @endforeach
    </h1>
</body>
</html>