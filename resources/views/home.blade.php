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
   

    <div class="container">
        <section class="main-body">
            <div class="banner">
                <img src="{{ asset('image/banner1.png') }}" alt="">
            </div>
            <div class="category">
                <a href="#">
                    <div class="cate-item">
                        <i class="bi bi-backpack"></i>
                        <p>Backpacks</p>
                    </div>
                </a>
                <a href="#">
                    <div class="cate-item">
                    <i class="bi bi-wallet2"></i>
                        <p>Wallets</p>
                    </div>
                </a>
                <a href="#">
                    <div class="cate-item">
                    <i class="bi bi-handbag"></i>
                        <p>Tote & Accessory</p>
                    </div>
                </a>
                <a href="#">
                    <div class="cate-item">
                    <i class="bi bi-briefcase"></i>
                        <p>Cross bags</p>
                    </div>
                </a>
            </div>
        </section>
    </div>
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
                <a href="#">
                    <div class="social-item">
                        <i class="bi bi-facebook"></i>
                    </div>
                </a>
              
                <a href="#">
                    <div class="social-item">
                        <i class="bi bi-twitter"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="social-item">
                        <i class="bi bi-youtube"></i>
                    </div>
                </a> <a href="#">
                    <div class="social-item">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                </a>
            </div>
        </div>
        
        <div class="footer-center">
            <div><h3>CONTACT</h3></div>
            <div>
                 <b style="white-space: nowrap;"><i class="bi bi-house"></i> Địa Chỉ:</b> 
                 <span>Số 29 đường số 3, KDC Vĩnh Lộc, P. Bình Hưng Hòa, Q. Bình Tân, Tp. HCM </span> 
            </div>
            <div>
                
                <b><i class="bi bi-telephone-inbound"></i>  Hotline: </b>
                <span>0919 797 626 - 0898 800 088</span>
            </div>
            <div>
                <b><i class="bi bi-envelope-at"></i> Email: </b>
                <span>demerite@gmail.com</span>
            </div>
            <div>
                <b><i class="bi bi-globe"></i> Website: </b>
                <span>demerite.com.vn</span>
            </div>
        </div>
        
        <div class="footer-right">
            <div>
                <h3>FANPAGE</h3>
            </div>
            <div class="fanpage_img">
                <img src="{{ asset('image/img_fanpage.png') }}" alt="">
            </div>
        </div>

    </div>
       
 
</footer>
</body>

</html>