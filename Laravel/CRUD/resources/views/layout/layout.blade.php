<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>It's a header</h1>
    </header>


    <div class="container">
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    
        <div class="msg">
            @section('body')
            @show
        </div>
        <p> This is Normal</p>
    </div>


    <footer>
        <h1>It's a footer</h1>
    </footer>
    
</body>
</html>