$('.main-menu, .login-menu').css({
    'margin-top' : $('#menuLogo').height() / 2 - $('.main-menu').height() / 2,
    'font-size' : $(window).width() * 0.015
});
function dropDownDisplay(li, ul){
    if($(li).is(":hover")) { $(ul).css('display', 'block'); }
    else { $(ul).css('display', 'none'); }
}
setTimeout(function() {

    function ulLiWidth() {
        var liWidth = 0;
        $('ul.main-menu li').each(function () {
            if ($(this).text().indexOf('Gallery') != 0) {
                liWidth += $(this).outerWidth(true);
            }
        });
        return liWidth;
    }

    //function navPC(){
    setInterval(function () {
        var mainMenuLiWidth = ulLiWidth();
        var mainMenuUlWidth = $('ul.main-menu').width();
        $('.main-menu, .login-menu').css({
            'margin-top' : $('#menuLogo').height() / 2 - $('.main-menu').height() / 2,
            'font-size' : $(window).width() * 0.015
        });
        $('#homeLi').css('margin-left', (mainMenuUlWidth - mainMenuLiWidth) / 2);
        dropDownDisplay("#FORENBOXLi", '#galleryUL');
        dropDownDisplay("#langLi", '#langUL');
        $('#foot').css('font-size', $(window).width() * 0.015);
        $('#createdBy').css('font-size', $(window).width() * 0.012);
    }, 1);
    //}
    /*$('#mobileMenuImg').click(function () {
        if ($('#navMobileElements').css("display") == 'block') {
            $('#navMobileElements').css('display', 'none');
        }
        else {
            $('#navMobileElements').css('display', 'block');
        }
    });*/
    //var navPCInterval = setInterval(navPC(), 1);
    //setInterval(function(){
        //var width = (window.innerWidth);
        //if(width > 560) {
            //setInterval(navPC(), 1);
        //}else{
            //clearInterval(navPCInterval);
        //}
    //}, 1);

}, 200);




