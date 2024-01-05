AOS.init();
//my project
let proj=document.querySelectorAll(".pro li ");
let imgs=document.querySelectorAll(".p ");
// let imgs=Array.from(document.images);

proj.forEach((li)=>{
  li.addEventListener("click" ,removeActive);
  li.addEventListener("click" ,managimg);
});
function removeActive(){
  proj.forEach((li)=>{
    li.classList.remove("active");
    this.classList.add("active");
  });
}
function managimg(){
  imgs.forEach((el)=>{
    el.style.display ="none";
  });
  console.log(document.querySelectorAll(this.dataset.cat))
  document.querySelectorAll(this.dataset.cat).forEach((el)=>{
    el.style.display="block";
  })
}
// end my project



// test
  new Swiper('.swiper', {
    speed: 3000,
    loop: true,
    autoplay: {
      delay: 500,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });
  // end test

