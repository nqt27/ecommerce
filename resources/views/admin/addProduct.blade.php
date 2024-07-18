<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>

    <!-- Fonts and Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/page-Admin.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-footer-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="bi bi-list"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
        </nav>


        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{route('admin')}}" class="brand-link">
                <span class="brand-text font-weight-light">Admin</span>
            </a>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('admin.cate')}}" class="nav-link">
                        <p>
                            Category
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.product')}}" class="nav-link">
                        <p>
                            Sản phẩm
                        </p>
                    </a>
                </li>
            </ul>
        </aside>


        <!-- Content Wrapper -->
        <div class="content-wrapper">

            <form method="post" action="{{ route('products.store') }}" class="form-wrapper" enctype="multipart/form-data">
                @csrf <!-- Thêm CSRF token vào form -->
                <div class="row pb-2 ">
                    <h2 class="text-primary">Create Product</h2>
                    <hr>
                </div>
                <div class="mb-3 row">
                    <label class="p-0">Name</label>
                    <input class="form-control" name="name" />
                </div>


                <div class="mb-3 row p-1">
                    <label class="p-0">Price</label>
                    <input class="form-control" name="price" />
                </div>
                <div class="mb-3 row p-1">
                    <label class="p-0">Category ID</label>
                    <select name="category_id" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>

                <div class="mb-3 row ">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                </div>

                <div class="mb-3 row p-1">
                    <label class="p-0">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>

                <div class="row">
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary form-control">Create</button>
                    </div>
                    <div class="col-6">
                        <a href="{{route('products.store')}}" class="btn btn-secondary form-control">Back to list</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.content-wrapper -->


        <!-- Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
            </div>
        </footer>
        <!-- /.footer -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
</body>

</html>