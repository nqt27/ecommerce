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

        <i id="icon-user" class="bi bi-person-circle" style="color:white;transform: translateX(400px);"></i>
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
                    <li><a href="{{asset('/home-product')}}">PRODUCT</a>
                        <ul>
                            <li>
                                <a class="transition" title="Faric Backpacks" href="faric-backpack">Faric Backpacks</a>
                            </li>
                            <li>
                                <a class="transition" title="Leather Backpacks" href="leather-backpack">Leather
                                    Backpacks</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#about">BLOG</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
            <div class="logo">
                <a href="{{asset('/')}}">
                    <img src="https://demerite.com.vn/thumbs/371x70x2/upload/photo/logo-de-meritepdf-9834.png" alt="">
                </a>
            </div>
            <div class="right-header">
                <div class="search1">
                    <div class="input">
                        <form id="searchForm" action="{{route('search')}}" method="get">

                            <input type="text" name="kw" placeholder="Search" id="mysearch">
                            <button class="icon" type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="cart">
                    <a data-toggle="dropdown" href="{{route('cart.view')}}">
                        <i class="bi bi-bag-fill" style="font-size: 30px;"></i>
                        <span class="badge badge-danger navbar-badge centered-badge" style="
                            font-size: 15px; 
                            height: 15px; 
                            width: 15px; 
                            display: flex; 
                            align-items: center; 
                            justify-content: center; 
                            margin-left: -7px; 
                            margin-top: 5px; 
                            border-radius: 50%; 
                            background-color: black;
                            margin-top: -43px;
                            margin-left: 26px;">
                            4
                        </span>

                    </a>
                </div>
            </div>
        </div>

    </div>
</header>