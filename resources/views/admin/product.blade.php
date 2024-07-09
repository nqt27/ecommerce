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
        <!-- Main Sidebar Container -->
        @include('admin.layout')


        <!-- Content Wrapper -->
        <div class="content-wrapper">
           
            <section class="content-header">
                <div class="row pt-4">
                    <div class="col-6">
                        <h2 class="text-primary">Product List</h2>
                    </div>
                    <div class="col-6 text-end">
                        <a class="btn btn-primary" href= "#"> <!-- Add the correct URL to href -->
                            <i class="bi bi-plus-circle"></i> Add
                        </a>
                    </div>
                </div>
            </section>

            <!-- Main content -->
            <section class="content">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $p)
                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->name}}</td>
                            <td>{!! $p->description !!}</td>
                                <td><img src="{{ asset($p->image) }}" alt=""></td>
                            <td>{{$p->price}}</td>
                            <td>{{$p->category_id}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>


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