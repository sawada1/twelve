   <nav>
       <div id="line"></div>
       <div class="logoAndsearch d-flex align-items-center gap-4">
           <div class="logoContainer d-flex align-items-center gap-3">
               <img src="images/bar.svg" id="side-bar" alt="">
               <a href="{{route('home')}}">
                   <img src="images/logo.svg" alt="">
               </a>

           </div>
           <div class="searchBar">
               <div class="input">
                   <i class="fa-solid fa-magnifying-glass"></i>
                   <input type="search" placeholder="search">
                   <span>search</span>
               </div>
           </div>
       </div>
       <div class="logout">
           <div class="profile-image" id="mainProfile">
               <div class="main-text">
                   <img src="images/kk.jpg" alt="">
                   <div class="text">
                       <p>hi ,
                           <span>mohamed</span>
                           <i class="fa-solid fa-chevron-down open openProfile"></i>
                           <i class="fa-solid fa-xmark close openProfile"></i>
                       </p>
                       <span>rank</span>
                   </div>
               </div>
               <div class="main-profile">
                   <p>example@mail.com</p>
                   <p>+9012345689</p>
                   <div class="wallet">
                       <img src="images/wallet.svg" alt="">
                       <div class="price">
                           <p><span>50</span> sar</p>
                           <span>Your wallet balance</span>
                       </div>
                       <img src="images/r-arrow.svg" class="arrow" alt="">
                   </div>
                   <span class="head">Edit Account</span>
                   <span class="head">My Orders</span>

                   <div class="log">
                       <a href="{{route('home')}}">
                           <img src="images/switch.svg" alt="">
                           <span>Logout</span>
                       </a>

                   </div>
               </div>


           </div>
           <div id="login-btn">
               <img src="images/logout.svg" alt="">
               <span class="">login</span>
           </div>
           <img src="images/arabic.png" alt="">
           <img src="images/ar.svg" alt="">
           <img src="images/cart.svg" alt="">
       </div>
   </nav>

   <div class="sidebar-container" id="main-side-bar">
       <div class="sidebar d-flex flex-column align-items-center">
           <div class="header d-flex align-items-center gap-5">
               <img src="images/close.svg" id="close-sidebar" alt="">
               <a href="{{route('home')}}">
                   <img src="images/logo-side.svg" alt="">
               </a>
           </div>
           <div class="links d-flex flex-column align-items-center gap-4">
               <div class="link d-flex align-items-center justify-content-bewteen w-100 gap-3">
                   <img src="images/side-icon1.svg" alt="">
                   <span>Send a gift</span>
                   <i class="fa-solid fa-chevron-right"></i>
               </div>
               <div class="link d-flex align-items-center justify-content-bewteen w-100 gap-3">
                   <img src="images/side-icon2.svg" alt="">
                   <span>Top Up</span>
                   <i class="fa-solid fa-chevron-right"></i>
               </div>
               <div class="link d-flex align-items-center justify-content-bewteen w-100 gap-3">
                   <img src="images/side-icon3.svg" alt="">
                   <span>Vouchers</span>
                   <i class="fa-solid fa-chevron-right"></i>
               </div>
               <div class="link d-flex align-items-center justify-content-bewteen w-100 gap-3">
                   <img src="images/side-icon4.svg" alt="">
                   <span>Games</span>
                   <i class="fa-solid fa-chevron-right"></i>
               </div>
           </div>
           <div class="searchBar">
               <div class="input">
                   <i class="fa-solid fa-magnifying-glass"></i>
                   <input type="search" placeholder="search">
                   <span>search</span>
               </div>
           </div>

           <div class="logout">
               <div>
                   <img src="images/logout.svg" alt="">
                   <span>login</span>
               </div>
               <img src="images/arabic.png" alt="">
               <img src="images/ar.svg" alt="">
               <img src="images/cart.svg" alt="">
           </div>
       </div>
   </div>

   @include('layouts.loginForm');
