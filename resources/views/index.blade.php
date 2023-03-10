@extends('header-footer-index')
<link rel="stylesheet" href="../../">
<!-- Link css index -->
@push('styles')
<link href="{{ asset('/css/index.css') }}" rel="stylesheet">
@endpush

@section('main')
<!-- Begin main banner-->
<div class="main__banner-hotword--wrapper">
    <div class="main__banner container d-flex justify-content-between py-3">
        <div class="main__banner--slide">
            <div id="main__banner--slide-1" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="0" class="active me-1" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="1" class="me-1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="2" class="me-1" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="3" class="me-1" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="4" class="me-1" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="5" class="me-1" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="6" class="me-1" aria-label="Slide 7"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="7" class="me-1" aria-label="Slide 8"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="8" class="me-1" aria-label="Slide 9"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="9" class="me-1" aria-label="Slide 10"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="10" class="me-1" aria-label="Slide 11"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="11" class="me-1" aria-label="Slide 12"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="12" class="me-1" aria-label="Slide 13"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="13" class="me-1" aria-label="Slide 14"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-1.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-2.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-3.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-4.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-5.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-6.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-7.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-8.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-9.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-10.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-11.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-12.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-13.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-14.jfif') }}" alt="">
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#main__banner--slide-1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#main__banner--slide-1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="main__banner--img">
            <div class="main__banner--img-top">
                <img class="" src="/img/index/index-slide/index-slide-15.jfif" alt="">
            </div>
            <div class="main__banner--img-bottom">
                <img class="" src="/img/index/index-slide/index-slide-16.jfif" alt="">
            </div>
        </div>
    </div>
    <div class="main__hotword container d-flex justify-content-around pb-4">
        <a class="main__hotword--content">
            <div class="main__hotword--content-img mb-2">
                <img src="/img/index/index-hotword/index-hotword-1.gif" alt="">
            </div>
            <div class="main__hotword--content-title text-center">
                Khung Gi??? S??n Sale
            </div>
        </a>
        <a class="main__hotword--content">
            <div class="main__hotword--content-img mb-2">
                <img src="/img/index/index-hotword/index-hotword-2.png" alt="">
            </div>
            <div class="main__hotword--content-title text-center">
                G?? C??ng R??? - Mua L?? Freeship
            </div>
        </a>
        <a class="main__hotword--content">
            <div class="main__hotword--content-img mb-2">
                <img src="/img/index/index-hotword/index-hotword-3.png" alt="">
            </div>
            <div class="main__hotword--content-title text-center">
                Mi???n Ph?? V???n Chuy???n
            </div>
        </a>
        <a class="main__hotword--content">
            <div class="main__hotword--content-img mb-2">
                <img src="/img/index/index-hotword/index-hotword-4.png" alt="">
            </div>
            <div class="main__hotword--content-title text-center">
                B???t Trend - Gi?? S???c
            </div>
        </a>
        <a class="main__hotword--content">
            <div class="main__hotword--content-img mb-2">
                <img src="/img/index/index-hotword/index-hotword-5.png" alt="">
            </div>
            <div class="main__hotword--content-title text-center">
                Ho??n Xu Xtra T??? 100k
            </div>
        </a>
        <a class="main__hotword--content">
            <div class="main__hotword--content-img mb-2">
                <img src="/img/index/index-hotword/index-hotword-6.png" alt="">
            </div>
            <div class="main__hotword--content-title text-center">
                H??ng Hi???u Gi?? T???t
            </div>
        </a>
        <a class="main__hotword--content">
            <div class="main__hotword--content-img mb-2">
                <img src="/img/index/index-hotword/index-hotword-7.png" alt="">
            </div>
            <div class="main__hotword--content-title text-center">
                H??ng Qu???c T???
            </div>
        </a>
        <a class="main__hotword--content">
            <div class="main__hotword--content-img mb-2">
                <img src="/img/index/index-hotword/index-hotword-8.png" alt="">
            </div>
            <div class="main__hotword--content-title text-center">
                N???p Th??? & D???ch V???
            </div>
        </a>
        <a class="main__hotword--content">
            <div class="main__hotword--content-img mb-2">
                <img src="/img/index/index-hotword/index-hotword-9.png" alt="">
            </div>
            <div class="main__hotword--content-title text-center">
                Tr??ng 10 Tri???u Ti???n M???t
            </div>
        </a>
    </div>
</div>
<!-- End main banner -->

