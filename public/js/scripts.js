$(function() {
  var map;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -34.397, lng: 150.644},
      zoom: 8
    });
  }
});
$('#time li[data-toggle="tooltip"]').tooltip({placement: "bottom", animation: true});
$('#scrollNav [data-toggle="tooltip"], #regWrapper a[data-toggle="tooltip"]').tooltip({placement: "right", animation: true});

var isNavOpen = false;
var nav = $('#toggleNav');
nav.bind('click', function() {
  if(isNavOpen) {
    $('#myNavbar').animate({opacity: "hide", left: -250}, "slow")
    nav.removeClass('fa-arrow-left');
    nav.addClass('fa-bars');
    $('#main').removeClass("bgBlur");

    isNavOpen = false;
  } else {
    $('#myNavbar').animate({opacity: "show", left: 0}, "slow")
    nav.removeClass('fa-bars');
    nav.addClass('fa-arrow-left');
    $('#main').addClass("bgBlur");

    isNavOpen = true;
  }
});
$('#main').bind('click', function() {
  if(isNavOpen)
    nav.trigger("click");
});
var isSideOpen = true;
$('#toggleSidebar').bind('click', function() {
  if(isSideOpen) {
    $("#sidebar").animate({opacity: "hide", left: -250}, "slow")
    $('#toggleSidebar').removeClass('fa-arrow-left');
    $('#toggleSidebar').addClass('fa-sliders');
    $('#EventsWrapper').removeClass('adjust');
    isSideOpen = false;
  } else {
    $("#sidebar").animate({opacity: "show", left: 0}, "slow")
    $('#toggleSidebar').removeClass('fa-sliders');
    $('#toggleSidebar').addClass('fa-arrow-left');
    $('#EventsWrapper').addClass('adjust');
    isSideOpen = true;
  }
});

(function() {
  (function($) {
    'use strict';
    $.fn.paperCollapse = function(options) {
      var settings;
      settings = $.extend({}, $.fn.paperCollapse.defaults, options);
      $(this).click(function() {
        if ($(this).hasClass('active')) {
          settings.onHide.call(this);
          $(this).removeClass('active');
          $(this).find('.body').slideUp(settings.animationDuration, settings.onHideComplete);
        } else {
          settings.onShow.call(this);
          $(this).addClass('active');
          $(this).find('.body').slideDown(settings.animationDuration, settings.onShowComplete);
        }
      });
      return this;
    };
    $.fn.paperCollapse.defaults = {
      animationDuration: 400,
      easing: 'swing',
      onShow: function() {},
      onHide: function() {},
      onShowComplete: function() {},
      onHideComplete: function() {}
    };
  })(jQuery);

  (function($) {
    $(function() {
      $('.collapse-card').paperCollapse({});
    });
  })(jQuery);

}).call(this);
$('#section3 a').each(function() {
  $(this).addClass('hvr-grow-rotate');
});
