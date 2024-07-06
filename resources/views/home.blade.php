<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home-style.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="top-header">
            <a href="#"><span>Welcome to website</span></a>
            <span>|</span>
            <a href="#"><span>Subcribe</span></a>
        </div>
        <div class="container">
        <div class="main-header">
            <div class="navbar">
                <ul>
                    <li><a href="#home">ABOUT US</a></li>
                    <li><a href="#services">PRODUCT</a></li>
                    <li><a href="#about">BLOG</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
            <div class="logo">
                <img src="{{ asset('image/logo.png') }}" alt="">
            </div>
            <div class="right-header">
                <div class="search">
                    <img src="{{ asset('image/research.png') }}" alt="">
                    <span>SEARCH</span>
                </div>
                <div class="cart">
                    <img src="{{ asset('image/shopping-bag.png') }}" alt="">
                </div>
            </div>
        </div>
        
        </div>
    </header>
</body>
</html>