<!-- Begin main category-->
<div class="main__category--wrapper py-4">
    <h6 class="container bg-white p-3 mb-0">DANH M???C</h6>
    <div class="main__category--slider d-flex justify-content-between container bg-white">
        <i class="main__category--slider-prev fa-solid fa-chevron-left"></i>
        <i class="main__category--slider-next fa-solid fa-chevron-right"></i>
        <div class="main__category--slider-main-wrapper">
            <div class="main__category--slider-main">
                <div class="d-flex">
                    @foreach ($CategoryDad1 as $CategoryDad1)
                    <div class="main__category--slider-main-item">
                        <div>
                            <a href="{{ route('category-dad', ['id' => $CategoryDad1->id]) }}">
                                <div class="main__category--slider-main-item-div">
                                    <div class="main__category--slider-main-item-div-img">
                                        <img src="{{ $CategoryDad1->img }}" alt="">
                                    </div>
                                    <div class="main__category--slider-main-item-div-title text-center">
                                        {{ $CategoryDad1->name }}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="d-flex">
                    @foreach ($CategoryDad2 as $CategoryDad2)
                    <div class="main__category--slider-main-item">
                        <div>
                            <a href="{{ route('category-dad', ['id' => $CategoryDad2->id]) }}">
                                <div class="main__category--slider-main-item-div">
                                    <div class="main__category--slider-main-item-div-img">
                                        <img src="{{ $CategoryDad2->img }}" alt="">
                                    </div>
                                    <div class="main__category--slider-main-item-div-title text-center">
                                        {{ $CategoryDad2->name }}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End main category -->

<!-- Begin main flashsale-->
<div class="main__flashsale--wrapper pb-4">
    <div class="main__flashsale--title d-flex justify-content-between align-items-center container bg-white">
        <div class="main__flashsale--title-img">
            <img src="/img/index/index-flashsale/index-flashsale-title.png" alt="">
        </div>
        <a class="main__flashsale--title-seemore justify-content-between align-items-center d-flex">
            Xem T???t C???
            <i class="fa-solid fa-chevron-right p-2"></i>
        </a>
    </div>
    <div class="d-flex justify-content-between container bg-white">
        <div class="main__flashsale--slider">
            <i class="main__flashsale--slider-prev fa-solid fa-chevron-left"></i>
            <i class="main__flashsale--slider-next fa-solid fa-chevron-right"></i>
            <div class="main__flashsale--slider-main-wrapper">
                <div class="main__flashsale--slider-main d-flex">
                    @foreach ($FlashSales as $FlashSale)
                    <a href="{{ route('product', ['id' => $FlashSale->id]) }}" class="main__flashsale--slider-main-item">
                        <div class="main__flashsale--slider-main-item-img position-relative">
                            <div class="main__flashsale--slider-main-item-img-percent position-absolute">
                                <div class="main__flashsale--slider-main-item-img-percent-top text-center">0%</div>
                                <div class="main__flashsale--slider-main-item-img-percent-bottom text-center text-white">Gi???m</div>
                            </div>
                            <div class="main__flashsale--slider-main-item-img-background position-absolute">
                                <img src="/img/index/index-flashsale/index-flashsale-bg.png" alt="">
                            </div>
                            <div class="main__flashsale--slider-main-item-img-product position-absolute">
                                @php
                                $img = explode(', ', $FlashSale->img);
                                echo "<img src='$img[0]'>" ;
                                @endphp
                            </div>
                        </div>
                        <div class="main__flashsale--slider-main-item-price">
                            <div class="main__flashsale--slider-main-item-price-main d-flex justify-content-center align-items-center">
                                <span>???</span>
                                <p class="m-0">{{ $FlashSale->sold }}</p>
                            </div>
                            <div class="main__flashsale--slider-main-item-price-sold position-relative">
                                <div class="main__flashsale--slider-main-item-price-sold-main position-absolute text-white text-center w-100">
                                    ???? B??N 0
                                </div>
                                <div class="main__flashsale--slider-main-item-price-sold-live position-absolute"></div>
                                <div class="main__flashsale--slider-main-item-price-sold-background position-absolute w-100"></div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End main flashsale -->

<!-- Begin main advertisement-->
<div class="main__advertisement--wrapper pb-4">
    <div class="main__advertisement container">
        <img src="/img/index/index-advertisement/index-advertisement-1.png" alt="">
    </div>
</div>
<!-- End main advertisement -->

