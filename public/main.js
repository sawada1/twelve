


var swiper = new Swiper(".mySwiper", {
      //slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 1.3,
          spaceBetween: 0,
        },
      },
    });

let openProfile = document.querySelectorAll('.openProfile');
let mainProfile = document.getElementById('mainProfile');

openProfile.forEach((ele) => {
    ele.addEventListener('click', () => {
        mainProfile.classList.toggle('active');
    })
});

let line = document.getElementById('line');
let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
window.addEventListener('scroll', () => {
    let top_scroll = document.documentElement.scrollTop;
    line.style.width = `${(top_scroll / height) * 100}%`;
});


let categories = document.querySelectorAll('.mainBoxes .header .chooseCategories span');

categories.forEach((ele) => {
    ele.addEventListener('click', () => {
        categories.forEach((e) => e.classList.remove('active'));
        ele.classList.add('active');
    })
})



let voucherBoxes = document.querySelectorAll('.voucher-container .select-voucher .mainbox .boxes .box');
let cartBoxes = document.querySelectorAll('.voucher-container .select-voucher .mainbox .amount-box .box');

if (voucherBoxes) {
   voucherBoxes.forEach((ele) => {
    ele.addEventListener('click', () => {
        voucherBoxes.forEach((e) => e.classList.remove('active'));
        ele.classList.add('active');
    })
})

}
if (cartBoxes) {
       cartBoxes.forEach((ele) => {
    ele.addEventListener('click', () => {
       cartBoxes.forEach((e) => e.classList.remove('active'));
        ele.classList.add('active');
    })
})

}


let count = 1;
let minusVoucher = document.querySelector('.voucher-container .select-voucher  .add .fa-minus');
let voucherNum = document.querySelector('.voucher-container .select-voucher  .add span');
let plusVoucher = document.querySelector('.voucher-container .select-voucher  .add .fa-plus');

if (minusVoucher) {
  minusVoucher.addEventListener('click', () => {
    if (count > 0) {
        count--;
        voucherNum.innerHTML = count;
    }
});
}
if (plusVoucher) {
   plusVoucher.addEventListener('click', () => {
    count++;
    voucherNum.innerHTML = count
})

}

let mainSideBar = document.getElementById('main-side-bar')
let sideBar = document.getElementById('side-bar');
let closeSideBar = document.getElementById('close-sidebar');


sideBar.addEventListener('click', () => {
    mainSideBar.classList.add('active');
});
closeSideBar.addEventListener('click', () => {
     mainSideBar.classList.remove('active');
});

document.addEventListener("click",function(e){
    if(e.target != sideBar){
       mainSideBar.classList.remove('active');
    }
});


let closeLoginForm = document.querySelector('.close-login-form');
let LoginForm = document.querySelector('.login-form');
let openLoginForm = document.querySelector('.direct-pay');
let loginBtn = document.getElementById('login-btn');

if (closeLoginForm) {
  closeLoginForm.addEventListener("click", () => {
    LoginForm.classList.remove('active');
});
}

if (loginBtn) {
 loginBtn.addEventListener("click", () => {
    LoginForm.classList.add('active');
});
}

if (openLoginForm) {
   openLoginForm.addEventListener("click", () => {
    LoginForm.classList.add('active');
});
}




