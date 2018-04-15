// // START ANIMATIONS

(function () {

    if(window.innerWidth > 576 && window.innerHeight > 415) {
      
      // Set variables

      var firstLine = document.querySelector(".banner__header__title--first-line");
      var secondLine = document.querySelector(".banner__header__title--second-line");
      var button = document.querySelector(".standard-button");
      var nav = document.querySelector(".navigation");
      var arrow = document.querySelector(".banner__mockup");
  
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
  
      function showNavAndMockup() {
        nav.classList.remove("navigation--hide");
        arrow.classList.remove("banner__arrow--hide");
      }
  
      function startAnimations() {
        setTimeout(function() {
          showOverlay(firstLine);
        }, 500);
        setTimeout(function () {
          hideOverlay(firstLine);
        }, 900);
        setTimeout(function() {
          showOverlay(button);
        }, 1200);
        setTimeout(function () {
          hideOverlay(button);
          addTransition();
        }, 1600);
        setTimeout(function() {
          showNavAndMockup();
        }, 2050);
      };
  
      // Execute animations when document is loaded
  
      // hideElements();
      document.addEventListener("DOMContentLoaded", startAnimations, false);
  
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
      }, 600);
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
          if(time > 820) {
            time = 400;
          }
          setTimeout(function() {
            navElement[i].classList.remove("fade-animation--hide-nav");
          }, time);
          time = time + 70;
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
    navToggle.addEventListener("click", mainNavToggle, false);
  
  })();
  
  // NAVIGATION FADE IN UP ANIMATION - END
  
  
  
  // SCROLL ANIMATIONS
  
  (function() {
  
    if(window.innerWidth > 576 && window.innerHeight > 415) {
  
      // DECLARATE VIARIABLES
  
      var overlay = document.querySelectorAll(".overlay-animation");
      var fade = document.querySelectorAll(".fade-animation");
      var fadeDelayed = document.querySelectorAll(".fade-animation--delayed");
      var fadeDelayedOffset = document.querySelector(".fade-animation--delayed--bigger-offset");
      var fadeSecond = document.querySelectorAll(".fade-animation--second");
      var fadeThird = document.querySelectorAll(".fade-animation--third");
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
        hideElement(fadeDelayed, fadeHide);
        hideElement(fadeSecond, fadeHide);
        hideElement(fadeThird, fadeHide);
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

      function fadeAnimationSecond() {
        $(".fade-animation--second").viewportChecker({
          offset: 100,
          callbackFunction: function(elem){
            setTimeout(function() {
              elem.addClass("fade");
              setTimeout(function() {
                elem.removeClass("fade-animation--second");
              }, 400);
            }, 250)
          }
        });
      }

      function fadeAnimationThird() {
        $(".fade-animation--third").viewportChecker({
          offset: 100,
          callbackFunction: function(elem){
            setTimeout(function() {
              elem.addClass("fade");
              setTimeout(function() {
                elem.removeClass("fade-animation--third");
              }, 400);
            }, 500)
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
      fadeAnimationSecond();
      fadeAnimationThird();
      fadeAnimationDelayed();
      fadeAnimationContact();
  
    }
  
  })();
  
  // SCROLL ANIMATIONS - END

  

  // SMOOTH SCROLL

  (function() {

    $("a[href^='#']").on("click", function(event){

      var target = $($(this).attr("href"));

      if(target.length){
        event.preventDefault();
        $("html, body").animate({
          scrollTop: target.offset().top - 80
        }, 800);
      }

      $(".navigation__elements__button").removeClass("is-active");
      $(".navigation__menu").removeClass("navigation__menu--show");

      setTimeout(function() {
        $(".navigation__menu__elements__once").addClass("fade-animation--hide-nav");
      }, 400);

    });

  })();

  // SMOOTH SCROLL - END
  
  
  
  // MATERIAL FORM
  
  var input = document.querySelectorAll(".contact__content__form__input__field");
  
  function hasValue(i) {
    var val = input[i].value;
  
    if(val == "") {
      input[i].classList.remove("has-value");
    } else {
      input[i].classList.add("has-value");
    }
  }
  
  input[0].addEventListener("blur", function() {
  
    hasValue(0);
  
  }, false);
  
  input[1].addEventListener("blur", function() {
  
    hasValue(1);
  
  }, false);
  
  input[2].addEventListener("blur", function() {
  
    hasValue(2);
  
  }, false);
  
  input[3].addEventListener("blur", function() {
  
    hasValue(3);
  
  }, false);
  
  
  // MATERIAL FORM - END
  
  
  
  // SUBMIT FORM
  
  $(document).ready(function () {
    $("form").submit(function (e) {
  
      e.preventDefault();
  
      $("#submit").attr("disabled", true);
  
      var name = $("#name").val();
      var email = $("#email").val();
      var topic = $("#topic").val();
      var message = $("#message").val();
      var submit = $("#submit").val();
  
      $("#submit").load("form.php", {
        name: name,
        email: email,
        topic: topic,
        message: message,
        submit: submit
      });
  
    });
  });
  
  // SUBMIT FORM - END



  // LINK ANIMATION

  (function() {

    document.addEventListener('click', function (event) {

      if(event.target.classList.contains('link-animation')) {

        event.preventDefault();
        document.querySelector("body").style.opacity = "0";

        setTimeout(function() {
          var target = event.target.getAttribute("href");
          window.location.href = target;
        }, 600);

        setTimeout(function() {
          document.querySelector("body").style.opacity = "1";        
        }, 2000)

      }

  }, false);

  })();

  // LINK ANIMATION - END