<!-- Begin main shopeemall-->
<div class="main__shopeemall--wrapper pb-4">
    <div class="main__shopeemall--title d-flex justify-content-between align-items-center container bg-white border-bottom">
        <div class="main__shopeemall--title-main d-flex align-items-center">
            <div class="border-right pe-3 me-3">
                <a href="">SHOPEE MALL</a>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-between align-items-center me-3">
                    <div class="main__shopeemall--title-main-img">
                        <img src="/img/index/index-shopeemall/index-shopeemall-title-1.png" alt="">
                    </div>
                    <p class="m-0">
                        7 Ng??y Mi???n Ph?? Tr??? H??ng
                    </p>
                </div>
                <div class="d-flex justify-content-between align-items-center me-3">
                    <div class="main__shopeemall--title-main-img">
                        <img src="/img/index/index-shopeemall/index-shopeemall-title-2.png" alt="">
                    </div>
                    <p class="m-0">
                        H??ng Ch??nh H??ng 100%
                    </p>
                </div>
                <div class="d-flex justify-content-between align-items-center me-3">
                    <div class="main__shopeemall--title-main-img">
                        <img src="/img/index/index-shopeemall/index-shopeemall-title-3.png" alt="">
                    </div>
                    <p class="m-0">
                        Mi???n Ph?? V???n Chuy???n
                    </p>
                </div>
            </div>
        </div>
        <a href="" class="main__shopeemall--title-seemore justify-content-between align-items-center d-flex">
            Xem T???t C???
            <i class="fa-solid fa-chevron-right p-2"></i>
        </a>
    </div>
    <div class="d-flex justify-content-between container bg-white pt-3">
        <div class="main__shopeemall--slider-banner">
            <div id="main__shopeemall--slider-banner" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#main__shopeemall--slider-banner" data-bs-slide-to="0" class="active me-1" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#main__shopeemall--slider-banner" data-bs-slide-to="1" class="me-1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#main__shopeemall--slider-banner" data-bs-slide-to="2" class="me-1" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#main__shopeemall--slider-banner" data-bs-slide-to="3" class="me-1" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#main__shopeemall--slider-banner" data-bs-slide-to="4" class="me-1" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#main__shopeemall--slider-banner" data-bs-slide-to="5" class="me-1" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#main__shopeemall--slider-banner" data-bs-slide-to="6" class="me-1" aria-label="Slide 7"></button>
                    <button type="button" data-bs-target="#main__shopeemall--slider-banner" data-bs-slide-to="7" class="me-1" aria-label="Slide 8"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block" src="/img/index/index-shopeemall/index-shopeemall-banner-1.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="/img/index/index-shopeemall/index-shopeemall-banner-2.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="/img/index/index-shopeemall/index-shopeemall-banner-3.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="/img/index/index-shopeemall/index-shopeemall-banner-4.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="/img/index/index-shopeemall/index-shopeemall-banner-5.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="/img/index/index-shopeemall/index-shopeemall-banner-6.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="/img/index/index-shopeemall/index-shopeemall-banner-7.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="/img/index/index-shopeemall/index-shopeemall-banner-8.png" alt="">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#main__shopeemall--slider-banner" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#main__shopeemall--slider-banner" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="main__shopeemall--slider-shop">
            <i class="main__shopeemall--slider-shop-prev fa-solid fa-chevron-left"></i>
            <i class="main__shopeemall--slider-shop-next fa-solid fa-chevron-right"></i>
            <div class="main__shopeemall--slider-shop-main-wrapper">
                <div class="main__shopeemall--slider-shop-main d-flex">
                    <div class="main__shopeemall--slider-shop-main-item">
                        <div>
                            @foreach ($ShopeeMall1 as $ShopeeMall1)
                            <a href="">
                                <div class="main__shopeemall--slider-shop-main-item-div mb-4">
                                    <div class="main__shopeemall--slider-shop-main-item-div-product d-flex justify-content-center align-items-center">
                                        @php
                                        $img = explode(', ', $ShopeeMall1->img);
                                        echo "<img src='$img[0]'>" ;
                                        @endphp
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="main__shopeemall--slider-shop-main-item-div-shop d-flex justify-content-center align-items-center border rounded-pill">
                                            <img src="{{ $ShopeeMall1->avatar }}">
                                        </div>
                                    </div>
                                    <div class="main__shopeemall--slider-shop-main-item-div-title text-center">
                                        Mua l?? c?? qu??
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="main__shopeemall--slider-shop-main-item">
                        <div>
                            @foreach ($ShopeeMall2 as $ShopeeMall2)
                            <a href="">
                                <div class="main__shopeemall--slider-shop-main-item-div mb-4">
                                    <div class="main__shopeemall--slider-shop-main-item-div-product d-flex justify-content-center align-items-center">
                                        @php
                                        $img = explode(', ', $ShopeeMall2->img);
                                        echo "<img src='$img[0]'>" ;
                                        @endphp
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="main__shopeemall--slider-shop-main-item-div-shop d-flex justify-content-center align-items-center border rounded-pill">
                                            <img src="{{ $ShopeeMall2->avatar }}">
                                        </div>
                                    </div>
                                    <div class="main__shopeemall--slider-shop-main-item-div-title text-center">
                                        Mua l?? c?? qu??
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="main__shopeemall--slider-shop-main-item">
                        <div>
                            @foreach ($ShopeeMall3 as $ShopeeMall3)
                            <a href="">
                                <div class="main__shopeemall--slider-shop-main-item-div mb-4">
                                    <div class="main__shopeemall--slider-shop-main-item-div-product d-flex justify-content-center align-items-center">
                                        @php
                                        $img = explode(', ', $ShopeeMall3->img);
                                        echo "<img src='$img[0]'>" ;
                                        @endphp
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="main__shopeemall--slider-shop-main-item-div-shop d-flex justify-content-center align-items-center border rounded-pill">
                                            <img src="{{ $ShopeeMall3->avatar }}">
                                        </div>
                                    </div>
                                    <div class="main__shopeemall--slider-shop-main-item-div-title text-center">
                                        Mua l?? c?? qu??
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="main__shopeemall--slider-shop-main-item">
                        <div>
                            @foreach ($ShopeeMall4 as $ShopeeMall4)
                            <a href="">
                                <div class="main__shopeemall--slider-shop-main-item-div mb-4">
                                    <div class="main__shopeemall--slider-shop-main-item-div-product d-flex justify-content-center align-items-center">
                                        @php
                                        $img = explode(', ', $ShopeeMall4->img);
                                        echo "<img src='$img[0]'>" ;
                                        @endphp
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="main__shopeemall--slider-shop-main-item-div-shop d-flex justify-content-center align-items-center border rounded-pill">
                                            <img src="{{ $ShopeeMall4->avatar }}">
                                        </div>
                                    </div>
                                    <div class="main__shopeemall--slider-shop-main-item-div-title text-center">
                                        Mua l?? c?? qu??
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="main__shopeemall--slider-shop-main-item">
                        <div>
                            @foreach ($ShopeeMall5 as $ShopeeMall5)
                            <a href="">
                                <div class="main__shopeemall--slider-shop-main-item-div mb-4">
                                    <div class="main__shopeemall--slider-shop-main-item-div-product d-flex justify-content-center align-items-center">
                                        @php
                                        $img = explode(', ', $ShopeeMall5->img);
                                        echo "<img src='$img[0]'>" ;
                                        @endphp
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="main__shopeemall--slider-shop-main-item-div-shop d-flex justify-content-center align-items-center border rounded-pill">
                                            <img src="{{ $ShopeeMall5->avatar }}">
                                        </div>
                                    </div>
                                    <div class="main__shopeemall--slider-shop-main-item-div-title text-center">
                                        Mua l?? c?? qu??
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="main__shopeemall--slider-shop-main-item">
                        <div>
                            @foreach ($ShopeeMall6 as $ShopeeMall6)
                            <a href="">
                                <div class="main__shopeemall--slider-shop-main-item-div mb-4">
                                    <div class="main__shopeemall--slider-shop-main-item-div-product d-flex justify-content-center align-items-center">
                                        @php
                                        $img = explode(', ', $ShopeeMall6->img);
                                        echo "<img src='$img[0]'>" ;
                                        @endphp
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="main__shopeemall--slider-shop-main-item-div-shop d-flex justify-content-center align-items-center border rounded-pill">
                                            <img src="{{ $ShopeeMall6->avatar }}">
                                        </div>
                                    </div>
                                    <div class="main__shopeemall--slider-shop-main-item-div-title text-center">
                                        Mua l?? c?? qu??
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="main__shopeemall--slider-shop-main-item">
                        <div>
                            @foreach ($ShopeeMall7 as $ShopeeMall7)
                            <a href="">
                                <div class="main__shopeemall--slider-shop-main-item-div mb-4">
                                    <div class="main__shopeemall--slider-shop-main-item-div-product d-flex justify-content-center align-items-center">
                                        @php
                                        $img = explode(', ', $ShopeeMall7->img);
                                        echo "<img src='$img[0]'>" ;
                                        @endphp
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="main__shopeemall--slider-shop-main-item-div-shop d-flex justify-content-center align-items-center border rounded-pill">
                                            <img src="{{ $ShopeeMall7->avatar }}">
                                        </div>
                                    </div>
                                    <div class="main__shopeemall--slider-shop-main-item-div-title text-center">
                                        Mua l?? c?? qu??
                                    </div>
                                </div>
                            </a>
                            @endforeach
                            <a class="main__shopeemall--slider-shop-main-item-seemore d-flex justify-content-center align-items-center">
                                Xem T???t C???
                                <i class="fa-solid fa-chevron-right p-2"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End main shopeemall -->

