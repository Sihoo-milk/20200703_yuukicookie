// フェードインの設定
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

// スムーススクロールの設定
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

// ツールチップの設定
$(function(){
  $('.clickToolTip').click(function() {
    // リンクの #note** を取得
    var targetNote = $(this).attr('target');

    // [?]の座標を取得
    var position = $(this).position();
    var newPositionTop = position.top + 10;        /* + 数値で下方向へ移動 */
    var newPositionLeft = position.left + 35;      /* + 数値で右方向へ移動 */

    // ツールチップの位置を調整
    $('p' + targetNote).css({'top': newPositionTop + 'px', 'left': newPositionLeft + 'px'});

    // ツールチップの class="invisible" を削除
    $('p'+targetNote).removeClass('invisible');
  });

  // 表示されたツールチップを隠す処理（マウスクリックで全て隠す）
  $('html').mousedown(function() {
    $('.toolTip').addClass('invisible');
  });
  // aクリックを無効
  $('.clickToolTip').click(function(){
    return false;
  });
});
