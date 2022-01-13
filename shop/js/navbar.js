function stickyNav() {
    if (window.pageYOffset >= sticky) {
        topbar.classList.add("sticky")
    } else {
        topbar.classList.remove("sticky");
    }
}

function doSomething(scrollPos) {
    if (scrollPos === 0) {
        navbar.classList.add('nav-margin')
    } else {
        navbar.classList.remove("nav-margin");
    }
}


window.onscroll = function() {
    stickyNav();
};

let topbar = document.getElementById("topbar");
let navbar = document.getElementById("navbar");
let sticky = navbar.offsetTop;

if (window.pageYOffset === 0) navbar.classList.add('nav-margin');

let lastKnownScrollPosition = 0;
let ticking = false;

document.addEventListener('scroll', function(e) {
    lastKnownScrollPosition = window.scrollY;

    if (!ticking) {
        window.requestAnimationFrame(function() {
            doSomething(lastKnownScrollPosition);
            ticking = false;
        });

        ticking = true;
    }
});