<!-- Begin main topsearch-->
<div class="main__topsearch--wrapper pb-4">
    <div class="main__topsearch--title d-flex justify-content-between align-items-center container bg-white border-bottom">
        <div class="main__topsearch--title-main d-flex align-items-center">
            <div>
                <a>T??M KI???M H??NG ?????U</a>
            </div>
        </div>
        <a href="" class="main__topsearch--title-seemore justify-content-between align-items-center d-flex">
            Xem T???t C???
            <i class="fa-solid fa-chevron-right p-2"></i>
        </a>
    </div>
    <div class="d-flex justify-content-between container bg-white">
        <div class="main__topsearch--slider">
            <i class="main__topsearch--slider-prev fa-solid fa-chevron-left"></i>
            <i class="main__topsearch--slider-next fa-solid fa-chevron-right"></i>
            <div class="main__topsearch--slider-main-wrapper">
                <div class="main__topsearch--slider-main d-flex">
                    @foreach ($TopSearchs as $TopSearch)
                    <a href="{{ route('product', ['id' => $TopSearch->id]) }}" class="main__topsearch--slider-main-item">
                        <div class="main__topsearch--slider-main-item-img position-relative">
                            <div class="main__topsearch--slider-main-item-img-percent position-absolute">
                                <img src="/img/index/index-topsearch/index-topsearch-percent.png" alt="">
                            </div>
                            <div class="main__topsearch--slider-main-item-img-product position-absolute">
                                @php
                                $img = explode(', ', $TopSearch->img);
                                echo "<img src='$img[0]'>" ;
                                @endphp
                            </div>
                            <div class="main__topsearch--slider-main-item-img-background position-absolute text-center text-white">
                                B??n 0 / th??ng
                            </div>
                        </div>
                        <div class="main__topsearch--slider-main-item-name">
                            {{ $TopSearch->title }}
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End main topsearch -->

