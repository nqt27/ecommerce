<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>

    <!-- Fonts and Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="~/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('css/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style-admin.css')}}" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/page-Admin.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-footer-fixed">
    @include('admin.layout')
    <!-- Content Wrapper -->

    <form method="post" action="{{ route('products.store') }}" class="form-wrapper" enctype="multipart/form-data"
        style=" width : 50% !important; ">
        @csrf
        <!-- Thêm CSRF token vào form -->
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
            <div class="col-6 mt-3">
                <button type="submit" class="btn btn-primary" style="width: 200px">
                    <i class="bi bi-plus-circle-fill"></i> Create New Product
                </button>
            </div>
            <div class="col-6 mt-3">
                <a href="{{ route('admin.product') }}" class="btn btn-secondary text-white">
                    <i class="bi bi-arrow-return-left"></i> Back to List Products
                </a>
            </div>
        </div>
    </form>
    </div>

    @include('admin.layout-footer')

    </div>
</body>

</html>