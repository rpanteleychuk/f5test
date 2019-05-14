$("[href^='#']").click(function() {
    var idtop = $($(this).attr("href")).offset().top;
    $('html,body').animate(
        // Time animation
        {scrollTop: idtop}, 800);
    return false;
});