<!-- Begin main suggestions-->
<div class="main__suggestions--wrapper pb-4">
    <div class="main__suggestions--title d-flex justify-content-center align-items-center container bg-white mb-2">
        G???I ?? H??M NAY
    </div>
    <div class="main__suggestions--main d-flex flex-wrap container mb-4">
        @foreach ($Suggestions as $Suggestion)
        <a href="{{ route('product', ['id' => $Suggestion->id]) }}">
            <div class="main__suggestions--main-post bg-white">
                <div class="main__suggestions--main-post-img position-relative">
                    <div class="main__suggestions--main-post-img-percent position-absolute">
                        <div class="main__suggestions--main-post-img-percent-top text-center">63%</div>
                        <div class="main__suggestions--main-post-img-percent-bottom text-center text-white">Gi???m</div>
                    </div>
                    <div class="main__suggestions--main-post-img-background position-absolute">
                        <img src="/img/index/index-flashsale/index-flashsale-bg.png" alt="">
                    </div>
                    <div class="main__suggestions--main-post-img-product position-absolute">
                        @php
                        $img = explode(', ', $Suggestion->img);
                        echo "<img src='$img[0]'>" ;
                        @endphp
                    </div>
                </div>
                <div class="main__suggestions--main-post-main">
                    <div class="main__suggestions--main-post-main-title text-dark">
                        {{ $Suggestion->title }}
                    </div>
                    <div class="main__suggestions--main-post-main-space"></div>
                    <div class="main__suggestions--main-post-main-detail d-flex justify-content-between align-items-center">
                        <div class="main__suggestions--main-post-main-detail-price d-flex justify-content-center align-items-center">
                            <span>???</span>
                            <p class="m-0">{{ $Suggestion->sold }}</p>
                        </div>
                        <div class="main__suggestions--main-post-main-detail-sold d-flex justify-content-center align-items-center">
                            ???? b??n 0
                        </div>
                    </div>
                </div>
                <a href="{{ route('category-child', ['id' => $Suggestion->categoryChild->id]) }}" class="main__suggestions--main-post-hover text-center text-white  position-absolute">
                    T??m s???n ph???m t????ng t???
                </a>
            </div>
        </a>
        @endforeach
    </div>
    <div class="main__suggestions--seemore d-flex justify-content-center align-items-center container mb-4">
        <button class="bg-white text-center">
            Xem Th??m
        </button>
    </div>
</div>
<!-- End main suggestions -->

