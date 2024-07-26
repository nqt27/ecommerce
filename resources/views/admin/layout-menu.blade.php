<nav class="navbar bg-light navbar-light">

    <div class="d-flex align-items-center ms-4 mb-4">
        <div class="position-relative">
            <img class="rounded-circle"
                src="https://scontent.fsgn5-2.fna.fbcdn.net/v/t1.30497-1/143086968_2856368904622192_1959732218791162458_n.png?_nc_cat=1&ccb=1-7&_nc_sid=136b72&_nc_eui2=AeHVNdmcFCrz9QE8hHY1CELTso2H55p0AlGyjYfnmnQCUTxXwqfQ2nEzHEdYm5EACymgn4wiXF-uAAnsra76pg9d&_nc_ohc=rWGVPdTzi14Q7kNvgEzj1bi&_nc_ht=scontent.fsgn5-2.fna&oh=00_AYAlmouZwOBBzkemruSPfGF0Iwzg-MwVikhDDdXyLyu8jg&oe=66C5FFF8"
                alt="Ảnh của admin" style="width: 40px; height: 40px;">
            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
            </div>
        </div>
        <div class="ms-4">
            <!-- <b class="mb-0">Thành Đạt</b> -->
            <span>Admin</span>
        </div>
    </div>
    <div class="navbar-nav w-100">
        <a href="{{route('admin')}}" class="nav-item nav-link active"><i
                class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                    class="fa fa-laptop me-2"></i>Elements</a>
            <div class="dropdown-menu bg-transparent border-0">
                <a href="{{route('admin.cate')}}" class="dropdown-item">
                    <i class="bi bi-card-list"></i> Categories
                </a>
                <a href="{{route('admin.product')}}" class="dropdown-item">
                    <i class="bi bi-cart4"></i> Products
                </a>
                <a href="#" class="dropdown-item">
                    <i class="bi bi-box"></i> Orders
                </a>
                <a href="#" class="dropdown-item">
                    <i class="bi bi-credit-card"></i> Payment Methods
                </a>
                <a href="#" class="dropdown-item">
                    <i class="bi bi-folder-check"></i> Order Details
                </a>
                <a asp-controller="User" asp-action="Index" class="dropdown-item">User</a>
            </div>
        </div>
        <a href="{{route('admin.addProduct')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Add
            Product</a>
        <a href="#" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
        <a href="#" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
        <a href="#" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                    class="far fa-file-alt me-2"></i>Pages</a>
            <div class="dropdown-menu bg-transparent border-0">
                <a href="{{route('register')}}" class="dropdown-item">Đăng ký</a>
                <a href="{{route('login')}}" class="dropdown-item">Đăng nhập</a>
                <a href="#" class="dropdown-item">404 Error</a>
                <a href="#" class="dropdown-item">Blank Page</a>
            </div>
        </div>
    </div>
</nav>