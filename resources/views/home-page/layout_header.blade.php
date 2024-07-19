<header>
    <div class="top-header">
        <marquee behavior="" direction=""><a href="#"><span>Welcome to website</span></a></marquee>
        <span>|</span>
        <a href="#"><span>Subcribe</span></a>
        @auth
        <p>Welcome, {{ Auth::user()->name }}!</p>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>
        @endauth

        <!-- Kiểm tra người dùng chưa đăng nhập -->
        @guest
        <p> <a href="{{ route('login') }}">login</a> | <a href="{{ route('register') }}">signup</a></p>
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