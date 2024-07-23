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
    <link rel="stylesheet" href="{{ asset('css/page-Admin.css') }}">

    <link rel="stylesheet" href="{{ asset('css/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/page-Admin.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-footer-fixed">

    <!-- Main Sidebar Container -->
    @include('admin.layout')


    <table class="table">
        <div class="p-3" id="head-content">
            <h2>PRODUCTS</h2>
            <a href="{{route('admin.addProduct')}}" class="btn btn-primary">
                <i class="bi bi-plus-circle-fill"></i> Create Product
            </a>
        </div>
        <thead>
            <tr>
                <th>ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Manage</th>

            </tr>
        </thead>
        <tbody>
            @foreach($products as $p)
            <tr>
                <td scope="row">{{$p->id}}</td>
                <td>{{$p->name}}</td>
                <td>{!! $p->description !!}</td>
                <td><img src="{{ asset($p->image) }}" alt=""></td>
                <td>{{$p->price}}</td>
                <td>{{$p->category_id}}</td>

                <td>
                    <a href="#" class="btn btn-warning btn-sm mt-3">
                        <i class="bi bi-pencil-square"></i> Edit
                    </a>
                    <form action="{{ route('products.destroy', $p->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm mt-3" type="submit"><i class="bi bi-trash"></i>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>





    @include('admin.layout-footer')
</body>

</html>