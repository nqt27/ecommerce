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

    <form method="post" action="{{ route('categories.store') }}">
        @csrf
        <!-- CSRF token -->
        <div class="border p-3 m-4">
            <h4 class="text-primary">Create New Category</h4>
            <div class="row mt-3">
                <label for="category_name">Category Name</label>
                <input name="name" type="text" class="form-control" id="category_name" />
                @error('category_name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="row mt-3">
                <label for="image">Image</label>
                <input name="image" type="file" class="form-control" id="image" />
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="row mt-3" id = "box-group">
                <div class="col-6">
                    <button type="submit" class="btn btn-primary" >Create</button>
                </div>
                <div class="col-6">
                    <a href="{{ route('admin.cate') }}" class="btn btn-secondary" >
                        <i class="bi bi-arrow-return-left"></i> Back to List
                    </a>
                </div>
            </div>
        </div>
    </form>




    <!-- Footer -->
    @include('admin.layout-footer')
    <!-- /.footer -->




</body>

</html>