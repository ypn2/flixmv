<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo2.madrasthemes.com/vodi-html/html-demo/single-movies/single-movies-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Sep 2023 04:46:31 GMT -->

<head>

    <title>Single Movies V1 | Vodi - Responsive Website Template</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="https://demo2.madrasthemes.com/vodi-html/favicon.ico">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&amp;family=Open+Sans:wght@300;400;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/theme.css">
    <link rel="stylesheet" href="/assets/css/app.css">
</head>

<body>

    @include('includes.header')

    <main id="content">
        <div class="bg-gray-1100 pt-5 pb-4">
            <div class="container px-md-5 mb-1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb dark font-size-1">
                        <li class="breadcrumb-item"><a href="/" class="text-gray-1300">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="single-movies-v2.html" class="text-gray-1300">Phim lẻ</a>
                        </li>
                        <li class="breadcrumb-item text-white active" aria-current="page">{{ $item->vi_title }}</li>
                    </ol>
                </nav>
                <div id="fancyboxGallery" class="mb-6 pb-1">
                    <div class="row justify-content-center">
                        <div class="col-sm-9">
                            <div class="position-relative min-h-270rem mb-2d mr-xl-3">
                                <iframe
                                    class="position-absolute w-100 h-lg-down-100 position-xl-relative top-0 bottom-0 border-0"
                                    height="620" src="{{ $item->source_video }}"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modulepager">
                    <ul class="pagination" style="flex-flow: wrap;">
                        @for ($i=1; $i < $item->so_tap; $i++)
                        <li class="PagerOtherPageCells"><a class="ModulePager" style="margin-top:5px;" href="/xemphim/{{$item->alias}}/{{$i}}"
                                title="Đến trang 2">{{$i}}</a> 
                        </li>
                        @endfor
                    </ul>
                </div>

            </div>
        </div>
    </main>
    @include('includes.footer')
</body>

</html>
