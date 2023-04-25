(function ($) {
  window.onload = function () {
    $(document).ready(function () {
      menuMobile();
      backToTop();
      showSearch();
      showContentFooter();
      customFilterBox();
      customFeedBack();
      stuckHeader();
    });
  };
})(jQuery);
new WOW().init();
function menuMobile() {
  if (
    $(".bar__mb").length ||
    $(".menu-mobile").length ||
    $(".overlay").length
  ) {
    $(".bar__mb").click(function () {
      $(".overlay").addClass("overlay-active");
      $(".menu-mobile").addClass("menu-mobile-active");
    });
    $(".overlay").click(function () {
      $(".overlay").removeClass("overlay-active");
      $(".menu-mobile").removeClass("menu-mobile-active");
      $(".box-search_header").removeClass("active");
    });
    $(".menu-mobile-close").click(function () {
      $(".overlay").removeClass("overlay-active");
      $(".menu-mobile").removeClass("menu-mobile-active");
    });
  }

  $(".menu-mobile ul li.menu-item-has-children>ul").before(
    `<span class="li-plus"></span>`
  );
  $(
    ".menu-mobile ul li.current-menu-parent.menu-item-has-children .li-plus"
  ).addClass("clicked");

  if ($(".li-plus").length) {
    $(".li-plus").click(function (e) {
      if ($(this).hasClass("clicked")) {
        $(this).removeClass("clicked").next("ul").slideUp(500);
      } else if ($(this).not(".clicked")) {
        $(".menu-mobile ul li > ul").slideUp(500);
        $(".li-plus").removeClass("clicked");
        $(this).addClass("clicked").next("ul").slideDown(500);
      } else if ($(this).parents().siblings("a").hasClass("clicked")) {
        $(".clicked").slideDown();
        $(".menu-mobile ul li > ul").slideUp(500);

        $(this).addClass("clicked").next("ul").slideDown(500);
      } else {
        $("#nav li a").removeClass("clicked").next("ul").slideUp(500);

        $(this).addClass("clicked").next("ul").slideDown(500);
      }
    });
  }
}

function backToTop() {
  var $backToTop = $(".back-to-top");
  $backToTop.hide();

  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 200) {
      $backToTop.fadeIn();
    } else {
      $backToTop.fadeOut();
    }
  });

  $backToTop.on("click", function (e) {
    $("html, body").animate({ scrollTop: 0 }, 50);
  });
}

function showSearch() {
  if ($(".search-icon").length && $(window).width() > 991) {
    $(".search-icon").click(function () {
      $(".box-search").toggleClass("active");
    });
  }
}

function showContentFooter() {
  if ($(".footer-title").length && $(window).width() < 991) {
    $(".footer-title").click(function () {
      $(this).next().slideToggle();
      $(this).toggleClass("active");
      $(this)
        .parent()
        .parent()
        .siblings()
        .find(".footer-title")
        .removeClass("active")
        .next()
        .slideUp();
    });
  }

  if ($(".footer-language").length || $(".footer-currency").length) {
    $(".current-item").click(function (e) {
      e.stopPropagation();
      $(this).toggleClass("active").next(".list-item").toggleClass("active");
      $(this)
        .parent()
        .siblings()
        .find(".current-item")
        .removeClass("active")
        .next(".list-item")
        .removeClass("active");
    });
  }

  $(document).on("click", function (e) {
    if ($(e.target).is(".footer__bottom .list-item") === false) {
      $(".footer__bottom .list-item,.current-item").removeClass("active");
    }
  });
}

function stuckHeader() {
  var header__bottom = document.querySelector(".header__main");

  if (header__bottom == null) {
    return 0;
  } else {
    window.addEventListener("scroll", function () {
      if (window.pageYOffset > 100) {
        header__bottom.classList.add("header-active");
      } else {
        header__bottom.classList.remove("header-active");
      }
    });
  }
}

