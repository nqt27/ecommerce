<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home-style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
                    <li><a href="#home">About us</a></li>
                    <li><a href="#services">Product</a></li>
                    <li><a href="#about">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>

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
<footer >
    
    <div class="container">
         <div class="footer-left">
            <div>
                <img src="{{ asset('image/logo.png') }}" alt="">

            </div>
                <div>
                    <span>Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và và cản trở việc tập trung vào yếu tố trình bày văn bản</span>
                </div>
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
                
                <strong><i class="bi bi-telephone-inbound"></i>  Hotline: </strong>
                <span></span>
            </div>
            <div>
                <strong><i class="bi bi-envelope-at"></i> Email: </strong>
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

    </div>
       
 
</footer>
</html>