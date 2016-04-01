jQuery(document).ready(function($) {

  function init() {
    $('.btn-link').on('click', smoothScroll)
    $('.header-link').on('click', smoothScroll)
    servicesShowHide()
    $(window).scroll(function(event) {
      changeHeaderStyles()
    })
  }

  function smoothScroll(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $(this.hash).offset().top
    }, 500)
    return false;
  }

  function servicesShowHide() {
    var $box1 = $('#camp-mgmt-box')
    var $box2 = $('#brand-dev-box')
    var $box3 = $('#strat-part-box')

    var $services = $('#services')
    var $brandDev = $('#brand-dev')
    var $stratPart = $('#strat-part')

    $box1.on('click', function(){
      $(this).addClass('active')
      $box2.removeClass('active')
      $box3.removeClass('active')
      $services.css('display', 'block')
      $brandDev.css('display', 'none')
      $stratPart.css('display', 'none')
    })
    $box2.on('click', function(){
      $(this).addClass('active')
      $box1.removeClass('active')
      $box3.removeClass('active')
      $services.css('display', 'none')
      $brandDev.css('display', 'block')
      $stratPart.css('display', 'none')
    })
    $box3.on('click', function(){
      $(this).addClass('active')
      $box1.removeClass('active')
      $box2.removeClass('active')
      $services.css('display', 'none')
      $brandDev.css('display', 'none')
      $stratPart.css('display', 'block')
    })
  }

  function changeHeaderStyles() {
    var _$window = $(window)
    var y = _$window.scrollTop()
    var $navBar = $('#site-nav')
    var headerHeight = $('.navbar-default').height()
    var $navLink = $('.navbar-default .navbar-nav>li>a.header-link')
    var $blueLogo = $('.logo-blue')
    var $whiteLogo = $('.logo-white')
    if ($(window).width() > 768) {
      if (y > headerHeight) {
        $navBar.removeClass('navbar-transparent')
        $navLink.css('color', '#0075c8')
        $blueLogo.css('display', 'block')
        $whiteLogo.css('display', 'none')
      } if (y < headerHeight) {
        $navBar.addClass('navbar-transparent')
        $navLink.css('color', '#ffffff')
        $blueLogo.css('display', 'none')
        $whiteLogo.css('display', 'block')
      }
    }
  }

  init()
});
