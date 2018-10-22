function openNav() {
    $("#sideNav").css("width", "200px");

}

function closeNav() {
    $("#sideNav").css("width", "0px");
}


function stickyNav() {
    window.onscroll = function () { funcSticky() };

    var navbar = document.getElementById("nav-bar");
    var sticky = navbar.offsetTop;

    function funcSticky() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky");
        } else {
            navbar.classList.remove("sticky");
        }
    }
}