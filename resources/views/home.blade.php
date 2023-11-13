<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page | Vodi - Responsive Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://demo2.madrasthemes.com/vodi-html/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&amp;family=Open+Sans:wght@300;400;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
    <link rel="stylesheet" href="/assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="/assets/vendor/cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="/assets/vendor/aos/dist/aos.css">
    <link rel="stylesheet" href="/assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="/assets/vendor/fancybox/dist/jquery.fancybox.css">
    <link rel="stylesheet" href="/assets/css/theme.css">
    <link rel="stylesheet" href="/assets/css/app.css">
</head>
<body>
    @include('includes.header')
    <main id="content">
        <section class="bg-gray-1100 dark" style="padding-top: 25px; padding-bottom: 25px; min-height:100vh;">
            <div class="container px-md-4">
                <div class="row mb-xl-5">
                    <div class="col-xl-auto d-flex">
                        <header class="max-w-370 mt-auto">
                            <h3 class="text-white pr-xl-12 font-weight-semi-bold">Danh sách phim lẻ</h3>
                        </header>
                    </div>
                </div>
                {{ $list_movies->links('includes.movie_paginate') }}
                @php
                    $list_movies_chunk = $list_movies->chunk(6)
                @endphp
                @if(count($list_movies_chunk) > 0)
                    @foreach ($list_movies_chunk as $movies)
                        <div class="row row-cols-xl" style="margin-top:25px;">
                            @foreach ( $movies as $m)
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="product">
                                    <div class="product-image mb-2">
                                        <a href="/xemphim/{{$m->alias}}"
                                            class="d-inline-block position-relative stretched-link">
                                            <img class="img-fluid" src="{{$m->thumb}}"
                                                alt="Image Description">
                                        </a>
                                    </div>
                                    <div class="product-title font-weight-bold font-size-1"><a
                                            href="/xemphim/{{$m->alias}}">{{$m->vi_title}}</a></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @endforeach
                @else
                        <h1>Không tìm thấy phim theo từ khóa bạn yêu cầu,. Vui lòng gõ chính xác tên phim để có kết quả tìm kiếm đúng nhất</h1>
                @endif
            </div>
        </section>
    </main>
    @include('includes.footer')
</body>
</html>
