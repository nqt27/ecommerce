<header>
    <div class="top-header">
        <marquee behavior="" direction=""><a href="#"><span>Welcome to website</span></a></marquee>
        <span>|</span>
        <a href="#"><span>Subcribe</span></a>
        @auth
        <p class="name-user">Welcome, {{ Auth::user()->name }}!</p>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        <i class="bi bi-person-circle" style="color:white;transform: translateX(400px);"></i>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout">
            Logout
        </a>
        @endauth

        <!-- Kiểm tra người dùng chưa đăng nhập -->
        @guest
        <p class="auth">
            <a href="{{ route('login') }}" class="login">Login</a> | <a href="{{ route('register') }}"
                class="signup">Signup</a>
        </p>
        @endguest
    </div>
    <div class="container">
        <div class="main-header">
            <div class="navbar">
                <ul>
                    <li><a href="#home">ABOUT US</a></li>
                    <li><a href="{{asset('/home-product')}}">PRODUCT</a></li>
                    <li><a href="#about">BLOG</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
            <div class="logo">
                <a href="{{asset('/')}}">
                    <img src="https://demerite.com.vn/thumbs/222x42x2/upload/photo/logo-footer-2891.png" alt="">
                </a>
            </div>
            <div class="right-header">
                <div class="search">
                    <div class="input-group input-group-sm mb-10">
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-sm">
                            <i class="bi bi-search input-group-text" style="font-size: 20px;"></i>
                    </div>
                </div>
                <div class="cart">
                    <a class="nav-link" data-toggle="dropdown" href="{{route('cart.index')}}">
                        <i class="bi bi-bag-fill" style="font-size: 30px;"></i>
                        <span class="badge badge-danger navbar-badge" style="font-size:10px; 
                                height: 15px; 
                                margin-left: -5px; 
                                margin-top:3px;">
                            3</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</header>