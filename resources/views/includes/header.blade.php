<header id="header" class="header left-aligned-navbar">
    @php
        $list_nationals = $nationals->chunk(10);
        $list_categories = $categories->chunk(10);
    @endphp
    <div class="header-section shadow-soft">
        <div id="logoAndNav" class="container-fluid px-md-5">

            <nav class="js-mega-menu navbar navbar-expand-xl py-0 position-static justify-content-start">
                
                <button type="button" class="navbar-toggler btn btn-icon btn-sm rounded-circle mr-2"
                    aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar"
                    data-toggle="collapse" data-target="#navBar">
                    <span class="navbar-toggler-default">
                        <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor"
                                d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z" />
                        </svg>
                    </span>
                    <span class="navbar-toggler-toggled">
                        <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor"
                                d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                        </svg>
                    </span>
                </button>

                <a class="navbar-brand w-auto mr-xl-5 mr-wd-8" href="/" aria-label="Vodi">
                    <svg version="1.1" width="103" height="40px">
                        <linearGradient id="vodi-gr" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0" style="stop-color:#2A4999"></stop>
                            <stop offset="1" style="stop-color:#2C9CD4"></stop>
                        </linearGradient>
                        <g class="vodi-gr">
                            <path class="vodi-svg0"
                                d="M72.8,12.7c0-2.7,0-1.8,0-4.4c0-0.9,0-1.8,0-2.8C73,3,74.7,1.4,77,1.4c2.3,0,4.1,1.8,4.2,4.2c0,1,0,2.1,0,3.1
                        c0,6.5,0,9.4,0,15.9c0,4.7-1.7,8.8-5.6,11.5c-4.5,3.1-9.3,3.5-14.1,0.9c-4.7-2.5-7.1-6.7-7-12.1c0.1-7.8,6.3-13.6,14.1-13.2
                        c0.7,0,1.4,0.2,2.1,0.3C71.3,12.2,72,12.4,72.8,12.7z M67.8,19.8c-2.9,0-5.2,2.2-5.2,5c0,2.9,2.3,5.3,5.2,5.3
                        c2.8,0,5.2-2.4,5.2-5.2C73,22.2,70.6,19.8,67.8,19.8z
                        M39.9,38.6c-7.3,0-13.3-6.1-13.3-13.5c0-7.5,5.9-13.4,13.4-13.4c7.5,0,13.4,6,13.4,13.5
                        C53.4,32.6,47.4,38.6,39.9,38.6z M39.9,30.6c3.2,0,5.6-2.3,5.6-5.6c0-3.2-2.3-5.5-5.5-5.5c-3.2,0-5.6,2.2-5.6,5.4
                        C34.4,28.2,36.7,30.6,39.9,30.6z
                        M14.6,27c0.6-1.4,1.1-2.6,1.6-3.8c1.2-2.9,2.5-5.8,3.7-8.8c0.7-1.7,2-2.8,4-2.7c3,0,4.9,2.6,3.8,5.4
                        c-0.5,1.3-1.2,2.6-1.8,3.9c-2.4,5-4.9,10-7.3,15c-0.8,1.6-2,2.6-3.9,2.6c-2,0-3.3-0.8-4.2-2.6c-2.7-5.6-5.3-11.1-8-16.7
                        c-0.3-0.7-0.6-1.3-0.9-2c-0.8-1.8-0.3-3.7,1.1-4.8c1.5-1.2,4-1.3,5.3,0c0.7,0.6,1.2,1.5,1.6,2.3C11.3,18.8,12.9,22.7,14.6,27z
                        M90.9,25.1c0,3.1,0,6.2,0,9.4c0,1.9-1.2,3.4-2.9,4c-1.7,0.5-3.5,0-4.5-1.6c-0.5-0.8-0.8-1.8-0.8-2.6
                        c-0.1-6.1-0.1-11.3,0-17.5c0-2.2,1.5-3.9,3.5-4.2c2.1-0.3,4.1,0.9,4.7,2.9c0.1,0.5,0.2,1.1,0.2,1.6C90.9,20,90.9,22.1,90.9,25.1
                        C90.9,25.1,90.9,25.1,90.9,25.1z
                        M90.2,4.7L86,2.3c-1.3-0.8-3,0.2-3,1.7v4.8c0,1.5,1.7,2.5,3,1.7l4.2-2.4C91.5,7.4,91.5,5.5,90.2,4.7z">
                            </path>
                        </g>
                    </svg>
                </a>


                <div id="navBar" class="collapse navbar-collapse order-1 order-xl-0">
                    <div class="navbar-body header-abs-top-inner">
                        <ul class="navbar-nav">
                            {{-- <li class="navbar-nav-item">
                                <a id="homeMegaMenu"
                                    class="hs-mega-menu-invoker nav-link font-secondary"
                                    href="javascript:;" aria-haspopup="true" aria-expanded="false">Phim lẻ</a>
                            </li>

                            <li class="navbar-nav-item">
                                <a id="pagesMegaMenu"
                                    class="hs-mega-menu-invoker nav-link font-secondary"
                                    href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                    aria-labelledby="pagesSubMenu">Phim bộ</a>
                            </li> --}}

                            <li class="hs-has-sub-menu navbar-nav-item">
                                <a id="pagesMegaMenu"
                                    class="hs-mega-menu-invoker nav-link font-secondary"
                                    href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                    aria-labelledby="pagesSubMenu">Thể loại</a>

                                <div id="pagesSubMenu" class="hs-sub-menu dropdown-menu mega-menu-sub-menu-lg"
                                    aria-labelledby="pagesMegaMenu">
                                    <div class="px-4 px-md-6 pt-md-2 pb-4">
                                        <div class="row row-cols-md-3 font-size-14">
                                            @foreach ($list_categories as $cats )
                                            <div class="col-md">
                                                @foreach ($cats as $c )
                                                    <a class="dropdown-item h-fw-bold px-0 py-1 font-size-14"
                                                    href="/search?the_loai={{$c->title}}">{{$c->title}}</a>
                                                @endforeach
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </li>

                            <li class="hs-has-sub-menu navbar-nav-item">
                                <a id="pagesMegaMenu"
                                    class="hs-mega-menu-invoker nav-link font-secondary"
                                    href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                    aria-labelledby="pagesSubMenu">Quốc Gia</a>

                                <div id="pagesSubMenu" class="hs-sub-menu dropdown-menu mega-menu-sub-menu-lg"
                                    aria-labelledby="pagesMegaMenu">
                                    <div class="px-4 px-md-6 pt-md-2 pb-4">
                                        <div class="row row-cols-md-3 font-size-14">

                                            @foreach ($list_nationals as $nats )
                                            <div class="col-md">
                                                @foreach ($nats as $n )
                                                    <a class="dropdown-item h-fw-bold px-0 py-1 font-size-14"
                                                    href="/search?quoc_gia={{$n->name}}">{{$n->name}}</a>
                                                @endforeach
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="d-flex align-items-center ml-auto">
                    <form   autocomplete="off" method="GET" action="/search" class="d-none d-xl-block">
                        <label class="sr-only">Tìm kiếm</label>
                        <div class="autocomplete input-group">
                            <input type="text" name="keyword"
                                class="search-form-control form-control py-2 pl-4 min-width-250 rounded-pill"
                                name="email" id="searchmovie-item" placeholder="Tìm kiếm..."
                                aria-label="Tìm kiếm..." aria-describedby="searchProduct1" required>
                            <div class="input-group-append position-absolute top-0 bottom-0 right-0  z-index-4">
                                <button class="d-flex py-2 px-3 border-0 bg-transparent align-items-center"
                                    type="button" id="searchProduct1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        style="fill: #656565;">
                                        <path
                                            d="M7 0C11-0.1 13.4 2.1 14.6 4.9 15.5 7.1 14.9 9.8 13.9 11.4 13.7 11.7 13.6 12 13.3 12.2 13.4 12.5 14.2 13.1 14.4 13.4 15.4 14.3 16.3 15.2 17.2 16.1 17.5 16.4 18.2 16.9 18 17.5 17.9 17.6 17.9 17.7 17.8 17.8 17.2 18.3 16.7 17.8 16.4 17.4 15.4 16.4 14.3 15.4 13.3 14.3 13 14.1 12.8 13.8 12.5 13.6 12.4 13.5 12.3 13.3 12.2 13.3 12 13.4 11.5 13.8 11.3 14 10.7 14.4 9.9 14.6 9.2 14.8 8.9 14.9 8.6 14.9 8.3 14.9 8 15 7.4 15.1 7.1 15 6.3 14.8 5.6 14.8 4.9 14.5 2.7 13.6 1.1 12.1 0.4 9.7 0 8.7-0.2 7.1 0.2 6 0.3 5.3 0.5 4.6 0.9 4 1.8 2.4 3 1.3 4.7 0.5 5.2 0.3 5.7 0.2 6.3 0.1 6.5 0 6.8 0.1 7 0ZM7.3 1.5C7.1 1.6 6.8 1.5 6.7 1.5 6.2 1.6 5.8 1.7 5.4 1.9 3.7 2.5 2.6 3.7 1.9 5.4 1.7 5.8 1.7 6.2 1.6 6.6 1.4 7.4 1.6 8.5 1.8 9.1 2.4 11.1 3.5 12.3 5.3 13 5.9 13.3 6.6 13.5 7.5 13.5 7.7 13.5 7.9 13.5 8.1 13.5 8.6 13.4 9.1 13.3 9.6 13.1 11.2 12.5 12.4 11.4 13.1 9.8 13.6 8.5 13.6 6.6 13.1 5.3 12.2 3.1 10.4 1.5 7.3 1.5Z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="d-inline-flex ml-md-5">
                        <ul class="d-flex list-unstyled mb-0 align-items-center">
                            <li class="col d-xl-none position-static px-2">

                                <div class="hs-unfold mr-2 position-static">
                                    <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary"
                                        href="javascript:;" data-hs-unfold-options="{
                                            &quot;target&quot;: &quot;#searchClassic&quot;,
                                            &quot;type&quot;: &quot;css-animation&quot;,
                                            &quot;animationIn&quot;: &quot;slideInUp&quot;
                                        }">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                                            <path
                                                d="M7 0C11-0.1 13.4 2.1 14.6 4.9 15.5 7.1 14.9 9.8 13.9 11.4 13.7 11.7 13.6 12 13.3 12.2 13.4 12.5 14.2 13.1 14.4 13.4 15.4 14.3 16.3 15.2 17.2 16.1 17.5 16.4 18.2 16.9 18 17.5 17.9 17.6 17.9 17.7 17.8 17.8 17.2 18.3 16.7 17.8 16.4 17.4 15.4 16.4 14.3 15.4 13.3 14.3 13 14.1 12.8 13.8 12.5 13.6 12.4 13.5 12.3 13.3 12.2 13.3 12 13.4 11.5 13.8 11.3 14 10.7 14.4 9.9 14.6 9.2 14.8 8.9 14.9 8.6 14.9 8.3 14.9 8 15 7.4 15.1 7.1 15 6.3 14.8 5.6 14.8 4.9 14.5 2.7 13.6 1.1 12.1 0.4 9.7 0 8.7-0.2 7.1 0.2 6 0.3 5.3 0.5 4.6 0.9 4 1.8 2.4 3 1.3 4.7 0.5 5.2 0.3 5.7 0.2 6.3 0.1 6.5 0 6.8 0.1 7 0ZM7.3 1.5C7.1 1.6 6.8 1.5 6.7 1.5 6.2 1.6 5.8 1.7 5.4 1.9 3.7 2.5 2.6 3.7 1.9 5.4 1.7 5.8 1.7 6.2 1.6 6.6 1.4 7.4 1.6 8.5 1.8 9.1 2.4 11.1 3.5 12.3 5.3 13 5.9 13.3 6.6 13.5 7.5 13.5 7.7 13.5 7.9 13.5 8.1 13.5 8.6 13.4 9.1 13.3 9.6 13.1 11.2 12.5 12.4 11.4 13.1 9.8 13.6 8.5 13.6 6.6 13.1 5.3 12.2 3.1 10.4 1.5 7.3 1.5Z">
                                            </path>
                                        </svg>
                                    </a>
                                    <div id="searchClassic"
                                        class="hs-unfold-content dropdown-menu w-100 border-0 rounded-0 px-3 mt-0 right-0 left-0 mt-n2">
                                        <form class="input-group input-group-sm input-group-merge">
                                            <input type="text" class="form-control search-form-control rounded-pill"
                                                placeholder="Search..." aria-label="Search...">
                                            <div class="input-group-append">
                                                <button type="button" class="btn">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>

                </div>
            </nav>

        </div>
    </div>
</header>
