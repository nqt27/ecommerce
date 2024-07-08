@extends('admin.adminPage-layout')

@section('content')
    <form method="post">
        <div class="row pb-2">
            <h2 class="text-primary">Create Category</h2>
            <hr>
        </div>
        <div class="mb-3 row p-1">
            <label class="p-0">Name</label>
            <input class="form-control" name="name"/>
        </div>
        <div class="mb-3 row p-1">
            <label class="p-0">Description</label>
            <input class="form-control" name="description"/>
        </div>
        <div class="mb-3 row p-1">
            <label class="p-0">Image</label>
            <input class="form-control" name="image"/>
        </div>
        <div class="mb-3 row p-1">
            <label class="p-0">Price</label>
            <input class="form-control" name="price"/>
        </div>
        <div class="mb-3 row p-1">
            <label class="p-0">Category ID</label>
            <select name="category_id" class="form-control">
                <!-- Add options here -->
            </select>
        </div>
    
        <div class="row">
            <div class="col-6">
                <button type="submit" class="btn btn-primary form-control">Create</button>
            </div>
            <div class="col-6">
                <a href="#" class="btn btn-secondary form-control">Back to list</a>
            </div>
        </div>
    </form>
@endsection
