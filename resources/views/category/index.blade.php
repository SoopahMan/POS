<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Home Category</h1>
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/category') }}">Home category</a></li>
            <li><a href="{{ url('/category/food-beverage') }}">Food & Beverage</a></li>
            <li><a href="{{ url('/category/beauty-health') }}">Beauty & Health</a></li>
            <li><a href="{{ url('/category/home-care') }}">Home Care</a></li>
            <li><a href="{{ url('/category/baby-kid') }}">Baby & Kid</a></li>
        </ul>
    </nav>
</body>
</html>