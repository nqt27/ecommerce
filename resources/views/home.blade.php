<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="top-header">
            <a href="#"><span>Welcome to website</span></a>
            <a href="#"><span>Subcribe</span></a>
        </div>
        <div class="main-header">
        <div class="navbar">
            <ul>
                <li><a href="#" class="logo">MyApp</a></li>
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="logo">
            <img src="{{ asset('image/logo.png') }}" alt="">
        </div>
        </div>
    </header>
</body>
</html>