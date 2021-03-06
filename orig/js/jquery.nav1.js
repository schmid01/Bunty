/*
 * jQuery One Page Nav Plugin
 * http://github.com/davist11/jQuery-One-Page-Nav
 *
 * Copyright (c) 2010 Trevor Davis (http://trevordavis.net)
 * Dual licensed under the MIT and GPL licenses.
 * Uses the same license as jQuery, see:
 * http://jquery.org/license
 *
 * @version 0.6
 *
 * Example usage:
 * $('#nav').onePageNav({
 *   currentClass: 'current',
 *   changeHash: false,
 *   scrollSpeed: 750
 * });
 */
;(function($) {
"use strict";
  $.fn.onePageNav = function(options) {
    var opts = $.extend({}, $.fn.onePageNav.defaults, options),
        onePageNav = {};
    
    onePageNav.sections = {};
    
    onePageNav.bindNav = function($el, $this, o) {
      var $par = $el.parent(),
          newLoc = $el.attr('href'),
          $win = $(window);

      if(!$par.hasClass(o.currentClass)) {
        if(o.begin) {
          o.begin();
        }
        onePageNav.adjustNav($this, $par, o.currentClass);
        $win.unbind('.onePageNav');


        $.scrollTo(newLoc, o.scrollSpeed, {
          offset: {
                        top: - 70
                    },
                    easing : 'easeInCubic',
          onAfter: function() {
            if(o.changeHash) {
              window.location.hash = newLoc;

            }
            $win.bind('scroll.onePageNav', function() {
              onePageNav.scrollChange($this, o.currentClass);
            });
            if(o.end) {
              o.end();
            }
          }
        });
      }
    };
    
    onePageNav.adjustNav = function($this, $el, curClass) {
      $this.find('.'+curClass).removeClass(curClass);
      $el.addClass(curClass);
    };
    
    onePageNav.getPositions = function($this) {
      $this.find('a.link_onepage').each(function() {
        var linkHref = $(this).attr('href'),
            divPos = $(linkHref).offset(),
            topPos = divPos.top;
        onePageNav.sections[linkHref.substr(1)] = Math.round(topPos);
      });
    };
    
    onePageNav.getSection = function(windowPos) {
      var returnValue = '',
          windowHeight = Math.round($(window).height() / 2);
      
      for(var section in onePageNav.sections) {
        if((onePageNav.sections[section] - windowHeight) < windowPos) {
          returnValue = section;
        }
      }
      return returnValue;
    };
    var execute = false;
    onePageNav.scrollChange = function($this, curClass) {
      onePageNav.getPositions($this);
      
      var windowTop = $(window).scrollTop(),
          position = onePageNav.getSection(windowTop);
        if ((windowTop > 2700) & (execute == false)) {
            counterNumber();
            execute = true;
        }
        if (position == "texas") {
            $('#news1').addClass('cbp-so-side');
            $('#tableservice').addClass('cbp-so-side');
            $('.grid_item').addClass('animated');
            $('#blockTitle1').addClass('uk-animation-scale-down');
        } else if (position == "game") {
            $('.luxe-animate').addClass('animated');
            $('#blockTitle2').addClass('uk-animation-scale-down');
        } else if (position == "section-3") {
            $('#blockTitle4').addClass('uk-animation-scale-down');
        } else if (position == "section-4") {
            $('#sponsorpoker').find('.one_sixth_sponsor').addClass('one_sixth_sponsor_after');
            $('#blockTitle5').addClass('uk-animation-scale-down');
        } else if (position == "tournaments") {
            $('#blockTitle4').addClass('uk-animation-scale-down');
        } else if (position == "section-6") {

            $('#blockTitle7').addClass('uk-animation-scale-down');
        }


        if(position !== '') {
        onePageNav.adjustNav($this,$this.find('a[href=#'+position+']').parent(), curClass);
      }
    };
    
    onePageNav.init = function($this, o) {
      $this.find('a.link_onepage').bind('click', function(e) {
        onePageNav.bindNav($(this), $this, o);
        e.preventDefault();
        
      });
    
      onePageNav.getPositions($this);


      var didScroll = false;
    
      $(window).bind('scroll.onePageNav', function() {
        didScroll = true;
      });

      setInterval(function() {
        if(didScroll) {
          didScroll = false;
          onePageNav.scrollChange($this, o.currentClass);
        }
      }, 250);
    };
    
    return this.each(function() {
      var $this = $(this),
          o = $.meta ? $.extend({}, opts, $this.data()) : opts;
      
      onePageNav.init($this, o);
    
    });
  };

  // default options
  $.fn.onePageNav.defaults = {
    currentClass: 'current',
    changeHash: false,
    scrollSpeed: 750,
    begin: false,
    end: false
  };

})(jQuery);