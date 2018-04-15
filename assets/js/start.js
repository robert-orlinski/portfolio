if(window.innerWidth > 576 && window.innerHeight > 415) {
    var overlay = document.querySelectorAll(".start-overlay-animation");
    var nav = document.querySelector(".navigation");
    var arrow = document.querySelector(".banner__arrow");
    var mockup = document.querySelector(".banner__mockup");

    function hideElements() {
        for(var i = 0; i < overlay.length; i++) {
            overlay[i].classList.add("overlay-animation--hide");
        }
        nav.classList.add("navigation--hide");
        if(arrow) {
            arrow.classList.add("banner__arrow--hide");    
        } else {
            mockup.classList.add("banner__arrow--hide");
        }
    }

    hideElements();
}