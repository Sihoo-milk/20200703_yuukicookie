<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>おいしく安全な、オーガニック（有機）クッキー</title>
  <link rel="stylesheet" href="css/ress.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body id="cnfm">

<div class="bg1280">
    <img class="logo fadeDown" src="img/header_logo.png" alt="おいしい有機クッキー">
    <nav class="nav fadeDown sp-none">
      <ul class="nav__list">
        <li class="nav__item"><a href="./index.html#organic" class="nav__item-link">オーガニックとは</a></li>
        <li class="nav__item"><a href="./index.html#organic__jas" class="nav__item-link">有機JAS認定とは</a></li>
        <li class="nav__item"><a href="./index.html#world" class="nav__item-link">世界中から厳選した有機原材料</a></li>
        <li class="nav__item"><a href="./index.html#commitment" class="nav__item-link">おいしさのこだわり</a></li>
        <li class="nav__item"><a href="./index.html#type" class="nav__item-link">選べる3つの味</a></li>
        <li class="nav__link">
          <a href="./index.html#fee" class="nav__link-content">
            <div class="nav__btn-txt">価格表とご注⽂はこちら</div>
            <img class="nav__btn-img" src="img/header_btn.png" alt="下矢印">
          </a>
        </li>
      </ul>
    </nav>
    <nav class="global-nav pc-none">
      <ul class="global-nav__list">
        <li class="global-nav__item"><a href="./index.html#organic" class="global-nav__item-link">オーガニックとは</a></li>
        <li class="global-nav__item"><a href="./index.html#organic__jas" class="global-nav__item-link">有機JAS認定とは</a></li>
        <li class="global-nav__item"><a href="./index.html#world" class="global-nav__item-link">世界中から厳選した有機原材料</a></li>
        <li class="global-nav__item"><a href="./index.html#commitment" class="global-nav__item-link">おいしさのこだわり</a></li>
        <li class="global-nav__item"><a href="./index.html#type" class="global-nav__item-link">選べる3つの味</a></li>
        <li class="global-nav__item">
          <a href="./index.html#fee" class="global-nav__link-content">
            <div class="global-nav__btn-txt">価格表とご注⽂はこちら</div>
            <img class="global-nav__btn-img" src="img/header_btn.png" alt="下矢印">
          </a>
        </li>
      </ul>
    </nav>
    <div class="hamburger" id="js-hamburger">
      <span class="hamburger__line hamburger__line--1"></span>
      <span class="hamburger__line hamburger__line--2"></span>
      <span class="hamburger__line hamburger__line--3"></span>
    </div>
    <div class="black-bg" id="js-black-bg"></div>

<div id="formWrap">
<div class="order">
  <img class="order__cookie1 sa sa--lr" src="img/order_cookie1.png" alt="クッキー">
  <img class="order__leaf-right1 sa sa--rl" src="img/order_leaf-right1.png" alt="葉っぱ">
  <img class="order__cookie2 sa sa--rl" src="img/order_cookie2.png" alt="クッキー">
  <img class="order__leaf-left1 sa sa--lr" src="img/order_leaf-left1.png" alt="葉っぱ">
  <div class="order__form-title-bg sa sa--up">
        <h2 class="order__form-title">ご注文フォーム</h2>
    </div>
    <p class="order__form-confirm-lead sa sa--up">入力内容に間違いがなければ、<br>送信するボタンにて注文を完了してください。</p>

    <div class="order__form-bg sa sa--up">
    <?php if($empty_flag == 1){ ?>
    <div align="center">
    <?php echo $errm; ?><br /><br /><input type="button" value=" 前画面に戻る " onClick="history.back()">
    </div>
    <?php }else{ ?>
    <table class="formTable">
    <?php var_dump($_POST);//入力内容を表示?>
    </table>
    <p align="center"><input type="hidden" name="mail_set" value="confirm_submit">
    <input type="hidden" name="httpReferer" value="<?php echo h($_SERVER['HTTP_REFERER']);?>">
    <div class="order__wrap-btn">
      <button class="order__btn">
        <input class="order__btn-txt" type="submit" value="送信する">
        <span class="arrow--right">〉</span>
      </button>
      <button class="order__btn-back">
        <input class="order__btn-txt" type="button" value="戻る" onClick="history.back()">
      </button>
    </div>
    <?php } ?>
  </div>
</div>
</div><!-- /formWrap -->

</div>

<footer>
    <div class="footer__top">プライバシーポリシー  |  特定商取引法に基づく表記</div>
    <div class="footer__under">
      <div class="footer__address">ハニークローバー株式会社 〒108-0074 東京都港区⾼輪4-1-18 ⾼輪ビル4階</div>
      <img class="footer__sns" src="img/footer_sns.png" alt="SNS">
      <div class="footer__copyright">© Honey Clover Co,Ltd. All rights reserved.</div>
    </div>
  </footer>

  <div id="goto_top" class="scroll">
    <a class="scroll__link" href="#mv">
      <img class="scroll__btn" src="img/scroll_btn.png" alt="ページトップへ">
    </a>
  </div>

  <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
  <script src="js/common.js"></script>
</body>
</html>