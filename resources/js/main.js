let navbar = document.querySelector("#navbar");
let logo = document.querySelector('#logo');
let collapse = document.querySelector('.navbar-collapse');


window.addEventListener('scroll' , ()=>{
    let scrolled = window.scrollY;

    if(scrolled > 0){
        navbar.classList.remove('.cust-nav');
        collapse.classList.remove('.cust-nav');
        collapse.classList.add('var(--beigenav)');
        navbar.style.height= '70px';
        logo.style.height='50px';
    }else{
        navbar.classList.add('.cust-nav');
        collapse.classList.remove('.cust-nav');
        collapse.classList.add('var(--beigenav)');
        navbar.style.height= '100px';
        logo.style.height='80px';
    }
});

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    pagination: {
            el: ".swiper-pagination",
        // clickable: true,
    },
    
    autoplay: {
        delay: 4000,
    },
      speed: 500,
  });

