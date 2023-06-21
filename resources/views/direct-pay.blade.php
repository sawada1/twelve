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

            <div class="mainbox">
                <h3>Select Voucher</h3>
                <div class="boxes">
                    <div class="box active">
                        <img src="images/voucher.png" alt="">
                        <span>60 uc</span>
                        <p><span>5</span> sar</p>
                    </div>
                    <div class="box">
                        <img src="images/voucher.png" alt="">
                        <span>60 uc</span>
                        <p><span>5</span> sar</p>
                    </div>
                    <div class="box">
                        <img src="images/voucher.png" alt="">
                        <span>60 uc</span>
                        <p><span>5</span> sar</p>
                    </div>
                    <div class="box">
                        <img src="images/voucher.png" alt="">
                        <span>60 uc</span>
                        <p><span>5</span> sar</p>
                    </div>
                    <div class="box">
                        <img src="images/voucher.png" alt="">
                        <span>60 uc</span>
                        <p><span>5</span> sar</p>
                    </div>
                    <div class="box">
                        <img src="images/voucher.png" alt="">
                        <span>60 uc</span>
                        <p><span>5</span> sar</p>
                    </div>
                    <div class="box">
                        <img src="images/voucher.png" alt="">
                        <span>60 uc</span>
                        <p><span>5</span> sar</p>
                    </div>
                    <div class="box">
                        <img src="images/voucher.png" alt="">
                        <span>60 uc</span>
                        <p><span>5</span> sar</p>
                    </div>
                </div>
                <div class="w-100  d-flex justify-content-end py-3 px-4">
                    <div class="add ">
                        <i class="fa-solid fa-minus"></i>
                        <span>1</span>
                        <i class="fa-solid fa-plus"></i>
                    </div>

                </div>
            </div>
            <div class="btn text-center w-100">
                <button class="cart-btn">
                    <div class="text">
                        <img src="images/white-cart.svg" alt="">
                        <span>ADD TO CART</span>
                    </div>

                </button>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <div class="or direct text-center">
                    <span>or</span>
                </div>
            </div>
            <div class="text-center mb-3">
                <span class="text-light fw-bold  fs-5">DIRECT PAY</span>
            </div>


            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body firstbody">
                            <div class="method">
                                <h5 class="fw-bolder mb-4">payment method</h5>
                                <div class="inputs">
                                    <div class="inp">
                                        <input type="radio" id="outline">
                                        <div class="image multi d-flex">
                                            <div class="d-flex align-items-center gap-3">

                                                <img src="images/credit.svg" alt="">
                                                <span>Credit Card</span>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="images/credit1.svg" alt="">
                                                <img src="images/credit2.svg" alt="">
                                                <img src="images/credit3.svg" alt="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="inp">
                                        <input type="radio">
                                        <div class="image">
                                            <img src="images/apple.png" alt="">
                                            <span>Apple Pay</span>
                                        </div>
                                    </div>
                                    <div class="inp">
                                        <input type="radio">
                                        <div class="image">
                                            <img src="images/stc-pay.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="pay">
                                    <p>Total to pay: <span>50 SAR</span></p>
                                    <button>buy now!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="accordion-item my-3">
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body secondbody">
                            <h5>Confirmation</h5>
                            <p>Please make sure your phone number is correct.
                                Your voucher code will be sent to this phone number.</p>
                            <div class="input">
                                <label for="">phone number</label>
                                <input type="text" placeholder="0xxxxxxx">
                            </div>
                            <p>Optional: If you would like to receive your
                                purchase receipt by email,
                                please enter an email address</p>

                            <div class="input">
                                <label for="">email</label>
                                <input type="email" placeholder="0xxxxxxx">
                            </div>

                            <div class="inp">
                                <input type="checkbox">
                                <label for="">Yes, I would like to sign up for exclusive Codashop news and offers.</label>
                            </div>
                            <div class="inp">
                                <input type="checkbox">
                                <label for="">I would like to receive news and promotions via SMS</label>
                            </div>
                            <div class="btn w-100  d-flex justify-content-end">
                                <button>BUY NOW!</button>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <img class="back-img" src="images/mask3.svg" alt="">
        <!-- <div class="login-form">
            <div class="login-container">
                <div class="d-flex flex-column w-100">
                    <h3>login</h3>
                    <p>Please login to complete your order</p>
                    <div class="input">
                        <label for="">phone number</label>
                        <input type="text" placeholder="0xxxxxxx">
                    </div>
                    <div class="input">
                        <label for="">email</label>
                        <input type="email" placeholder="0xxxxxxx">
                    </div>
                    <span class="w-100 d-flex justify-content-end">FORGET PASSWORD</span>
                    <div><button>login</button></div>
                    <div class="or  text-center w-100">
                        <span>or</span>
                    </div>
                    <div class="icons">
                        <i class="fa-brands fa-google"></i>
                        <i class="fa-brands fa-square-facebook"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-apple"></i>
                    </div>
                    <p>DON'T HAVE ACCOUNT ? <span>SIGNUP</span></p>
                </div>

            </div>
        </div> -->
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