$(function () {
  function getCounterData(obj) {
    var hours = parseInt($(".hours", obj).text());
    var minutes = parseInt($(".minutes", obj).text());
    var seconds = parseInt($(".seconds", obj).text());
    return seconds + minutes * 60 + hours * 3600;
  }

  function setCounterData(s, obj) {
    var hours = Math.floor((s % (60 * 60 * 24)) / 3600);
    var minutes = Math.floor((s % (60 * 60)) / 60);
    var seconds = Math.floor(s % 60);

    $(".hours", obj).html(hours);
    $(".minutes", obj).html(minutes);
    $(".seconds", obj).html(seconds);
    if (hours < 10) {
      $(".hours", obj).html("0" + hours);
    }
    if (minutes < 10) {
      $(".minutes", obj).html("0" + minutes);
    }
    if (seconds < 10) {
      $(".seconds", obj).html("0" + seconds);
    }
  }

  var count = getCounterData($(".box-count-down"));

  var timer = setInterval(function () {
    count--;
    if (count == 0) {
      clearInterval(timer);
      return;
    }
    setCounterData(count, $(".box-count-down"));
  }, 1000);
});

function storePage() {
  if ($(window).width() < 767) {
    let bannerContent = $(".banner__store .inner");
    $(bannerContent).appendTo(".store__property .container");
  }
  let storePropetyHeight = $(".store__property").outerHeight();
  $(".store__property").css({ marginTop: -(storePropetyHeight / 2) + "px" });
}
storePage();

function changeLayoutStorePage() {
  if (localStorage.getItem("changeLayout") == "5-col") {
    $(".list__product > .row")
      .removeClass("row-cols-lg-4")
      .addClass("row-cols-lg-5");
  }

  $(".toolbar__box-layout .5-col").click(function () {
    localStorage.setItem("changeLayout", "5-col");
    $(".list__product > .row")
      .removeClass("row-cols-lg-4")
      .addClass("row-cols-lg-5");

    $(".toolbar__box-layout li").removeClass("active");
    $(this).addClass("active");
  });
  $(".toolbar__box-layout .4-col").click(function () {
    localStorage.setItem("changeLayout", "4-col");
    $(".list__product > .row")
      .removeClass("row-cols-lg-5")
      .addClass("row-cols-lg-4");
    $(".toolbar__box-layout li").removeClass("active");
    $(this).addClass("active");
  });

  if ($(".list__product > .row").hasClass("row-cols-lg-5")) {
    $(".toolbar__box-layout .5-col").addClass("active");
    $(".toolbar__box-layout .4-col").removeClass("active");
  } else {
    $(".list__product > .row").removeClass("active");
    $(".toolbar__box-layout .4-col").addClass("active");
  }

  $(".toolbar__box-layout li").click(function () {
    $(".loader-wrapper").addClass("active");
    if ($(".loader-wrapper").hasClass("active")) {
      setTimeout(function () {
        $(".loader-wrapper").removeClass("active");
      }, 600);
    }
  });
}
changeLayoutStorePage();

function customFilterBox() {
  $(".box-filter-chosen").on("click", function () {
    $(".box-filter-list").toggleClass("active");
  });
  $(".box-filter-list li").on("click", function () {
    var itemFilter = $(this).data("filter");
    $(".box-filter-chosen ")
      .text($(this).text())
      .attr("data-filter", itemFilter);
    $(".box-filter-list").toggleClass("active");
  });
}

function customFeedBack() {
  if ($(window).width() > 991) {
    $(".feedback__list-main").flickity({
      pageDots: false,
      prevNextButtons: false,
      contain: true,
      cellAlign: "left",
      imagesLoaded: true,
      draggable: true,
      wrapAround: true,
      autoPlay: false,
    });

    $(".feedback__list-nav").flickity({
      asNavFor: ".feedback__list-main",
      contain: true,
      pageDots: false,
      prevNextButtons: false,
    });
  } else {
    $(".feedback__list-right .feedback__list-item").appendTo(
      ".feedback__list-main"
    );
    $(".feedback__list-main").flickity({
      pageDots: false,
      prevNextButtons: false,
      contain: true,
      cellAlign: "center",
      imagesLoaded: true,
      draggable: true,
      wrapAround: true,
      autoPlay: false,
    });
  }

  $(".feedback__list-item a").fancybox({
    caption: function () {
      return $(this).parent().find(".feedback-product").html();
    },
  });
}

function sliderCategoryMb() {
  if ($(window).width()< 992) {
    var totalWidth = $(".list-category-mb").outerWidth()

    $('.list-category-mb ul').css('width', totalWidth);
  
      var myScrollPos = $('.current-menu-item').offset().left + $('.current-menu-item').outerWidth(true) / 2 + $('.list-category-mb ul').scrollLeft() - $('.list-category-mb ul').width() / 2;
  
  
      $('.list-category-mb ul').scrollLeft(myScrollPos);
  }
}
sliderCategoryMb();