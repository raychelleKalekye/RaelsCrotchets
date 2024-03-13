document.addEventListener("DOMContentLoaded", function () {
    var navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.left = "0";
    }

    function hideMenu() {
        navLinks.style.left = "-200px";
    }

    window.addEventListener("resize", function () {
        var screenWidth = window.innerWidth;
        if (screenWidth > 700) {
            hideMenu();
        }
    });
});