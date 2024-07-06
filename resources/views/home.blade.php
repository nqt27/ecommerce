<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home-style.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <header>
        <div class="top-header">
            <a href="#"><span>Welcome to website</span></a>
            <span>|</span>
            <a href="#"><span>Subcribe</span></a>
        </div>
        <div class="main-header">
            <div class="navbar">
                <ul>
                    <li><a href="#home">About us</a></li>
                    <li><a href="#services">Product</a></li>
                    <li><a href="#about">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>

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
    </header>
    </div>
</body>
<footer>
    
    
        <div class="footer-left">
            <img src="{{ asset('image/logo.png') }}" alt="">
            <span></span>
            <div class="social">

            </div>
        </div>
        
        <div class="footer-center">
            <div><h3>CONTACT</h3></div>
            <div>
                 <strong>Địa Chỉ:</strong> 
                 <span>Số 29 đường số 3, KDC Vĩnh Lộc, P. Bình Hưng Hòa, Q. Bình Tân, Tp. HCM </span> 
            </div>
            <div>
                <strong>Hotline: </strong>
                <span></span>
            </div>
            <div>
                <strong>Email: </strong>
            </div>
            <div>
                <strong>Website: </strong>
            </div>
        </div>
        
        <div class="footer-right">
            <div>
                <h3>FANPAGE</h3>
            </div>
            <div>
                
            </div>
        </div>

 
</footer>
</html>