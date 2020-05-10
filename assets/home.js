const navbar = document.getElementById('navbar');

let lastScrollTop = window.pageYOffset;
window.onscroll = function() {
        let scrollTop = window.pageYOffset;
        if (lastScrollTop > scrollTop) {
            navbar.style.top = "0";
        } 
        else {
            navbar.style.top = "-100px";
        }
        lastScrollTop = scrollTop;
    }