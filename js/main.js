
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


//swiper

// 배너 스와이퍼
var bannerSwiper = new Swiper(".bannerSwiper", {
  // autoplay: {
  //   delay: 2000,
  // },
  // 	loop:true,
  // 	loopedSlides: 1,
  autoplay: {
    delay: 3500,
  },
  loop: true,
  loopedSlides: 1,
  effect: "fade",
  scrollbar: {
    el: ".swiper-scrollbar",
    hide: true,
  }//,
  //autoplay: true,
  //loop: true,   // 슬라이드 반복 여부
});

var bookSwiper = new Swiper(".bookSwiper", {
  autoplay: {
    delay: 2500,
  },
  slidesPerView: 1,
  // spaceBetween: 30,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  // pagination: {
  //   el: ".swiper-pagination",
  //   clickable: true,
  // },

  breakpoints: {


    400: {
      slidesPerView: 2  //브라우저가 768보다 클 때
    },
        
    680: {
      slidesPerView: 3  //브라우저가 768보다 클 때
    }
  },
  //   1024: {
  //     slidesPerView: 6,  //브라우저가 1024보다 클 때
  //     spaceBetween: 50,
  //   },
  // },



  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});


















// 탭 제이쿼리

// $(function () {
//   var idx = $(".list a").parent().index();

//   if ($(".content1").eq(idx).css("display") == "block") {
//     $(".list a").addClass("on");
//   } else {
//     $(".list a").parent("li").siblings("li").children("a").removeClass("on");
//   }

// });






$(".list1 a").addClass("on");



$(document).ready(function () {

  $(".list a").click(function () {
    var idx = $(this).parent().index();

    $(".content1").eq(idx).show();
    $(".content1").not($(".content1").eq(idx)).hide();

    // if ($(".content1").eq(idx).css("display") == "block") {
    //   $(this).addClass("on");
    // } else {
    //   $(this).parent("li").siblings("li").children("a").removeClass("on");
    // }


    if ($(".content_tab1").css("display") == "block") {
      $(".list1 a").addClass("on");
      $(".list1 a").parent("li").siblings("li").children("a").removeClass("on");
    } else if ($(".content_tab2").css("display") == "block") {
      $(".list2 a").addClass("on");
      $(".list2 a").parent("li").siblings("li").children("a").removeClass("on");
    } else if ($(".content_tab3").css("display") == "block") {
      $(".list3 a").addClass("on");
      $(".list3 a").parent("li").siblings("li").children("a").removeClass("on");
    }
  });
});





// $(function () {
//   $(".list a").click(function () {
//     $(this).addClass("on");
//     $(this).parent("li").siblings("li").children("a").removeClass("on");
//   });
// });






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



let Top = document.querySelector('#top');

window.addEventListener('scroll', function () {
  if (this.scrollY > 200) {
    Top.classList.add('on');
  } else {
    Top.classList.remove('on');
  }
})

Top.addEventListener('click', function (e) {
  e.preventDefault();
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
})



// 스크롤 동작

const spyEls = document.querySelectorAll('section.scroll-spy');
spyEls.forEach(function (spyEl) {
  new ScrollMagic
    .Scene({
      triggerElement: spyEl,
      triggerHook: .8
    })
    .setClassToggle(spyEl, 'show')
    .addTo(new ScrollMagic.Controller());
});
