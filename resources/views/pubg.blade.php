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

    <div class="container maingame pubg-game">
        <img class="big-img" src="images/background-game1.png" alt="">
        <div class="pubg-cards">
            <div class="box">
                <img class="mainimg" src="images/pubg-card.png" alt="">
                <div class="text">
                    <div class="header">
                        <div class="head">
                            <h5>pubg</h5>
                            <span>Voucher card</span>
                        </div>
                        <div class="star">
                            <img src="images/star.svg" alt="">
                            <span>4.5</span>
                        </div>
                    </div>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Neque placeat quibusdam at maiores ratione beatae.
                        Minus magni magnam cupiditate nesciunt veniam,
                        amet est tenetur fugit ipsum laboriosam rerum facere dolores?
                    </p>
                    <button>top up</button>
                </div>
            </div>
            <div class="box">
                <img class="mainimg" src="images/pubg-card.png" alt="">
                <div class="text">
                    <div class="header">
                        <div class="head">
                            <h5>pubg</h5>
                            <span>Voucher card</span>
                        </div>
                        <div class="star">
                            <img src="images/star.svg" alt="">
                            <span>4.5</span>
                        </div>
                    </div>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Neque placeat quibusdam at maiores ratione beatae.
                        Minus magni magnam cupiditate nesciunt veniam,
                        amet est tenetur fugit ipsum laboriosam rerum facere dolores?
                    </p>
                    <button>top up</button>
                </div>
            </div>
            <div class="box">
                <img class="mainimg" src="images/pubg-card.png" alt="">
                <div class="text">
                    <div class="header">
                        <div class="head">
                            <h5>pubg</h5>
                            <span>Voucher card</span>
                        </div>
                        <div class="star">
                            <img src="images/star.svg" alt="">
                            <span>4.5</span>
                        </div>
                    </div>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Neque placeat quibusdam at maiores ratione beatae.
                        Minus magni magnam cupiditate nesciunt veniam,
                        amet est tenetur fugit ipsum laboriosam rerum facere dolores?
                    </p>
                    <button>top up</button>
                </div>
            </div>
        </div>
        <img class="back" src="images/mask2.svg" alt="">
    </div>


    @include('layouts.footer');
    @include('layouts.scripts');
</body>

</html>
