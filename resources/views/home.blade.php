<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>

<body>
    @include('home-page.layout_header')
    <div class="container">
        <section class="main-body">
            <div class="banner">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>


                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://demerite.com.vn/thumbs/1366x650x1/upload/photo/basic-backpack-v3-01-12540.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://demerite.com.vn/thumbs/1366x650x1/upload/photo/basic-backpack-v2-01-61180.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://demerite.com.vn/thumbs/1366x650x1/upload/photo/combo-nomadcombo-30110.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://demerite.com.vn/thumbs/1366x650x1/upload/photo/crossbody-v2basic-cb-v2-32641.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://demerite.com.vn/thumbs/1366x650x1/upload/photo/crossbody-v1basic-bp-v3-38440.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://demerite.com.vn/thumbs/1366x650x1/upload/photo/basic-backpack-v1-7798.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="category">
                @foreach ($categories as $cate)
                <a href="#">
                    <div class="cate-item">
                        <img src="{{ asset($cate->image) }}" alt="" id="cate_img">
                        <p>{{$cate->name}}</p>
                    </div>
                </a>
                @endforeach
            </div>
            @foreach ($categories as $cate)
            <div class="product">
                <div class="product-title">
                    <p>{{$cate->name}}</p>
                    <div class="line">
                        <div></div>
                    </div>
                    <a href="#">MORE<span>>></span></a>
                </div>
                <div class="product-content">
                    @php
                    $count = 0;
                    @endphp
                    @foreach ($products as $p)
                    @if ($p->category_id == $cate->id)
                    @if ($count < 4) <a href="#">
                        <div class="product-item">
                            <div class="image_product">
                                <img src="{{ asset($p->image) }}" alt="">
                            </div>
                            <div class="cost-name">
                                <span>{{$p->name}}</span>
                                <span>{{$p->price}} VND</span>
                            </div>
                        </div>
                        </a>
                        @php
                        $count++;
                        @endphp
                        @else
                        @break
                        @endif
                        @endif
                        @endforeach
                </div>
            </div>
            @endforeach
        </section>
    </div>
    @include('home-page.layout_footer')
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script src="{{asset('js/home.js')}}"></script>

</html>