<!-- Begin main contentinfo-->
<div class="main__contentinfo--wrapper pb-4">
    <div class="main__contentinfo container border-bottom pb-5">
        <h5 class="mt-5 mb-2">
            SHOPEE - G?? C??NG C??, MUA H???T ??? SHOPEE
        </h5>
        <p>
            Shopee - ???ng d???ng mua s???m tr???c tuy???n th?? v???, tin c???y, an to??n v?? mi???n ph??! Shopee l?? n???n t???ng giao d???ch tr???c tuy???n h??ng ?????u ??? ????ng Nam ??, c?? tr??? s??? ch??nh ??? Singapore, ???? c?? m???t ??? kh???p c??c khu v???c <a href="" class="text-dark">Singapore</a>, <a href="" class="text-dark">Malaysia</a>, <a href="" class="text-dark">Indonesia</a>, <a href="" class="text-dark">Th??i Lan</a>, <a href="" class="text-dark">Philippines</a>, <a href="" class="text-dark">????i Loan</a>, <a href="" class="text-dark">Brazil</a>, <a href="" class="text-dark">M??xico</a>, <a href="" class="text-dark">Colombia</a>, <a href="" class="text-dark">Poland</a> & <a href="" class="text-dark">Spain</a>. V???i s??? ?????m b???o c???a Shopee, b???n s??? mua h??ng tr???c tuy???n an t??m v?? nhanh ch??ng h??n bao gi??? h???t!
        </p>
        <h6>
            MUA S???M V?? B??N H??NG ONLINE ????N GI???N, NHANH CH??NG V?? AN TO??N
        </h6>
        <p>
            N???u b???n ??ang t??m ki???m m???t trang web ????? mua v?? b??n h??ng tr???c tuy???n th?? Shopee.vn l?? m???t s??? l???a ch???n tuy???t v???i d??nh cho b???n. Shopee l?? trang th????ng m???i ??i???n t??? cho ph??p ng?????i mua v?? ng?????i b??n t????ng t??c v?? trao ?????i d??? d??ng th??ng tin v??? s???n ph???m v?? ch????ng tr??nh khuy???n m??i c???a shop. Do ????, vi???c mua b??n tr??n Shopee tr??? n??n nhanh ch??ng v?? ????n gi???n h??n. B???n c?? th??? tr?? chuy???n tr???c ti???p v???i nh?? b??n h??ng ????? h???i tr???c ti???p v??? m???t h??ng c???n mua. C??n n???u b???n mu???n t??m mua nh???ng d??ng s???n ph???m ch??nh h??ng, uy t??n, <a href="" class="text-primary">Shopee Mall</a> ch??nh l?? s??? l???a ch???n l?? t?????ng d??nh cho b???n. ????? b???n c?? th??? d??? d??ng khi t??m hi???u v?? s??? d???ng s???n ph???m, <a href="" class="text-primary">Shopee Blog - trang blog th??ng tin ch??nh th???c c???a Shopee</a> - s??? gi??p b???n c?? th??? t??m ???????c cho m??nh c??c ki???n th???c v??? xu h?????ng th???i trang, review c??ng ngh???, m???o l??m ?????p, tin t???c ti??u d??ng v?? deal gi?? t???t b???t ng???.
            ?????n v???i Shopee, c?? h???i ????? tr??? th??nh m???t nh?? b??n h??ng d??? d??ng h??n bao gi??? h???t. Ch??? v???i v??i thao t??c tr??n ???ng d???ng, b???n ???? c?? th??? ????ng b??n ngay nh???ng s???n ph???m c???a m??nh. Kh??ng nh???ng th???, c??c nh?? b??n h??ng c?? th??? t??? <a href="" class="text-primary">t???o ch????ng tr??nh khuy???n m??i tr??n Shopee</a> ????? thu h??t ng?????i mua v???i nh???ng s???n ph???m c?? m???c gi?? h???p d???n. Khi ????ng nh???p t???i Shopee K??nh ng?????i b??n, b???n c?? th??? d??? d??ng ph??n lo???i s???n ph???m, theo d??i ????n h??ng, ch??m s??c kh??ch h??ng v?? c???p nh???p ngay c??c ho???t ?????ng c???a shop.
        </p>
        <h6>
            T???I ???NG D???NG SHOPEE NGAY ????? MUA B??N ONLINE M???I L??C, M???I N??I
        </h6>
        <p>
            ??u ??i???m c???a ???ng d???ng Shopee l?? cho ph??p b???n mua v?? b??n h??ng m???i l??c, m???i n??i. B???n c?? th??? t???i ???ng d???ng Shopee c??ng nh?? ????ng s???n ph???m b??n h??ng m???t c??ch nhanh ch??ng v?? ti???n l???i. Ngo??i ra, ???ng d???ng Shopee c??n c?? nh???ng ??u ??i???m sau:
        </p>
        <p>
            Giao di???n th??n thi???n, ????n gi???n, d??? s??? d???ng. B???n s??? d??? d??ng th???y ???????c ngay nh???ng s???n ph???m n???i b???t c??ng nh?? d??? d??ng t??m ?????n c??c ?? t??m ki???m, gi??? h??ng ho???c t??nh n??ng chat li???n tay.
        </p>
        <p>
            ???ng d???ng t??ch h???p c??ng ngh??? qu???n l?? ????n mua v?? b??n h??ng ti???n l???i tr??n c??ng m???t t??i kho???n. B???n s??? v???a l?? ng?????i mua h??ng, v???a l?? ng?????i b??n h??ng r???t linh ho???t, d??? d??ng.
        </p>
        <p>
            C???p nh???p th??ng tin khuy???n m??i, <a href="" class="text-primary">Shopee flash sale</a> nhanh ch??ng v?? li??n t???c.
        </p>
        <p>
            T???i Shopee, b???n c?? th??? l??u c??c <a href="" class="text-primary">m?? gi???m gi?? Shopee</a> v?? <a href="" class="text-primary">m?? mi???n ph?? v???n chuy???n to??n qu???c</a>. B??n c???nh ????, Shopee c??ng s??? c?? nh???ng chi???n d???ch khuy???n m??i l???n h???ng n??m nh?? <a href="" class="text-primary">Si??u h???i ti??u d??ng 15.3</a>, <a href="" class="text-primary">Shopee 4.4 sale</a>, <a href="" class="text-primary">Shopee 5.5 sale</a>, <a href="" class="text-primary">Shopee sale 7.7</a>, <a href="" class="text-primary">Shopee sale 8.8</a>, <a href="" class="text-primary">Shopee sale 9.9</a>, <a href="" class="text-primary">Shopee 10.10 sale</a>, <a href="" class="text-primary">Shopee 11.11 sale</a>, <a href="" class="text-primary">Shopee Sale sinh nh???t</a>, <a href="" class="text-primary">Shopee T???t Sale</a>. ????y l?? th???i ??i???m ????? ng?????i mua h??ng c?? th??? nhanh tay ch???n ngay cho m??nh nh???ng m???t h??ng ??a th??ch v???i m???c gi?? gi???m k??? l???c. Ngo??i ra, b???n c??n c?? th??? th???a th??ch s??n sale v??o c??c ng??y trong th??ng nh?? <a href="" class="text-primary">Sale ?????ng gi?? gi???a th??ng</a> v?? <a href="" class="text-primary">Sale cu???i th??ng</a>.
        </p>
        <h6>
            MUA H??NG HI???U CAO C???P GI?? T???T T???I SHOPEE
        </h6>
        <p>
            B??n c???nh <a href="" class="text-primary">Shopee Premium</a>, Shopee c??n c?? r???t nhi???u khuy???n m??i kh???ng cho <a href="" class="text-primary">h??ng hi???u gi???m ?????n 50%</a>. C???ng v???i m?? giao h??ng mi???n ph??, Shopee c??ng c?? c??c m?? gi???m gi?? ???????c ph??n ph???i m???i th??ng t??? r???t nhi???u gian h??ng ch??nh h??ng tham gia ch????ng tr??nh khuy???n m??i n??y. B??n c???nh ????, Shopee c??n t???p h???p r???t nhi???u th????ng hi???u ????nh ????m ???????c c??c nh?? b??n l??? uy t??n ph??n ph???i b??n tr??n Shopee, <a href="" class="text-primary">top s???n ph???m hot deal cho b???n s??n sale</a> lu??n c???p nh???t m???i gi???, m???i ng??y, ??em ?????n cho b???n s??? l???a ch???n ??a d???ng, t??? c??c h??ng m??? ph???m n???i ti???ng h??ng ?????u nh?? <a href="" class="text-primary">Kiehl's</a>, <a href="" class="text-primary">MAC</a>, <a href="" class="text-primary">Foreo</a>, <a href="" class="text-primary">SK-II</a>, <a href="" class="text-primary">Estee Lauder</a>,... ?????n nh???ng th????ng hi???u c??ng ngh??? n???i ti???ng nh?? <a href="" class="text-primary">camera h??nh tr??nh Gopro</a>, <a href="" class="text-primary">m??y ???nh Fuifilm</a>, <a href="" class="text-primary">webcam Hikvision</a>, <a href="" class="text-primary">m??y ?????c s??ch Kindle</a>,... T???i Shopee, b???n c?? th??? d??? d??ng t??m th???y c??c th????ng hi???u gi??y th??? thao ph??? bi???n hi???n nay nh??: <a href="" class="text-primary">Converse</a>, <a href="" class="text-primary">New Balance</a>, <a href="" class="text-primary">Nike</a>, <a href="" class="text-primary">Vans</a>, <a href="" class="text-primary">Crocs</a>,...
        </p>
        <h6>
            MUA H??NG CH??NH H??NG T??? C??C TH????NG HI???U L???N V???I SHOPEE
        </h6>
        <p>
            Mua h??ng tr??n Shopee lu??n l?? m???t tr???i nghi???m ???n t?????ng. D?? b???n ??ang c?? nhu c???u mua b???t k??? m???t h??ng <a href="" class="text-primary">th???i trang nam</a>, <a href="" class="text-primary">th???i trang n???</a>, <a href="" class="text-primary">?????ng h???</a>, <a href="" class="text-primary">??i???n tho???i</a>, <a href="" class="text-primary">n?????c r???a tay kh??</a> hay <a href="" class="text-primary">kh???u trang N95</a> th?? Shopee c??ng s??? ?????m b???o cung c???p cho b???n nh???ng s???n ph???m ??ng ??. B??n c???nh ????, Shopee c??ng c?? s??? tham gia c???a c??c th????ng hi???u h??ng ?????u th??? gi???i ??? ??a d???ng nhi???u l??nh v???c kh??c nhau. Trong ???? c?? th??? k??? ?????n Samsung, OPPO, Xiaomi, Innisfree, Unilever, P&G, Biti???s,...C??c th????ng hi???u n??y hi???n c??ng ???? c?? c???a h??ng ch??nh th???c tr??n Shopee Mall v???i h??ng tr??m m???t h??ng ch??nh h??ng, ???????c c???p nh???p li??n t???c. L?? m???t k??nh b??n h??ng uy t??n, Shopee lu??n cam k???t mang l???i cho kh??ch h??ng nh???ng tr???i nghi???m mua s???m online gi?? r???, an to??n v?? tin c???y. M???i th??ng tin v??? ng?????i b??n v?? ng?????i mua ?????u ???????c b???o m???t tuy???t ?????i. C??c ho???t ?????ng giao d???ch thanh to??n t???i Shopee lu??n ???????c ?????m b???o di???n ra nhanh ch??ng, an to??n. M???t v???n ????? n???a khi???n cho c??c kh??ch h??ng lu??n quan t??m ???? ch??nh l?? mua h??ng tr??n Shopee c?? ?????m b???o kh??ng.
        </p>
        <p>
            Shopee lu??n cam k???t m???i s???n ph???m tr??n Shopee, ?????c bi???t l?? Shopee Mall ?????u l?? nh???ng s???n ph???m ch??nh h??ng, ?????y ????? tem nh??n, b???o h??nh t??? nh?? b??n h??ng. Ngo??i ra, Shopee b???o v??? ng?????i mua v?? ng?????i b??n b???ng c??ch gi??? s??? ti???n giao d???ch ?????n khi ng?????i mua x??c nh???n ?????ng ?? v???i ????n h??ng v?? kh??ng c?? y??u c???u khi???u n???i, tr??? h??ng hay ho??n ti???n n??o. Thanh to??n sau ???? s??? ???????c chuy???n ?????n cho ng?????i b??n. ?????n v???i Shopee ngay h??m nay ????? mua h??ng online gi?? r??? v?? tr???i nghi???m d???ch v??? ch??m s??c kh??ch h??ng tuy???t v???i t???i ????y. ?????c bi???t khi mua s???m tr??n Shopee Mall, b???n s??? ???????c mi???n ph?? v???n chuy???n, giao h??ng t???n n??i v?? 7 ng??y mi???n ph?? tr??? h??ng. Ngo??i ra, kh??ch h??ng c?? th??? s??? d???ng <a href="" class="text-primary">Shopee Xu</a> ????? ?????i l???y m?? gi???m gi?? c?? gi?? tr??? cao v?? voucher d???ch v??? h???p d???n. Ti???p ?????n l?? <a href="" class="text-primary">Shopee Home Club</a>, <a href="" class="text-primary">Shopee Mum Club</a>, <a href="" class="text-primary">Shopee Beauty Club</a> v?? <a href="" class="text-primary">Shopee Book Club</a> v???i c??c ??u ????i ?????c quy???n t??? c??c th????ng hi???u l???n c?? nh???ng kh??ch h??ng ???? ????ng k?? l??m th??nh vi??n. H??y truy c???p ngay Shopee.vn ho???c t???i ngay ???ng d???ng Shopee v??? ??i???n tho???i ngay h??m nay!
        </p>
    </div>
