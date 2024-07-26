<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/product-detail.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    @include('home-page.layout_header')
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" id="background-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" style="text-decoration: none; color : #222222;">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#"
                        style="text-decoration: none; color : #222222;">Category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product</li>
            </ol>
        </nav>
        <div class="content-top">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>


                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{$product->image}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dongphuc.aristino.com/wp-content/uploads/2024/05/IMG_8222-2048x2048.webp"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dongphuc.aristino.com/wp-content/uploads/2024/05/IMG_8222-2048x2048.webp"
                            class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="col-lg-5 col-md-12 col-12" id="product-info">

                <h3 class="py-4">{{$product->name}}</h3>
                <h2>{{$product->price}}</h2>
                <select name="size" class="my-3">
                    <option value="">Select Size</option>
                    <option value="">S</option>
                    <option value="">M</option>
                    <option value="">L</option>
                    <option value="">XL</option>
                </select>

                <input type="number" value="1">
                <button type="button" class="btn btn-success btn-lg">Thêm vào giỏ hàng</button>
                <h4 class="mt-5 mb-5">Mô tả sản phẩm</h4>
                <span>{{$product->description}}</span>


            </div>
        </div>
        <div class="content-bottom">
            <div class="tilte">
                <span>Sản phẩm tương tự</span>
            </div>

            <div class="product-item">
                @foreach($products as $p)
                <div class="item">
                    <a href="#">
                        <img src="{{$p->image}}" class="item-img">
                    </a>
                    <span class="item-name">
                        <a href="#">{{$p->name}}</a>
                    </span>
                    <span class="item-price">
                        {{$p->price}}
                    </span>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('home-page.layout_footer')

</body>

</html>