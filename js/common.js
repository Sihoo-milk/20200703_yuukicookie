// フェードインの設定
$(function() {
  $(window).scroll(function () {
    $('.sa').each(function() {
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight + 300) {
        $(this).addClass('show');
      }
    });
  });
});

// スムーススクロールの設定
$(function() {
  $('a[href^="#"]').click(function() {
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});

// ポップアップ
$(function() {
  // show popupボタンクリック時の処理
  $('#show').click(function(e) {
    $('#popup, #layer').show();
  });
  // レイヤー/ポップアップのcloseボタンクリック時の処理
  $('#close, #layer').click(function(e) {
    $('#popup, #layer').hide();
  });
});

function toggleNav() {
  var body = document.body;
  var hamburger = document.getElementById('js-hamburger');
  var blackBg = document.getElementById('js-black-bg');

  hamburger.addEventListener('click', function() {
    body.classList.toggle('nav-open');
  });
  blackBg.addEventListener('click', function() {
    body.classList.remove('nav-open');
  });
}
toggleNav();
