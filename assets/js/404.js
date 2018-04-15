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
        navElementLink[i].setAttribute("tabindex", 0);
      }
    }
  
    function deactiveNav() {
      navToggle.classList.remove("is-active");
      mainNav.classList.remove("navigation__menu--show");
      for(var i = 0; i < navElementLink.length; i++) {
        navElementLink[i].setAttribute("tabindex", "-1");
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
    navToggle.addEventListener("click", mainNavToggle, false);
  
  })();
  
  // NAVIGATION FADE IN UP ANIMATION - END