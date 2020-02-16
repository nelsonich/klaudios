$(document).ready(function() {
    $(".openLeftNav").on('click', openNav);
    $(".closeLeftBar").on('click', closeNav);

    function openNav() {
        $("#mySidenav").css('width', "250px");
        $("#main").css('margin-left', "250px");
        // $('body').css('background-color', "rgba(0,0,0,0.4)");
    }

    function closeNav() {
        $("#mySidenav").css('width', "0");
        $("#main").css('margin-left', "0");
        // $('body').css('background-color', "white");
    }
});