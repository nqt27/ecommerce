<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home-style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>

<body>
@include('home-page.layout_header')



    <div class="container">
        <section class="main-body">
            <div class="banner">
                <img src="{{ asset('image/banner1.png') }}" alt="">
            </div>
            <div class="category">
                @foreach ($categories as $cate)
                <a href="#">
                    <div class="cate-item">
                        {!! $cate->image !!}
                        <p>{{$cate->name}}</p>
                    </div>
                </a>
                @endforeach
            </div>
            @foreach ($categories as $cate)
            <div class="product">
                <div class="product-title">
                    <p>{{$cate -> name}}</p>
                    <div class="line">
                        <div></div>
                    </div>
                    <a href="#">MORE <span>>></span></a>
                </div>
                <div class="product-content">
                    @foreach ($products as $p)
                    <a href="#">
                        @if($p->category_id == $cate->id)
                        <div class="product-item">
                            <div class="image_product">
                                <img src="{{ asset($p->image) }}" alt="">
                            </div>
                            <div class="cost-name">
                                <p>{{$p->name}}</p>
                                <p>{{$p->price}} VND</p>
                            </div>
                        </div>
                        @endif
                    </a>
                    @endforeach
                    0
                </div>
            </div>
            @endforeach
        </section>
    </div>
    @include('home-page.layout_footer')


</body>

</html>