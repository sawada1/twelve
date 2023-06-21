<div class="login-form">
    <div class="login-container">
        <div class="d-flex flex-column w-100 pt-4">
            <h3>login</h3>
            <p class="order">Please login to complete your order</p>
            <div class="input">
                <label for="">phone number</label>
                <input type="text" placeholder="0xxxxxxx">
            </div>
            <div class="input">
                <label for="">email</label>
                <input type="email" placeholder="0xxxxxxx">
            </div>
            <span class="w-100 d-flex justify-content-end pass">FORGET PASSWORD</span>

            <div>
                <a href="{{route('directPay')}}">
                    <button>login</button>
                </a>

            </div>
            <div class="or  text-center w-100">
                <span>or</span>
            </div>
            <div class="icons my-2">
                <i class="fa-brands fa-google"></i>
                <i class="fa-brands fa-square-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-apple"></i>
            </div>
            <div class="d-flex mt-3 align-items-center justify-content-center">
                <p>DON'T HAVE ACCOUNT ? <span>SIGNUP</span></p>
            </div>
            <img src="images/close.svg" alt="" class="close-login-form">
        </div>

    </div>
</div>
