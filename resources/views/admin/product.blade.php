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
    <link rel="stylesheet" href="{{ asset('css/page-Admin.css') }}">

    <link rel="stylesheet" href="{{ asset('css/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/page-Admin.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-footer-fixed">

    <!-- Main Sidebar Container -->
    @include('admin.layout')


    <table class="table">
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
                <td class="view-mode">{{$p->name}}</td>
                <td class="view-mode">{!! $p->description !!}</td>
                <td class="view-mode"><img src="{{ asset($p->image) }}" alt=""></td>
                <td class="view-mode">{{$p->price}}</td>
                <td class="view-mode">{{$p->category_id}}</td>
                <td class="view-mode">
                    <a href="#" class="btn btn-warning btn-sm mt-3 edit-btn">
                        <i class="bi bi-pencil-square"></i> Edit
                    </a>
                    <form action="{{ route('products.destroy', $p->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm mt-3" type="submit"><i class="bi bi-trash"></i>
                            Delete</button>
                    </form>
                </td>
            </tr>
            <tr class="edit-row" style="display:none;">
                <form action="{{ route('products.update', $p->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <td scope="row">{{$p->id}}</td>
                    <td><input name="name" type="text" class="form-control" value="{{$p->name}}"></td>
                    <td><input  name="description" type="text" class="form-control" value="{!! $p->description !!}"></td>
                    <td><input name="image"  type="file" class="form-control" value="{{$p->image}}"></td>
                    <td><input name="price" type="number" class="form-control" value="{{$p->price}}"></td>
                    <td><input name="category_id" type="text" class="form-control" value="{{$p->category_id}}"></td>
                    <td>
                        <button class="btn btn-success btn-sm mt-3 save-btn" type="submit"><i class="bi bi-save"></i> Save</button>
                        <a class="btn btn-secondary btn-sm mt-3 cancel-btn"><i class="bi bi-x"></i> Cancel</a>
                    </td>

                </form>

            </tr>
            @endforeach

        </tbody>
    </table>



    @include('admin.layout-footer')
    <script src="{{asset('js/inlineEdit.js')}}"></script>

</body>

</html>