</div>
<!-- End main contentinfo -->

<!-- Begin main category-child -->
<div class="main__category--child-wrapper py-5">
    <div class="main__category--child container">
        <h5 class="main__category--child-title">
            Danh M???c
        </h5>
        <div class="main__category--child-main d-flex justify-content-between">
            <div class="main__category--child-main-div">
                @foreach ($CategoryChild1 as $Dad1)
                <a href="{{ route('category-dad', ['id' => $Dad1->id]) }}" class="main__category--child-main-div-title">
                    {{ $Dad1->name }}
                </a>
                <div class="main__category--child-main-div-main mb-3">
                    @foreach ($Dad1->categoryChildren as $Child1)
                    <a href="{{ route('category-child', ['id' => $Child1->id]) }}">{{ $Child1->name }}</a>
                    |
                    @endforeach
                </div>
                @endforeach
            </div>
            <div class="main__category--child-main-div">
                @foreach ($CategoryChild2 as $Dad2)
                <a href="{{ route('category-dad', ['id' => $Dad2->id]) }}" class="main__category--child-main-div-title">
                    {{ $Dad2->name }}
                </a>
                <div class="main__category--child-main-div-main mb-3">
                    @foreach ($Dad2->categoryChildren as $Child2)
                    <a href="{{ route('category-child', ['id' => $Child2->id]) }}">{{ $Child2->name }}</a>
                    |
                    @endforeach
                </div>
                @endforeach
            </div>
            <div class="main__category--child-main-div">
                @foreach ($CategoryChild3 as $Dad3)
                <a href="{{ route('category-dad', ['id' => $Dad3->id]) }}" class="main__category--child-main-div-title">
                    {{ $Dad3->name }}
                </a>
                <div class="main__category--child-main-div-main mb-3">
                    @foreach ($Dad3->categoryChildren as $Child3)
                    <a href="{{ route('category-child', ['id' => $Child3->id]) }}">{{ $Child3->name }}</a>
                    |
                    @endforeach
                </div>
                @endforeach
            </div>
            <div class="main__category--child-main-div">
                @foreach ($CategoryChild4 as $Dad4)
                <a href="{{ route('category-dad', ['id' => $Dad4->id]) }}" class="main__category--child-main-div-title">
                    {{ $Dad4->name }}
                </a>
                <div class="main__category--child-main-div-main mb-3">
                    @foreach ($Dad4->categoryChildren as $Child4)
                    <a href="{{ route('category-child', ['id' => $Child4->id]) }}">{{ $Child4->name }}</a>
                    |
                    @endforeach
                </div>
                @endforeach
            </div>
            <div class="main__category--child-main-div">
                @foreach ($CategoryChild5 as $Dad5)
                <a href="{{ route('category-dad', ['id' => $Dad5->id]) }}" class="main__category--child-main-div-title">
                    {{ $Dad5->name }}
                </a>
                <div class="main__category--child-main-div-main mb-3">
                    @foreach ($Dad5->categoryChildren as $Child5)
                    <a href="{{ route('category-child', ['id' => $Child5->id]) }}">{{ $Child5->name }}</a>
                    |
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- End main category-child  -->
@endsection

@push('scripts')
<!-- Link script index -->
<script src="{{ asset('/js/index.js') }}"></script>
@endpush