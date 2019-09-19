/*MOBILE_MENU*/
$(".button-mob-menu").click(function() {
    $(".topnav").toggleClass("topnav-slide");
    $(".button-mob-menu").toggleClass("button-mob-menu-slide");
    $(".modal-all").toggleClass("modal-all-active");
    $("body").toggleClass("ScrollMenuNone");
});

$(".topnav ul li a").click(function() {
    $(".topnav").removeClass("topnav-slide");
    $(".button-mob-menu").removeClass("button-mob-menu-slide");
    $(".button-mob-menu input").prop('checked', false);
    $(".modal-all").removeClass("modal-all-active");
    $("body").removeClass("ScrollMenuNone");
});

$(".modal-all").click(function() {
    $(".topnav").removeClass("topnav-slide");
    $(".modal-all").removeClass("modal-all-active");
    $(".button-mob-menu").removeClass("button-mob-menu-slide");
    $(".button-mob-menu input").prop('checked', false);
    $("body").removeClass("ScrollMenuNone");
});

/*MOBILE_MENU*/