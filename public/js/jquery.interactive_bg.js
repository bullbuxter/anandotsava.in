!function($){

  var defaults = {
    strength: 25,
    scale: 1.05,
    animationSpeed: "100ms",
    contain: true,
    wrapContent: false
  };

  $.fn.interactive_bg = function(options){
    return this.each(function(){
      var settings = $.extend({}, defaults, options),
          el = $(this),
          h = el.outerHeight(),
          w = el.outerWidth(),
          sh = settings.strength / h,
          sw = settings.strength / w,
          has_touch = 'ontouchstart' in document.documentElement;

      if (settings.contain == true) {
        el.css({
          overflow: "hidden"
        });
      }
      // Insert new container so that the background can be contained when scaled.

      if (settings.wrapContent == false) {
        el.prepend("<div class='ibg-bg'></div>")
      } else {
        el.wrapInner("<div class='ibg-bg'></div>")
      }



      // Set background to the newly added container.

      if (el.data("ibg-bg") !== undefined) {
        el.find("> .ibg-bg").css({
          background: "url('" + el.data("ibg-bg") + "') no-repeat center center",
          "background-size": "cover",
        });
      }

      el.find("> .ibg-bg").css({
        width: w,
        height: h
      })



      if(has_touch || screen.width <= 699) {
        // For Mobile
        // Add support for accelerometeron mobile
        window.addEventListener('devicemotion', deviceMotionHandler, false);

          function deviceMotionHandler(eventData) {
             var accX = Math.round(event.accelerationIncludingGravity.x*10) / 10,
                 accY = Math.round(event.accelerationIncludingGravity.y*10) / 10,
                 xA = -(accX / 10) * settings.strength,
                 yA = -(accY / 10) * settings.strength,
                 newX = -(xA*2),
                 newY = -(yA*2);

                 el.find("> .ibg-bg").css({
                   "-webkit-transform": "matrix(" + settings.scale + ",0,0," + settings.scale + "," + newX + "," + newY + ")",
                   "-moz-transform": "matrix(" + settings.scale + ",0,0," + settings.scale + "," + newX + "," + newY + ")",
                   "-o-transform": "matrix(" + settings.scale + ",0,0," + settings.scale + "," + newX + "," + newY + ")",
                   "transform": "matrix(" + settings.scale + ",0,0," + settings.scale + "," + newX + "," + newY + ")"
                 });

          }

      } else {
        // For Desktop
        el.mousemove(function(e){
          // This condition prevents transition from causing the movement of the background to lag
          if (!el.hasClass("ibg-entering") && !el.hasClass("exiting")) {
            var pageX = e.pageX || e.clientX,
                pageY = e.pageY || e.clientY,
                pageX = (pageX - el.offset().left) - (w / 2),
                pageY = (pageY - el.offset().top) - (h / 2),
                newX = ((sw * pageX)) * 1.2,
                newY = ((sh * pageY)) * 1.2,
                anoX = ((sw * pageX) * -0.4),
                anoY = ((sh * pageY) * -0);
            // Use matrix to move the background from its origin
            // Also, disable transition to prevent lag
            el.find("> .ibg-bg").css({
              "-webkit-transform": "matrix(" + settings.scale + ",0,0," + settings.scale + "," + newX + "," + newY + ")",
              "-moz-transform": "matrix(" + settings.scale + ",0,0," + settings.scale + "," + newX + "," + newY + ")",
              "-o-transform": "matrix(" + settings.scale + ",0,0," + settings.scale + "," + newX + "," + newY + ")",
              "transform": "matrix(" + settings.scale + ",0,0," + settings.scale + "," + newX + "," + newY + ")",
              "-webkit-transition": "50ms ease-in",
              "-moz-transition": "50ms ease-in",
              "-o-transition": "50ms ease-in",
              "transition": "50ms ease-in"
            });
            $('#foreground').css({
              "-webkit-transform": "matrix(1,0,0,1," + anoX + "," + anoY + ")",
              "-moz-transform": "matrix(1,0,0,1," + anoX + "," + anoY + ")",
              "-o-transform": "matrix(1,0,0,1," + anoX + "," + anoY + ")",
              "transform": "matrix(1,0,0,1," + anoX + "," + anoY + ")",
              "-webkit-transition": "50ms ease-in",
              "-moz-transition": "50ms ease-in",
              "-o-transition": "50ms ease-in",
              "transition": "50ms ease-in"
            });
          }
        });
      }
    });

  }


}(window.jQuery);
