$(function(){
  $(window).scroll(function (){
    $('.sa').each(function(){
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight + 300){
        $(this).addClass('show');
      }
    });
  });
});

$(document).ready(function () {
  $("#goto_top").hide();
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $('#goto_top').fadeIn();
      } else {
        $('#goto_top').fadeOut();
      }
    });

    $('#goto_top a').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    });
  });
});
