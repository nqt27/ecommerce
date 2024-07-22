<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">

    <link rel="stylesheet" href="{{ asset('css/home-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product-content.css') }}">
    <title>Document</title>
</head>

<body>
    @include('home-page.layout_header')
    <div class="container">
        <div class="content-left">
            <div class="content-left__title-cate">
                <span>DANH MUC LOAI SAN PHAM</span>
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
            <div class="product-item">
                @foreach($products as $p)
                <div class="item">
                    <a href="#">
                        <img src="{{ asset($p->image) }}" class="item-img">
                    </a>
                    <span class="item-name">
                        {{$p->name}}
                    </span>
                    <span class="item-price">
                        {{$p->price}}
                    </span>
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

    @include('home-page.layout_footer')

</body>

</html>