<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product-content.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>

<body>
    @include('home-page.layout_header')

    <div class="container">


        <nav aria-label="breadcrumb" id="background-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product</li>
            </ol>
        </nav>
        <div class="content">

            <div class="content-left">
                <div class="content-left__title-cate">
                    <span>Categories</span>
                </div>
                <div class="content-left__item-cate">
                    <ul class="cow">
                        @foreach($categories as $cate)
                        <li class="cate-item">
                            <a href="#" class="cate-item_link">{{$cate->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="content-right">
                <div class="sort-item">
                    <div class="sort-item_title">
                        <b>Sắp xếp: </b>
                    </div>
                    <div class="options-sort">
                        <select class="form-select" aria-label="Default select example">
                            <option value="1">Từ A-Z</option>
                            <option value="2">Từ Z-A</option>
                            <option value="3">Từ thấp tới cao</option>
                            <option value="4">Từ cao tới thấp</option>
                        </select>
                    </div>
                </div>

                <div class="product-list">
                    @foreach($products as $p)
                    <div class="item">
                        <a href="{{ route('products.show', $p->id) }}">
                            <img src="{{ asset($p->image) }}" class="item-img" alt="{{ $p->name }}">
                        </a>
                        <span class="item-name">{{$p->name}}</span>
                        <span class="item-price">{{$p->price}}</span>
                    </div>
                    @endforeach
                </div>

                <div class="next-page">
                    <nav aria-label="Page navigation example" class="box">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>

    @include('home-page.layout_footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12M5RP62+7pW2y6F8lbmFAcCpmOoEahJ6U8gtP6PsfUcL0gM" crossorigin="anonymous">
    </script>
</body>

</html>