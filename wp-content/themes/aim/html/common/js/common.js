$(document).ready(function () {
  // common
  positionHeader();
  stickyHeader();
  $(window).resize(function () {
    positionHeader();
  });
  CountdownDate();


  $(".nav-icon").click(function () {
    $(this).toggleClass("open");
    $(".header").toggleClass("open");
    $("body").toggleClass("body--noScroll");
  });

  $(".js-lang-sp a").click(function (e) {
    e.preventDefault();
    $(".js-lang-sp a").toggleClass("active");
  });

  if (!$(".kv").length) {
    $("body").addClass("body--withoutKV");
  }

  $(".js-nav-content").hover(function () {
    $(".nav__content").addClass("active");
    var target = "#" + $(this).data("target");
    $(".nav__content-list").hide();
    $(target).show();
  });
  $(".nav__link").hover(function () {
    $(".nav__content").removeClass("active");
  });

  $(".form-input,.form-area").on("keyup", function () {
    if (this.value.length > 0) {
      $(this).next(".form-placeholder").hide();
    } else {
      $(this).next(".form-placeholder").show();
    }
  });
  $(".form-select").on("change", function () {
    if (this.value.length > 0) {
      $(this).next(".form-placeholder").hide();
    } else {
      $(this).next(".form-placeholder").show();
    }
  });

  $('input[type="file"]').change(function (e) {
    var filename = e.target.files[0].name;
    $(this).next(".form-input").text(filename);
    if (filename.length > 0) {
      $(this).siblings(".form-placeholder").hide();
    } else {
      $(this).siblings(".form-placeholder").show();
    }
  });

  $('.js-heading-course').click(function(){
    $(this).toggleClass('active')
    $(this).next('table').toggleClass('active')
  })

  $('.hom-detail input').click(function(){
    $(this).prev('h3').toggleClass('active')
  })

  // page home
  homeCompetitionSwiper;
  homeBlogSwiper;
  homeEventSwiper;
  animateCount();

  // page gallery
  galleryKVSwiper;

  // page event
  eventKVSwiper;

  // page for-bussiness
  businessSwiper;

  //page course
  course_anchor_link();

  $(document).on("show.bs.modal", function (event) {
    if ($(".modal:visible").length) {
      $("body").addClass("modal-open");
    }
    if($('.js-multiple-select').length){
      $('.js-multiple-select .label').text('');
      $(".js-multiple-select .form-placeholder").show()
    }
  });

  // page discount-policy
  discountPolicySwiper;

  //page term
  if ($(".js-tab").length) {
    $(".js-tab-link").click(function (e) {
      e.preventDefault();
      var target = $(this).data("target");
      $(".js-tab-link").removeClass("active");
      $(this).addClass("active");
      $(".js-tab-content").fadeOut();
      $(target).fadeIn();
    });
  }

  //page blog
  if($('.blog__detail-body').length){
    $("iframe").wrap("<div class='iframe-wrap'/>");
  }

   //page hom
   if ($(".hom-tab__list").length) {
    $(".js-hom-tab").click(function (e) {
      e.preventDefault();
      var target = $(this).data("target");
      $(".js-hom-tab").removeClass("active");
      $(this).addClass("active");
      $(".hom-detail").hide();
      $(target).show();
    });

    $(".js-hom-content").click(function (e) {
      e.preventDefault();
      var target = $(this).data("target");
      $(".js-hom-content").removeClass("active");
      $(this).addClass("active");
      $(".hom-content__article").hide();
      $(target).show();
    });

    $(".js-hom-content-sp").click(function (e) {
      e.preventDefault();
      $(this).parent('.hom-content__article').toggleClass('active');
    });
  }

  $('.career-orientation__modal-item').click(function(){
    $(this).toggleClass('active')
  });

  $('.js-multiple-select').each(function() {
    
    $(this).click(function(){
      $(this).find('.form-multiple-select').show();
    });
    $('input').click(function(){
      if($(this).is(':checked')){
        $(this).parent('label').addClass('active');
      }else{
        $(this).parent('label').removeClass('active')
      }
    })
    $(document).mouseup(function(e) {
      var container = $(".js-multiple-select .form-multiple-select");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        container.hide();
        var arr_select = '';
        $('.form-multiple-select label.active').each(function(){
          arr_select += $(this).text() +', ';
        })
        $('.js-multiple-select .label').text(arr_select);
        if($('.js-multiple-select .label').text()!==''){
          $(".js-multiple-select .form-placeholder").hide()
        }
      }
    });
  })
 
});
var homeCompetitionSwiper = new Swiper(".home-competition__swiper", {
  loop: true,
  speed: 500,
  autoplay: {
    delay: 3000,
  },
  pagination: {
    el: ".home-competition__swiper .swiper-pagination",
    clickable: true,
  },
  grabCursor: 0,
  centeredSlides: true,
  slidesPerView: "1",
  effect: "coverflow",
  coverflowEffect: {
    rotate: 0,
    depth: 300,
    modifier: 1,
    slideShadows: false,
  },
  breakpoints: {
    1001: {
      slidesPerView: "3",
      pagination: false,
    },
  },
});

var homeBlogSwiper = new Swiper(".home-blog__swiper .swiper-container", {
  loop: true,
  speed: 500,
  autoplay: {
    delay: 3000,
  },
  pagination: {
    el: ".home-blog__swiper .swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".home-blog__swiper .swiper-button-next",
    prevEl: ".home-blog__swiper .swiper-button-prev",
  },
  grabCursor: 0,
  slidesPerView: "1",
  coverflowEffect: {
    rotate: 0,
    depth: 200,
    modifier: 1,
    slideShadows: false,
  },
  breakpoints: {
    1001: {
      slidesPerView: "3",
      pagination: false,
    },
  },
});

