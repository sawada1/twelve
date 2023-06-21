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

    <div class="container voucher-container">
        <div class="select-voucher">
            <div class="mainbox common account">
                <h3><span>1</span> account info</h3>
                <div class="inputs d-flex">
                    <div class="input">
                        <label for="">phone number</label>
                        <input type="text" placeholder="0xxxxxxx">
                    </div>

                    <div class="input">
                        <label for="">email</label>
                        <input type="email" placeholder="0xxxxxxx">
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4 gap-3">
                    <button>verify account</button>

                    <div class="info">
                        <img src="images/info.svg" alt="">
                        <span>Invalid account</span>
                    </div>
                </div>

            </div>
            <div class="mainbox common amount">
                <h3><span>2</span> Select Amount</h3>

                <div class="amount-box">
                    <div class="box active"><span>60</span> uc</div>
                    <div class="box"><span>60</span> uc</div>
                    <div class="box"><span>60</span> uc</div>
                    <div class="box"><span>60</span> uc</div>
                    <div class="box"><span>60</span> uc</div>
                    <div class="box"><span>60</span> uc</div>
                    <div class="box"><span>60</span> uc</div>
                    <div class="box"><span>60</span> uc</div>
                </div>

            </div>
            <div class="btn text-center w-100">
                <button>
                    <div class="text">
                        <img src="images/white-cart.svg" alt="">
                        <span>ADD TO CART</span>
                    </div>

                </button>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <div class="or text-center">
                    <span>or</span>
                </div>
            </div>
            <div>
                <div class="direct-pay">
                    <span>Direct pay</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>

            </div>
            @include('layouts.loginForm');
            <img class="back-img" src="images/mask3.svg" alt="">
        </div>
    </div>




    <div class="container fixedgame">
        <img class="main-img" src="images/fixedgame.png" alt="">
        <button>
            <img src="images/!.svg" alt="">
            <span>How To Use</span>
        </button>
        <div class="text">
            <h5>Fortnite</h5>
            <div class="head">
                <span>Voucher card</span>
                <div class="star">
                    <img src="images/star.svg" alt="">
                    <span>4.5</span>
                </div>
            </div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Obcaecati officia repudiandae voluptatum, deserunt blanditiis
                tempora rerum impedit nostrum est veniam enim minima.
                Deserunt laboriosam iusto, suscipit saepe rem necessitatibus beatae!</p>
            <div class="app d-flex flex-column align-items-center">
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
        </div>
    </div>

    @include('layouts.footer');
    @include('layouts.scripts');
</body>

</html>
