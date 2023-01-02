$(document).ready(function () {
  $(".main_menu, .nav_bg").mouseenter(function () {
    $(".main_menu ul, .nav_bg").stop().slideDown("fast");
  });
  $(".main_menu, .nav_bg").mouseleave(function () {
    $(".main_menu ul, .nav_bg").stop().slideUp("fast");
  });
});


const life_sub = document.getElementById("life_sub");
const mag_sub = document.getElementById("mag_sub");
const free_sub = document.getElementById("free_sub");
const cs_sub = document.getElementById("cs_sub");

const life = document.getElementById("life");
const mag = document.getElementById("mag");
const free = document.getElementById("free");
const cs = document.getElementById("cs");



life_sub.addEventListener("mouseenter", function () {
  life.classList.add("nav_color");
})
mag_sub.addEventListener("mouseenter", function () {
  mag.classList.add("nav_color");
})
free_sub.addEventListener("mouseenter", function () {
  free.classList.add("nav_color");
})
cs_sub.addEventListener("mouseenter", function () {
  cs.classList.add("nav_color");
})

life_sub.addEventListener("mouseleave", function () {
  life.classList.remove("nav_color");
})
mag_sub.addEventListener("mouseleave", function () {
  mag.classList.remove("nav_color");
})
free_sub.addEventListener("mouseleave", function () {
  free.classList.remove("nav_color");
})
cs_sub.addEventListener("mouseleave", function () {
  cs.classList.remove("nav_color");
})


// gnb2 탭 메뉴
$(document).ready(function () {

  $(".menu_icon").click(function () {
    $(".m_menu_box").toggleClass("active");
  })
});

// gnb2 탭메뉴 아코디언
// $(function(){
//   $(".m_main_menu > li").click(function(){
//   $(this).children("ul").stop().slideToggle(300);
//   $(this).parent("li").siblings("li").children("p").slideUp(300);
//   });
// });

$(function () {
  $(".m_main_menu > li").click(function () {
    $(this).children("ul").stop().slideToggle(300);
    $(this).siblings("li").children("ul").slideUp(300);
  });
});