var homeEventSwiper = new Swiper(".home-event__swiper .swiper-container", {
  loop: true,
  speed: 500,
  autoplay: {
    delay: 3000,
  },
  navigation: {
    nextEl: ".home-event__swiper .swiper-button-next",
    prevEl: ".home-event__swiper .swiper-button-prev",
  },
  grabCursor: 0,
  slidesPerView: "1",
});

var galleryKVSwiper = new Swiper(".gallery__swiper", {
  loop: true,
  speed: 500,
  autoplay: {
    delay: 3000,
  },
  grabCursor: 0,
  slidesPerView: "1",
  pagination: {
    el: ".gallery__swiper .swiper-pagination",
    clickable: true,
  },
});

var eventKVSwiper = new Swiper(".event__swiper", {
  loop: true,
  speed: 500,
  autoplay: {
    delay: 3000,
  },
  grabCursor: 0,
  slidesPerView: "1",
  pagination: {
    el: ".event__swiper .swiper-pagination",
    clickable: true,
  },
});

var businessSwiper = new Swiper(".for-business__swiper", {
  speed: 500,
  grabCursor: 0,
  slidesPerColumn: 3,
  slidesPerGroup: 3,
  slidesPerView: 3,
  slidesPerColumnFill: "row",
  pagination: {
    el: ".for-business__swiper .swiper-pagination",
    clickable: true,
  },
});

function animateCount() {
  $(".js-counter").each(function () {
    var $this = $(this),
      countTo = $this.attr("data-count");

    $({ countNum: $this.text() }).animate(
      {
        countNum: countTo,
      },
      {
        duration: 2000,
        easing: "linear",
        step: function () {
          $this.text(Math.floor(this.countNum));
        },
        complete: function () {
          $this.text(this.countNum + "+");
        },
      }
    );
  });
}

function positionHeader() {
  var promoHeight = $(".promotion").outerHeight();
  $(".header").css("top", promoHeight);
}

function stickyHeader() {
  var promoHeight = $(".promotion").outerHeight();
  var kvHeight = $(".kv").outerHeight();
  var headerHeight = $(".header").outerHeight();

  if (kvHeight > 0) {
    $(".header").removeClass("header--active");
  }
  $(window).on("scroll", function () {
    var y_scroll_pos = window.pageYOffset;

    if (y_scroll_pos > promoHeight) {
      $(".header").addClass("header--sticky");
    } else {
      $(".header").removeClass("header--sticky");
    }
    if (kvHeight > 0) {
      if (y_scroll_pos > promoHeight + kvHeight - headerHeight) {
        $(".header").addClass("header--active");
        $("body").addClass("body--withoutKV");
      } else {
        $(".header").removeClass("header--active");
        $("body").removeClass("body--withoutKV");
      }
    }
  });
}

var testimonialThumbs = new Swiper(".testimonial-thumbs", {
  slidesPerView: 1,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
  breakpoints: {
    // when window width is >= 999px
    999: {
      slidesPerView: 3,
    },
  },
});

var testimonialTop = new Swiper(".testimonial-top", {
  thumbs: {
    swiper: testimonialThumbs,
  },
  navigation: {
    nextEl: ".testimonial .swiper-button-next",
    prevEl: ".testimonial .swiper-button-prev",
  },
});

function course_anchor_link() {
  $(".js-course-cat").click(function () {
    var target = $(this).attr("href");
    var pos = $("header").outerHeight();
    $("html, body").animate(
      {
        scrollTop: $(target).offset().top - pos - 20,
      },
      500
    );
  });
}

var competitionAwardSwiper = new Swiper(".competition-award__grid", {
  speed: 500,
  pagination: {
    el: ".competition-award__grid .swiper-pagination",
    clickable: true,
  },
  loop: true,
  autoplay: {
    delay: 3000,
  },
  slidesPerView: "1",
});

var competitionAwardGallerySwiper = new Swiper(".competition-award__gallery", {
  speed: 500,
  pagination: {
    el: ".competition-award__gallery .swiper-pagination",
    clickable: true,
  },
  loop: true,
  autoplay: {
    delay: 3000,
  },
  slidesPerView: "1",
});

var discountPolicySwiper = new Swiper(".discount-policy__recommend .swiper-container",{
  speed: 500,
  pagination: {
    el: ".discount-policy__recommend .swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".discount-policy__recommend .swiper-button-next",
    prevEl: ".discount-policy__recommend .swiper-button-prev",
  },
  grabCursor: 0,
  slidesPerView: "1",
  breakpoints: {
    0: {
      slidesPerColumn: 5,
      slidesPerGroup: 1,
      slidesPerView: 1,
      slidesPerColumnFill: "row",
    },
    1001: {
      slidesPerView: "5",
      pagination: false,
      loop: true,
      autoplay: {
        delay: 3000,
      },
    },
  },
});

function CountdownDate(){
  var date = document.getElementById("timer").getAttribute('data-countdown');
  var countDownDate = new Date(date).getTime();
  var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("countdown").innerHTML = days + " ngày " + hours + " giờ " + minutes + " phút " + seconds + " giây ";
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("countdown").innerHTML = "EXPIRED";
    }
  }, 1000);
}