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
      showContentProductDetail();
      showProductSticky();
      showMiniCart();
      checkoutPage();
      sidebarPromotion();
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
      $(".mini__cart").removeClass("active");
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
  if ($(".box-filter-chosen").length) {
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
}

function customFeedBack() {
  if ($(window).width() > 991 && $(".feedback__list-main").length) {
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
  if ($(window).width() < 992 && $(".list-category-mb").length) {
    var totalWidth = $(".list-category-mb").outerWidth();

    $(".list-category-mb ul").css("width", totalWidth);

    var myScrollPos =
      $(".current-menu-item").offset().left +
      $(".current-menu-item").outerWidth(true) / 2 +
      $(".list-category-mb ul").scrollLeft() -
      $(".list-category-mb ul").width() / 2;

    $(".list-category-mb ul").scrollLeft(myScrollPos);
  }
}
sliderCategoryMb();

// Change input quantity
function changeQuantityInput() {
  jQuery(".quantity").each(function () {
    var spinner = jQuery(this),
      input = spinner.find('input[type="number"]'),
      btnUp = spinner.find(".plus"),
      btnDown = spinner.find(".minus"),
      min = input.attr("min"),
      max = input.attr("max");

    btnUp.click(function () {
      var oldValue = parseFloat(input.val());
      if (oldValue >= 100) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue + 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

    btnDown.click(function () {
      var oldValue = parseFloat(input.val());
      if (oldValue <= min) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue - 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });
  });
}
changeQuantityInput();

function showContentProductDetail() {
  if ($(".product__description .main-desc").length) {
    $(".view-more").click(function () {
      $(this).prev(".main-desc").slideToggle();
      $(this).toggleClass("active");
    });
  }
}

function showProductSticky() {
  $(window).on("scroll", function () {
    var scrollHeight = $(document).height();
    var scrollPosition = $(window).height() + $(window).scrollTop();
    if (
      $(this).scrollTop() < 200 ||
      (scrollHeight - scrollPosition) / scrollHeight === 0
    ) {
      $(".product__sticky").fadeOut();
    } else {
      $(".product__sticky").fadeIn();
    }
  });
}
$(document).ready(function () {
  $(".mini__cart,.menu-mobile").show();
});
function showMiniCart() {
  $(".cart-icon").click(function () {
    $(".mini__cart").addClass("active");
    $(".overlay").addClass("overlay-active");
  });

  $(".close-cart-btn").click(function () {
    $(".mini__cart").removeClass("active");
    $(".overlay").removeClass("overlay-active");
  });
}

function checkoutPage() {
  if ($(".checkout__payment .form-group input").length) {
    $(".checkout__payment .form-group input").click(function () {
      if ($(this).is(":checked")) {
        $(".checkout__payment .form-group").removeClass("active");
        $(this).parents(".form-group").addClass("active");
      }
    });
  }
}

function centerMenuPromotion() {
  var myScrollPos =
  $(".promotion__menu-inner ul a.active").offset().left +
  $(".promotion__menu-inner ul a.active").outerWidth(true) / 2 +
  $(".promotion__menu-inner ul").scrollLeft() -
  $(".promotion__menu-inner ul").width() / 2;
  $(".promotion__menu-inner ul").animate({scrollLeft: myScrollPos}, 200);
}
function sidebarPromotion() {
  if ($(".promotion__menu").length) {
    $(".promotion__menu ul li a").click(function (e) {
      var id = $(this).attr("href");
      $(".promotion__menu ul li a").removeClass("active");
      $(this).addClass("active");
      var $id = $(id);
      $(".promotion__content-item").removeClass("active");
      $id.addClass("active");
      $(".promotion__content-item").find(".desc").hide();
      $id.find(".desc").show();
      if ($id.length === 0) {
        return;
      }

      e.preventDefault();

      var pos = $id.offset().top - 100;

      $("body, html").animate({ scrollTop: pos }, 50);
      if ($(window).width() < 991) {
        centerMenuPromotion();
      }
    });
    $(".promotion__menu ul li:first-child a").trigger("click");
    $(".promotion__content-item").click(function () {
      var idPromo = $(this).attr("id");
      $(".promotion__menu ul li a").removeClass("active");
      $(".promotion__menu ul li a").each(function (index, elm) {
        var linkSidebar = $(elm).attr("href").slice(1);

        if (linkSidebar === idPromo) {
          $(this).addClass("active");
        }
      });

      $(".promotion__content-item").removeClass("active");
      $(this).addClass("active");
      $(".promotion__content-item").find(".desc").hide();
      $(this).find(".desc").show();

      if ($(window).width() < 991) {
        centerMenuPromotion();
      }
    });

    // sidebar on mobile
    if ($(window).width() < 991) {
      $(".header__main").addClass("remove-sticky");
      var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
        var stickyHeight = sticky.outerHeight();
        var stickyTop = stickyWrapper.offset().top;
        if (scrollElement.scrollTop() >= stickyTop) {
          stickyWrapper.height(stickyHeight);
          sticky.addClass("is-sticky");
        } else {
          sticky.removeClass("is-sticky");
          stickyWrapper.height("auto");
        }
      };
      $(".promotion__menu-inner ul").each(function () {
        var sticky = $(this);
        var stickyWrapper = $("<div>").addClass("sticky-wrapper");
        // insert hidden element to maintain actual top offset on page
        sticky.before(stickyWrapper);
        sticky.addClass("sticky");
        // Scroll & resize events
        $(window).on(
          "scroll.sticky-onscroll resize.sticky-onscroll",
          function () {
            stickyToggle(sticky, stickyWrapper, $(this));
          }
        );
        // On page load
        stickyToggle(sticky, stickyWrapper, $(window));
      });
    }

  }
}

function customSliderFashion() {
  if ($(window).width() > 767 && $('.article__fashion').length) {
    var $slider2 = $( '.article__fashion .article__list').flickity({  
      pageDots: true,
      prevNextButtons: false,
      wrapAround: true,
      cellAlign:'left'
    });
      
        // Instance
        var $slider2Data = new Flickity( '.article__fashion .article__list' );
        var $slider2Navigation = document.querySelector('.article__fashion .article__list');
        // Elements
        var $dotGroup = $('.article__fashion .flickity-page-dots');
        var $dotSelected = $dotGroup.find('.dot');
      
        // Previous
        $('.slider-prev').on( 'click', function() {
          var $this = $( this );
          var $slider2Data = $slider2.data('.article__fashion .article__list'); 
          $slider2.flickity('previous');
        });     
      
        // Next
        $('.slider-next').on( 'click', function() {
          var $this = $( this );
          var $slider2Data = $slider2.data('.article__fashion .article__list'); 
          $slider2.flickity('next');
        });
     
        // Update selected dots
        $slider2.on( 'select.flickity', function() {
          $dotSelected.filter('.is-selected')
            .removeClass('.is-selected');
          $dotSelected.eq( $slider2Data.selectedIndex )
            .addClass('.is-selected');       
          
        });
      
       // Select cell on button click
       $dotGroup.on( 'click', '.dot', function() {
         var index = $(this).index();
         $slider2.data( 'select', index );
       });
        if ($(".flickity-enabled").hasClass("article__list")) {
            $(".article__fashion .article__list .flickity-page-dots").addClass("buttons-enabled");
            $(".flickity-page-dots.buttons-enabled").prepend(
    
              '<li class="prev-wrapper">'
              +'<span class="slider-prev"></span>' +
              '</li>'
            );
    
            $(".flickity-page-dots.buttons-enabled").append(
    
                '<li class="next-wrapper">' +
                '<span class="slider-next"></span>' +
                '</li>'     
            );
    
          // Previous
          $('.slider-prev').on( 'click', function() {
            var $this = $( this );
            var $slider2Data = $slider2.data('.article__fashion .article__list'); 
            $slider2.flickity('previous');
          });     
    
          // Next
          $('.slider-next').on( 'click', function() {
            var $this = $( this );
            var $slider2Data = $slider2.data('.article__fashion .article__list'); 
            $slider2.flickity('next');
          });
        }
  }
}

customSliderFashion();

function arrangeLayoutPostDetail() {
  if ($(window).width() < 991 && $('.post__content').length) {
    let tocContainer = $(".table-of-content"); 
    $('.post__heading').before(tocContainer);
    tocContainer.wrapAll('<div class="container"></div>')
    let newsletterContainer = $(".join-newsletter");
    $('.post__content-desc').after(newsletterContainer);
    let relatedPost = $('.related__post');
    newsletterContainer.after(relatedPost);
    let sidebarTag = $('.sidebar-tags');
    relatedPost.after(sidebarTag);
  }
}
arrangeLayoutPostDetail();

function showContentFAQ() {
  $('.contact__faq-item').click(function () {
    $(this).toggleClass('active');
    $(this).find('.desc').slideToggle();
    $(this).siblings().removeClass('active').find('.desc').slideUp();
  })
  $('.contact__faq-item:first-child').trigger('click')
}
showContentFAQ();