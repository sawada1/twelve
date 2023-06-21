<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('layouts.head');

</head>

<body>
    @include('layouts.nav-header');

    <div class="landing">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image">
                        <img class="mainImg" src="images/landing1.png" alt="">
                        <div class="img-text">
                            <img src="images/fortnite.png" alt="">
                            <h4 class="title">Buy FORTNITE Voucher card in Seconds!</h4>
                            <p>The easiest way to get Fortnite cards, no registration or login required.</p>
                            <a href="{{route('fortnite')}}">
                                <button>Explore</button>
                            </a>
                        </div>
                    </div>



                </div>
                <div class="swiper-slide">
                    <div class="image">
                        <img class="mainImg" src="images/landing2.png" alt="">
                        <div class="img-text">
                            <img src="images/pubg.png" alt="">
                            <h4 class="title">Buy PUBG Voucher <br> card in Seconds!</h4>
                            <p>simply select your favorite PUBG mobile voucher category.</p>
                            <a href="{{route('pubg')}}">
                                <button>Explore</button>
                            </a>

                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>
    <div class="container offers my-5">
        <h3># EXCLUSIVE OFFERS</h3>
        <div class="row justify-content-center">
            <div class="box col-12 col-xl-3 col-lg-3 col-md-6">
                <div class="image">
                    <img src="images/main-img1.png" alt="">
                    <div class="text">
                        <h5>pubg</h5>
                        <span>Voucher card</span>
                    </div>
                </div>
                <span class="discount">-5.0%</span>
            </div>
            <div class="box col-12 col-xl-3 col-lg-3 col-md-6">
                <div class="image">
                    <img src="images/main-img2.png" alt="">
                    <div class="text">
                        <h5>pubg</h5>
                        <span>Voucher card</span>
                    </div>
                </div>
                <span class="discount">-5.0%</span>
            </div>
            <div class="box col-12 col-xl-3 col-lg-3 col-md-6">
                <div class="image">
                    <img src="images/main-img3.png" alt="">
                    <div class="text">
                        <h5>pubg</h5>
                        <span>Voucher card</span>
                    </div>
                </div>
                <span class="discount">-5.0%</span>
            </div>
            <div class="box col-12 col-xl-3 col-lg-3 col-md-6">
                <div class="image">
                    <img src="images/main-img4.png" alt="">
                    <div class="text">
                        <h5>pubg</h5>
                        <span>Voucher card</span>
                    </div>
                </div>
                <span class="discount">-5.0%</span>
            </div>
            <div class="box col-12 col-xl-3 col-lg-3 col-md-6">
                <div class="image">
                    <img src="images/main-img1.png" alt="">
                    <div class="text">
                        <h5>pubg</h5>
                        <span>Voucher card</span>
                    </div>
                </div>
                <span class="discount">-5.0%</span>
            </div>
            <div class="box col-12 col-xl-3 col-lg-3 col-md-6">
                <div class="image">
                    <img src="images/main-img2.png" alt="">
                    <div class="text">
                        <h5>pubg</h5>
                        <span>Voucher card</span>
                    </div>
                </div>
                <span class="discount">-5.0%</span>
            </div>
            <div class="box col-12 col-xl-3 col-lg-3 col-md-6">
                <div class="image">
                    <img src="images/main-img3.png" alt="">
                    <div class="text">
                        <h5>pubg</h5>
                        <span>Voucher card</span>
                    </div>
                </div>
                <span class="discount">-5.0%</span>
            </div>
            <div class="box col-12 col-xl-3 col-lg-3 col-md-6">
                <div class="image">
                    <img src="images/main-img4.png" alt="">
                    <div class="text">
                        <h5>pubg</h5>
                        <span>Voucher card</span>
                    </div>
                </div>
                <span class="discount">-5.0%</span>
            </div>
        </div>
        <img src="images/mask2.svg" class="back-img" alt="">
    </div>
    <div class="container mainBoxes trending">
        <div class="header">
            <div class="most d-flex flex-column gap-3">
                <span>trending</span>
                <h3># Most Popular</h3>
                <div class="choose chooseCategories">
                    <span class="active">all</span>
                    <span>top</span>
                    <span>voucher</span>
                </div>
            </div>
            <div class="view d-flex align-items-center gap-2">
                <span>view all</span>
                <img src="images/arrow.png" alt="">
            </div>
        </div>

        <div class="row gap-3 justify-content-cente">
            <div class="box col-6 col-xl-2 col-lg-4 col-md-6">
                <img class="mainImg" src="images/main-img1.png" alt="">
                <div class="text">
                    <div class="star">
                        <img src="images/star.svg" alt="">
                        <span>4.5</span>
                    </div>
                    <div class="name">
                        <h5>pubg</h5>
                        <span>Voucher card</span>
                    </div>
                    <a class="w-100" href="{{route('voucher')}}">
                        <button>BUY NOW!</button>
                    </a>

                </div>
            </div>
            <div class="box col-6 col-xl-2 col-lg-4 col-md-6">
                <img class="mainImg" src="images/main-img2.png" alt="">
                <div class="text">
                    <div class="star">
                        <img src="images/star.svg" alt="">
                        <span>4.5</span>
                    </div>
                    <div class="name">
                        <h5>Call of duty mobile</h5>
                        <span>Voucher card</span>
                    </div>
                    <a class="w-100" href="{{route('voucher')}}">
                        <button>BUY NOW!</button>
                    </a>

                </div>
            </div>
            <div class="box col-6 col-xl-2 col-lg-4 col-md-6">
                <img class="mainImg" src="images/main-img3.png" alt="">
                <div class="text">
                    <div class="star">
                        <img src="images/star.svg" alt="">
                        <span>4.5</span>
                    </div>
                    <div class="name">
                        <h5>Fortnite</h5>
                        <span>Voucher card</span>
                    </div>
                    <a class="w-100" href="{{route('voucher')}}">
                        <button>BUY NOW!</button>
                    </a>

                </div>
            </div>
            <div class="box col-6 col-xl-2 col-lg-4 col-md-6">
                <img class="mainImg" src="images/main-img4.png" alt="">
                <div class="text">
                    <div class="star">
                        <img src="images/star.svg" alt="">
                        <span>4.5</span>
                    </div>
                    <div class="name">
                        <h5>FIFA mobile</h5>
                        <span>Voucher card</span>
                    </div>
                    <a class="w-100" href="{{route('voucher')}}">
                        <button>BUY NOW!</button>
                    </a>

                </div>
            </div>
            <div class="box col-6 col-xl-2 col-lg-4 col-md-6">
                <img class="mainImg" src="images/main-img3.png" alt="">
                <div class="text">
                    <div class="star">
                        <img src="images/star.svg" alt="">
                        <span>4.5</span>
                    </div>
                    <div class="name">
                        <h5>Fortnite</h5>
                        <span>Voucher card</span>
                    </div>
                    <a class="w-100" href="{{route('voucher')}}">
                        <button>BUY NOW!</button>
                    </a>

                </div>
            </div>
            <div class="box col-6 col-xl-2 col-lg-4 col-md-6">
                <img class="mainImg" src="images/main-img4.png" alt="">
                <div class="text">
                    <div class="star">
                        <img src="images/star.svg" alt="">
                        <span>4.5</span>
                    </div>
                    <div class="name">
                        <h5>FIFA mobile</h5>
                        <span>Voucher card</span>
                    </div>
                    <a class="w-100" href="{{route('voucher')}}">
                        <button>BUY NOW!</button>
                    </a>

                </div>
            </div>
        </div>
        <!-- <img src="images/mask2.svg" class="back-img" alt=""> -->
    </div>
    <div class="container mainBoxes recent">
        <div class="header">
            <div class="most d-flex flex-column gap-3">
                <span>new</span>
                <h3># Recent Voucher</h3>
            </div>
            <div class="view d-flex align-items-center gap-2">
                <span>view all</span>
                <img src="images/arrow.png" alt="">
            </div>
        </div>

        <div class="row gap-3 justify-content-cente">
            <div class="box col-6 col-xl-2 col-lg-4 col-md-6">
                <img class="mainImg" src="images/main-img1.png" alt="">
                <div class="text">
                    <div class="star">
                        <img src="images/star.svg" alt="">
                        <span>4.5</span>
                    </div>
                    <div class="name">
                        <h5>pubg</h5>
                        <span>Voucher card</span>
                    </div>
                    <a class="w-100" href="{{route('voucher')}}">
                        <button>BUY NOW!</button>
                    </a>

                </div>
            </div>
            <div class="box col-6 col-xl-2 col-lg-4 col-md-6">
                <img class="mainImg" src="images/main-img2.png" alt="">
                <div class="text">
                    <div class="star">
                        <img src="images/star.svg" alt="">
                        <span>4.5</span>
                    </div>
                    <div class="name">
                        <h5>Call of duty mobile</h5>
                        <span>Voucher card</span>
                    </div>
                    <a class="w-100" href="{{route('voucher')}}">
                        <button>BUY NOW!</button>
                    </a>

                </div>
            </div>
            <div class="box col-6 col-xl-2 col-lg-4 col-md-6">
                <img class="mainImg" src="images/main-img3.png" alt="">
                <div class="text">
                    <div class="star">
                        <img src="images/star.svg" alt="">
                        <span>4.5</span>
                    </div>
                    <div class="name">
                        <h5>Fortnite</h5>
                        <span>Voucher card</span>
                    </div>
                    <a class="w-100" href="{{route('voucher')}}">
                        <button>BUY NOW!</button>
                    </a>

                </div>
            </div>
            <div class="box col-6 col-xl-2 col-lg-4 col-md-6">
                <img class="mainImg" src="images/main-img4.png" alt="">
                <div class="text">
                    <div class="star">
                        <img src="images/star.svg" alt="">
                        <span>4.5</span>
                    </div>
                    <div class="name">
                        <h5>FIFA mobile</h5>
                        <span>Voucher card</span>
                    </div>
                    <a class="w-100" href="{{route('voucher')}}">
                        <button>BUY NOW!</button>
                    </a>

                </div>
            </div>
            <div class="box col-6 col-xl-2 col-lg-4 col-md-6">
                <img class="mainImg" src="images/main-img3.png" alt="">
                <div class="text">
                    <div class="star">
                        <img src="images/star.svg" alt="">
                        <span>4.5</span>
                    </div>
                    <div class="name">
                        <h5>Fortnite</h5>
                        <span>Voucher card</span>
                    </div>
                    <a class="w-100" href="{{route('voucher')}}">
                        <button>BUY NOW!</button>
                    </a>

                </div>
            </div>
            <div class="box col-6 col-xl-2 col-lg-4 col-md-6">
                <img class="mainImg" src="images/main-img4.png" alt="">
                <div class="text">
                    <div class="star">
                        <img src="images/star.svg" alt="">
                        <span>4.5</span>
                    </div>
                    <div class="name">
                        <h5>FIFA mobile</h5>
                        <span>Voucher card</span>
                    </div>
                    <a class="w-100" href="{{route('voucher')}}">
                        <button>BUY NOW!</button>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <div class="container offers top my-5">
        <div class="header">
            <h3># New Game TOP-UP</h3>
            <div class="view d-flex align-items-center gap-2">
                <span>view all</span>
                <img src="images/arrow.png" alt="">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="box col-12 col-xl-3 col-lg-3 col-md-6">
                <div class="image">
                    <img src="images/main-img1.png" alt="">
                    <div class="text">
                        <div class="star  p-0">
                            <img src="images/star.svg" alt="">
                            <span>4.5</span>
                        </div>
                        <div class="name">
                            <h5>pubg</h5>
                            <span>Voucher card</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="box col-12 col-xl-3 col-lg-3 col-md-6">
                <div class="image">
                    <img src="images/main-img2.png" alt="">
                    <div class="text">
                        <div class="star">
                            <img src="images/star.svg" alt="">
                            <span>4.5</span>
                        </div>
                        <h5>pubg</h5>
                        <span>Voucher card</span>
                    </div>
                </div>
            </div>
            <div class="box col-12 col-xl-3 col-lg-3 col-md-6">
                <div class="image">
                    <img src="images/main-img3.png" alt="">
                    <div class="text">
                        <div class="star">
                            <img src="images/star.svg" alt="">
                            <span>4.5</span>
                        </div>
                        <h5>pubg</h5>
                        <span>Voucher card</span>
                    </div>
                </div>

            </div>
            <div class="box col-12 col-xl-3 col-lg-3 col-md-6">
                <div class="image">
                    <img src="images/main-img4.png" alt="">
                    <div class="text">
                        <div class="star">
                            <img src="images/star.svg" alt="">
                            <span>4.5</span>
                        </div>
                        <h5>pubg</h5>
                        <span>Voucher card</span>
                    </div>
                </div>
            </div>
            <div class="box col-12 col-xl-3 col-lg-3 col-md-6">
                <div class="image">
                    <img src="images/main-img1.png" alt="">
                    <div class="text">
                        <div class="star">
                            <img src="images/star.svg" alt="">
                            <span>4.5</span>
                        </div>
                        <h5>pubg</h5>
                        <span>Voucher card</span>
                    </div>
                </div>

            </div>
            <div class="box col-12 col-xl-3 col-lg-3 col-md-6">
                <div class="image">
                    <img src="images/main-img2.png" alt="">
                    <div class="text">
                        <div class="star">
                            <img src="images/star.svg" alt="">
                            <span>4.5</span>
                        </div>
                        <h5>pubg</h5>
                        <span>Voucher card</span>
                    </div>
                </div>

            </div>
            <div class="box col-12 col-xl-3 col-lg-3 col-md-6">
                <div class="image">
                    <img src="images/main-img3.png" alt="">
                    <div class="text">
                        <div class="star">
                            <img src="images/star.svg" alt="">
                            <span>4.5</span>
                        </div>
                        <h5>pubg</h5>
                        <span>Voucher card</span>
                    </div>
                </div>

            </div>
            <div class="box col-12 col-xl-3 col-lg-3 col-md-6">
                <div class="image">
                    <img src="images/main-img4.png" alt="">
                    <div class="text">
                        <div class="star">
                            <img src="images/star.svg" alt="">
                            <span>4.5</span>
                        </div>
                        <h5>pubg</h5>
                        <span>Voucher card</span>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="container twelve">
        <div class="img-twelve my-5 d-flex text-center flex-column justify-content-center align-items-center">
            <img src="images/twelve.png" alt="">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Minus officiis deserunt ullam voluptatibus numquam,
                blanditiis rerum saepe natus error consequuntur
                minima eos dolores inventore placeat eum autem deleniti id nemo!
            </p>
        </div>
        <div class="row my-5">
            <div class="col-12 col-xl-4 col-lg-4 col-md-6 my-3">
                <img src="images/icon1.svg" alt="" class="my-2">
                <h4 class="my-2">Easy And Fast</h4>
                <p class="my-2">
                    Lorem Ipsum is simply dummy text of
                    the printing and typesetting industry.
                    Lorem Ipsum has been the industry's
                    standard dummy text ever since the
                    1500s, when an unknown printer took a
                    galley of type
                </p>
            </div>
            <div class="col-12 col-xl-4 col-lg-4 col-md-6 my-3">
                <img src="images/icon2.svg" alt="" class="my-2">
                <h4 class="my-2">Instant Delivery</h4>
                <p class="my-2">
                    Lorem Ipsum is simply dummy text of
                    the printing and typesetting industry.
                    Lorem Ipsum has been the industry's
                    standard dummy text ever since the
                    1500s, when an unknown printer took a
                    galley of type
                </p>
            </div>
            <div class="col-12 col-xl-4 col-lg-4 col-md-6 my-3">
                <img src="images/icon3.svg" alt="" class="my-2">
                <h4 class="my-2">Fast Customer Support</h4>
                <p class="my-2">
                    Lorem Ipsum is simply dummy text of
                    the printing and typesetting industry.
                    Lorem Ipsum has been the industry's
                    standard dummy text ever since the
                    1500s, when an unknown printer took a
                    galley of type
                </p>
            </div>
        </div>
        <img class="back" src="images/backTwelve.png" alt="">
    </div>

    <div class="container ">
        <div class="mobile-app">
            <img class="main-img" src="images/mobile.png" alt="">
            <div class="app d-flex flex-column gap-3">
                <h4 class="fw-bolder">Download Our Mobile App</h4>
                <div class="stores d-flex align-items-center gap-4">
                    <div class="store d-flex align-items-center gap-3">
                        <img src="images/apple.png" alt="">
                        <div class="text d-flex flex-column gap-2">
                            <span>Download on the</span>
                            <span class="fw-bold">Apple Store</span>
                        </div>
                    </div>
                    <div class="store d-flex align-items-center gap-3">
                        <img src="images/play.png" alt="">
                        <div class="text d-flex flex-column gap-2">
                            <span>Get in on</span>
                            <span class="fw-bold">google Store</span>
                        </div>
                    </div>
                </div>
            </div>
            <img class="qr" src="images/qrcode.svg" alt="">
        </div>
    </div>

    @include('layouts.footer');
    @include('layouts.scripts');
</body>

</html>
