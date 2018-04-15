// // START ANIMATIONS

(function () {

    if(window.innerWidth > 576 && window.innerHeight > 415) {
      
      // Set variables
  
      var overlay = document.querySelectorAll(".start-overlay-animation");
      var firstLine = document.querySelector(".banner__header__title--first-line");
      var secondLine = document.querySelector(".banner__header__title--second-line");
      var button = document.querySelector(".standard-button");
      var nav = document.querySelector(".navigation");
      var arrow = document.querySelector(".banner__arrow");
  
      // Hide elements
  
      function hideElements() {
        for(var i = 0; i < overlay.length; i++) {
          overlay[i].classList.add("overlay-animation--hide");
        }
        nav.classList.add("navigation--hide");
        arrow.classList.add("banner__arrow--hide");
      }
  
      // Animations
  
      function showOverlay(el) {
        el.setAttribute("data-overlay-animation", "1");
      }
  
      function hideOverlay(el) {
        el.setAttribute("data-overlay-right", "1");
        el.classList.remove("overlay-animation--hide");
        el.setAttribute("data-overlay-animation", "0");
      }
  
      function addTransition() {
        nav.style.transition = "all 400ms ease-out";
        arrow.style.transition = "all 400ms ease-out";
      }
  
      function showNavAndArrow() {
        nav.classList.remove("navigation--hide");
        arrow.classList.remove("banner__arrow--hide");
      }
  
      function startAnimations() {
        setTimeout(function() {
          showOverlay(firstLine);
        }, 500);
        setTimeout(function() {
          showOverlay(secondLine);
        }, 900);
        setTimeout(function () {
          hideOverlay(firstLine);
        }, 800);
        setTimeout(function() {
          showOverlay(button);
        }, 1400);
        setTimeout(function () {
          hideOverlay(secondLine);
        }, 1200);
        setTimeout(function () {
          hideOverlay(button);
          addTransition();
        }, 1800);
        setTimeout(function() {
          showNavAndArrow();
        }, 2050);
      };
  
      // Execute animations when document is loaded
  
      hideElements();
      document.addEventListener("DOMContentLoaded", startAnimations);
  
    }
  
  })();
  
  // START ANIMATIONS - END
  
  
  
  // NAVIGATION FADE IN UP ANIMATION
  
  (function() {
  
    // Set variables
  
    var mainNav = document.querySelector(".navigation__menu");
    var navToggle = document.querySelector(".navigation__elements__button");
    var navElement = document.querySelectorAll(".navigation__menu__elements__once");
    var navElementLink = document.querySelectorAll(".navigation__menu__elements__once__link");
    var time = 400;
  
    // Hide navigation elements
  
  
    function hideNavElements() {
      for(var i = 0; i < navElement.length; i++) {
        navElement[i].classList.add("fade-animation--hide-nav");
      }
    }
  
    function disableNavButton(el) {
      el.disabled = "true";
      setTimeout(function() {
        el.removeAttribute("disabled");
      }, 500);
    }
  
    function activeNav() {
      navToggle.classList.add("is-active");
      mainNav.classList.add("navigation__menu--show");
      for(var i = 0; i < navElementLink.length; i++) {
        navElementLink[i].setAttribute("tabindex", i + 4);
      }
    }
  
    function deactiveNav() {
      navToggle.classList.remove("is-active");
      mainNav.classList.remove("navigation__menu--show");
      for(var i = 0; i < navElementLink.length; i++) {
        navElementLink[i].setAttribute("tabindex", i + 4);
      }
    }
  
    // Fade in up animation
  
    function mainNavToggle() {
  
      disableNavButton(navToggle);
  
      if(navElement[0].classList.contains("fade-animation--hide-nav")) {
  
        activeNav();
  
        function timeout(i) {
          if(time > 1000) {
            time = 400;
          }
          setTimeout(function() {
            navElement[i].classList.remove("fade-animation--hide-nav");
          }, time);
          time = time + 100;
        }
  
        for(var i = 0; i < navElement.length; i++) {
          timeout(i);
        }
  
      } else {
  
        deactiveNav();
  
        setTimeout(function() {
          for(var i = 0; i < navElement.length; i++) {
            navElement[i].classList.add("fade-animation--hide-nav");
          }
        }, 400);
  
      }
    }
  
  
    // Execute animation
  
    hideNavElements();
    navToggle.addEventListener("click", mainNavToggle);
  
  })();
  
  // NAVIGATION FADE IN UP ANIMATION - END
  
  
  
  // PARALLAX
  
  (function() {
  
    if(window.innerWidth >= 992) {
      var elClass, difference, divider;
  
      function parallax(elClass, difference) {
        var elHeight = $(elClass).height();
        var scroll = $(window).scrollTop();
        
        var percent = difference - scroll /40;
        var position = '50% ' + percent + '%';
  
        $(elClass).css('background-position', position);
      }
  
      $(window).scroll(function(){
  
        parallax(".banner", 40);
      
      });
    }
  
  })();
  
  // PARALLAX - END
  
  
  
  // SCROLL ANIMATIONS
  
  (function() {
  
    if(window.innerWidth > 576 && window.innerHeight > 415) {
  
      // DECLARATE VIARIABLES
  
      var overlay = document.querySelectorAll(".overlay-animation");
      var fade = document.querySelectorAll(".fade-animation");
      var fadeDelayed = document.querySelectorAll(".fade-animation--delayed");
      var fadeDelayedOffset = document.querySelector(".fade-animation--delayed--bigger-offset");
      var cl;
  
      // HIDE ELEMENTS
  
      function hideElement(e, cl) {
        for(var i = 0; i < e.length; i++) {
          e[i].classList.add(cl);
        }
      }
  
      function hideElements(overlay, fade, fadeDel, fadeDelayedOffset) {
        var overlayHide = "overlay-animation--hide";
        var fadeHide = "fade-animation--hide";
  
        hideElement(overlay, overlayHide);
        hideElement(fade, fadeHide);
        hideElement(fadeDel, fadeHide);
        fadeDelayedOffset.classList.add(fadeHide);
      }
  
      hideElements(overlay, fade, fadeDelayed, fadeDelayedOffset);
  
      // ANIMATIONS ON SCROLL
  
      function ovelayAnimation() {
        $(".overlay-animation").viewportChecker({
          offset: 100,
          callbackFunction: function(elem){
            elem.attr("data-overlay-animation", "1");
            setTimeout(function() {
              elem.attr("data-overlay-right", "1");
              elem.attr("data-overlay-animation", "0");
              elem.removeClass("overlay-animation--hide");
            }, 400);
          }
        });
      }
  
      function fadeAnimation() {
        $(".fade-animation").viewportChecker({
          offset: 100,
          callbackFunction: function(elem){
            elem.addClass("fade");
            setTimeout(function() {
              elem.removeClass("fade-animation");
            }, 400);
          }
        });
      }
  
      function fadeAnimationDelayed() {
        $(".fade-animation--delayed").viewportChecker({
          offset: 100,
          classToAdd: "fade"
        });
      }
  
      function fadeAnimationContact() {
        $(".fade-animation--delayed--bigger-offset").viewportChecker({
          offset: 270,
          classToAdd: "fade"
        });
      }
  
      // EXECUTE ANIMATIONS
  
      ovelayAnimation();
      fadeAnimation();
      fadeAnimationDelayed();
      fadeAnimationContact();
  
    }
  
  })();
  
  // SCROLL ANIMATIONS - END