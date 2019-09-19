/*PRELOADER*/

$(window).load(function() {
    setTimeout(function() {
        $("#cube-loader").delay(500).fadeOut().remove();
    }, 1700);
});
/*PRELOADER*/

/*content after the PRELOADER*/
setTimeout(function() { $('main').fadeIn('slow') }, 2000);
/*content after the PRELOADER*/