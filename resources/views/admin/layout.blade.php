<style>
html {
    height: 100%;
    margin: 0;
}

body {
    display: flex;
    flex-direction: column;
}

footer {
    background: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
}
</style>

<div class="sidebar pe-4 pb-3">
    @include('admin.layout-menu')
</div>
<!-- Sidebar End -->
<!-- Content Start -->
<div class="content">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="#" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="bi bi-list" id="header-toggle" style="color: black;"></i></h2>
        </a>
        @include('admin.layout-menu')





        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-envelope me-lg-2"></i>
                    <span class="d-none d-lg-inline-flex">Message</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <div class="ms-2">
                                <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                <small>15 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <div class="ms-2">
                                <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                <small>15 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="https://avatars.githubusercontent.com/u/127457628?v=4"
                                alt="" style="width: 40px; height: 40px;">
                            <div class="ms-2">
                                <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                <small>15 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item text-center">See all message</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-bell me-lg-2"></i>
                    <span class="d-none d-lg-inline-flex">Notificatin</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item">
                        <h6 class="fw-normal mb-0">Profile updated</h6>
                        <small>15 minutes ago</small>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <h6 class="fw-normal mb-0">New user added</h6>
                        <small>15 minutes ago</small>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <h6 class="fw-normal mb-0">Password changed</h6>
                        <small>15 minutes ago</small>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item text-center">See all notifications</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                @auth
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <!-- <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;"> -->
                    <span class="d-none d-lg-inline-flex">Welcome, {{ Auth::user()->name }}!</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item">My Profile</a>
                    <a href="#" class="dropdown-item">Settings</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item logout">
                        Logout
                    </a>
                </div>
                @endauth
            </div>
        </div>
    </nav>