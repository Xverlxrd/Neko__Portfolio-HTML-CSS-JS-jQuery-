$(document).ready(function(){
    $('#second').hide();
    $('#serd').hide();
    $('.page__slider').click(function(){
        let mainSlide = $('.help__img.currect');
        let mainSlideIndex = mainSlide.index();
        let nextSlide = mainSlide.next();
        let nextSlideIndex = mainSlideIndex + 1;
        mainSlide.hide(2000).removeClass('currect');
        if(nextSlideIndex === ($('.help__img:last').index()+1)){
            $('.help__img:first').show(2000).addClass('currect');
            console.log(1)
        }else{
            console.log(2)
            nextSlide.show(2000).addClass('currect');
        }
        
    })

    // Функционал игры
    $(".main__start").click(function() {
        $(".main__test").css("display", "none") && $(".main__game").fadeIn(1500) && $(".main__game").css("display", "grid");
    })
    if($('.symbol__img ready'))
});