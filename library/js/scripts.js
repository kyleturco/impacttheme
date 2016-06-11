jQuery(document).ready(function($) {

  var $window = $(window)
  var $btnLink = $('.btn-link')
  var $headerLink = $('.header-link')

  var $box1 = $('#camp-mgmt-box')
  var $box2 = $('#brand-dev-box')
  var $box3 = $('#strat-part-box')

  var $services = $('#services')
  var $brandDev = $('#brand-dev')
  var $stratPart = $('#strat-part')

  function init() {
    $btnLink.on('click', smoothScroll)
    $headerLink.on('click', smoothScroll)
    $window.scroll(function(event) {
      changeHeaderStyles()
    })
    $box1.on('click', function(){
      addActiveClass($box1)
      removeActiveClass($box2, $box3)
      displayBlock($services)
      displayNone($brandDev, $stratPart)
    })
    $box2.on('click', function(){
      addActiveClass($box2)
      removeActiveClass($box1, $box3)
      displayBlock($brandDev)
      displayNone($services, $stratPart)
    })
    $box3.on('click', function(){
      addActiveClass($box3)
      removeActiveClass($box1, $box2)
      displayBlock($stratPart)
      displayNone($services, $brandDev)
    })
  }

  function smoothScroll(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $(this.hash).offset().top
    }, 500)
    return false;
  }

  function displayBlock($element) {
    $element.css('display', 'block')
  }

  function displayNone($elementOne, $elementTwo) {
    $elementOne.css('display', 'none')
    $elementTwo.css('display', 'none')
  }

  function addActiveClass($element) {
    $element.addClass('active')
  }

  function removeActiveClass($elementOne, $elementTwo) {
    $elementOne.removeClass('active')
    $elementTwo.removeClass('active')
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
