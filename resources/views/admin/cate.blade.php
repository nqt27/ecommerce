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
    <!-- Main Sidebar Container -->
    @include('admin.layout')


    <!-- Content Wrapper -->
    <table class="table">
        <div class="p-3" id="head-content">
            <h4>CATEGORIES</h4>
            <a href="{{route('admin.addCate')}}" class="btn btn-primary">
                <i class="bi bi-plus-circle-fill"></i> Add Category
            </a>
        </div>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Role</th>
                <th>Manage</th>

            </tr>
        </thead>

        <tbody>
        <tbody>
            @foreach($categories as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->name}}</td>
                <td>{!! $c->image !!}</td>
                <td>{{$c->role}}</td>


                <td>
                    <a href="#" class="btn btn-warning btn-sm mt-3">
                        <i class="bi bi-pencil-square"></i> Edit
                    </a>

                    <a href="#" class="btn btn-danger btn-sm mt-3">
                        <i class="bi bi-trash"></i> Delete
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


    @include('admin.layout-footer')


</body>

</html>