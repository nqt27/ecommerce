@extends('admin.adminPage-layout')

@section('content')
    <section class="content-header">
        <div class="row pt-4">
            <div class="col-6">
                <h2 class="text-primary">Category List</h2>
            </div>
            <div class="col-6 text-end">
                <a class="btn btn-primary" href="#"> <!-- Add the correct URL to href -->
                    <i class="bi bi-plus-circle"></i> Create Category
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
                    <th>Category ID</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dynamic content will be inserted here -->
            </tbody>
        </table>
    </section>
@endsection
