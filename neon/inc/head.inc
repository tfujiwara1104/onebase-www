<?include_once("{$_SERVER['SERVER_ROOT']}/inc/common.inc");?>
<html>
<head>
    <?include_once("{$_SERVER['SERVER_ROOT']}/www/neon/inc/head_.inc");?>
</head>

<script type="text/javascript">
var defaultOrientation; // window.orientationが0または180の時に縦長であればtrue
// 初期化処理
window.addEventListener('load', function() {
  if('orientation' in window) {
    var o1 = (window.innerWidth < window.innerHeight);
    var o2 = (window.orientation % 180 == 0);
    defaultOrientation = (o1 && o2) || !(o1 || o2);
    checkOrientation();
  }
  // もしあれば、その他Webアプリの初期化処理
}, false);
// 画面回転時に向きをチェック
window.addEventListener('resize', checkOrientation, false);
function checkOrientation () {
  if('orientation' in window) {
    // defaultOrientationがtrueの場合、window.orientationが0か180の時は縦長
    // defaultOrientationがfalseの場合、window.orientationが-90か90の時は縦長
    var o = (window.orientation % 180 == 0);
    if(window.matchMedia('(max-width: 767px)').matches) {
        if((o && defaultOrientation) || !(o || defaultOrientation)) {
          // ここに縦長画面への切り替え処理を記述
            document.getElementById("content_area").classList.remove("landscape_img");
        }else{
          // ここに横長画面への切り替え処理を記述
            document.getElementById("content_area").classList.add("landscape_img");
        }
    }
  }
}
</script>
<script>
$(function(){
$.datepicker.setDefaults($.datepicker.regional["ja"]);
$(".dp").datepicker({ dateFormat: "yy-mm-dd" });
$(".mp").datepicker({ dateFormat: "yy-mm" });
});

 $(function() {
 var h = $(window).height();
  $('#loading__wrapper').css('display','none');
  $('#is-loading ,#loading').height(h).css('display','block');
 });

 $(window).load(function () {
  $('#is-loading').delay(1000).fadeOut(800);
  $('#loading').delay(1000).fadeOut(800);
  $('#loading__wrapper').css('display', 'block');
 });

 $(function(){
  setTimeout('stopload()',10000);
  });

  function stopload(){
   $('#loading__wrapper').css('display','block');
   $('#is-loading').delay(1000).fadeOut(800);
   $('#loading').delay(1000).fadeOut(800);
 }
</script>

<body>
<div id="body">
<div class="main" id="web_page_<?=str_replace(array("/",".php"),"",$self)?>">
<div>
<a href="#" class="sf-back-to-top"><img src="/img/common/icon_top.png" alt="" /></a>
<div id="content_area"></div>


<form action="<?=$self?>">
<header class="display_768px_off">
    <div>
        <a class="display_567px_off" href="/neon/index.php">
            <img class="" src="/neon/img/common/neon_logo_white_240.png" alt="" />
        </a>
        <a class="display_567px_on" href="/neon/index.php">
            <img src="/neon/img/common/neon_logo_white_300.png" alt="" />
        </a>
        <nav class="nav_right">
            <ul>
                <li><span class="vertical_bar"><a href="/neon/service/live.php" style="color:#fff;">LIVE<span class="material-symbols-outlined">live_tv</span></a></span></li>
                <li><span class="vertical_bar">サービス<i class="fas fa-caret-down fa-fw"></i></span>
                    <ul>
                        <li><a href="/neon/service/archive.php">動画コンテンツ</a></li>
                        <li><a href="/neon/service/">1DAY講座</a></li>
                        <li><a href="/neon/service/salon.php">サロン会員募集</a></li>
                        <li><a href="/guide/" onclick="if(!confirm('オンラインマーケットプレイス\n「夢を叶える百貨店」へ訪れます。\nよろしいですか？\n\n※NEON無料会員でマーケットへの出品販売が可能です。')){return false;}">マーケットプレイス</a></li>
                    </ul>
                </li>
                <li><span class="vertical_bar_none">サポート<i class="fas fa-caret-down fa-fw"></i></span>
                    <ul>
                        <li><a href="/neon/info/index.php">お知らせ</a></li>
                        <li><a href="/neon/config/">アイコン追加方法</a></li>
                        <li><a href="/neon/guide/qa.php">よくある質問</a></li>
                        <li><a href="/neon/contact/">お問い合わせ</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <nav>
        <ul>
            <li class="header_login_btn"><a href="/neon/regist/index.php" class="header_regi">新規登録</a></li>

            <li class="header_login_btn"><a href="/neon/login/" class="header_login">ログイン</a></li>
        </ul>
    </nav>
</header>

<header class="display_768px_on">
    <div class="smp_567px_use">
        <a class="pre_return" href="#" onclick="javascript:window.history.back(-1);return false;"><i class="fas fa-chevron-circle-left fa-fw"></i></a>
    </div>
    <div>
        <a class="display_567px_off" href="/neon/index.php">
            <img class="" src="/neon/img/common/neon_logo_white_240.png" alt="" />
        </a>
        <a class="display_567px_on" href="/neon/index.php">
            <img src="/neon/img/common/neon_logo_white_300.png" alt="" />
        </a>
    </div>
    <div>
        <!--🍔-->
        <section class="header_hamburge">
            <nav class="global-nav">
                <div class="global-nav_innar">
                    <nav class="www_header_hnav">
                        <ul class="flex_">
                            <li class="header_login_btn"><a href="/neon/regist/index.php" class="header_regi">新規登録</a></li>

                            <li class="header_login_btn"><a href="/neon/login/" class="header_login">ログイン</a></li>
                        </ul>
                    </nav>
                    <div class="nav_body">
                        <ul>
                            <li><span>サービス <i class="fas fa-caret-down"></i></span>
                                <ol>
                                    <li><a href="/neon/service/live.php">LIVE</a></li>
                                    <li><a href="/neon/service/archive.php">動画コンテンツ</a></li>
                                    <li><a href="/neon/service/">1DAY講座</a></li>
                                    <li><a href="/neon/service/salon.php">サロン会員募集</a></li>
                                    <li><a href="/guide/" target="_blank" rel="noopener noreferrer" onclick="if(!confirm('オンラインマーケットプレイス\n「夢を叶える百貨店」へ訪れます。\nよろしいですか？\n\n※NEON無料会員でマーケットへの出品販売が可能です。')){return false;}">マーケットプレイス</a></li>
                                </ol>
                            </li>
                            <li><span>サポート <i class="fas fa-caret-down"></i></span>
                                <ol>
                                    <li><a href="/neon/info/index.php">お知らせ</a></li>
                                    <li><a href="/neon/config/">アイコン追加方法</a></li>
                                    <li><a href="/neon/guide/qa.php">よくある質問</a></li>
                                    <li><a href="/neon/contact/">お問い合わせ</a></li>
                                </ol>
                            </li>
                            <li><span>運営情報 <i class="fas fa-caret-down"></i></span>
                                <ol>
                                    <li><a href="/neon/administrator/index.php">運営者情報</a></li>
                                    <li><a href="/neon/rule/privacy.php">プライバシーポリシー</a></li>
                                    <li><a href="/neon/rule/">利用規約</a></li>
                                    <li><a href="/neon/guide/marketplace.php">NEON×夢を叶える百貨店</a></li>
                                    <li><a href="/neon/law/">特定商取引法に基づく表記</a></li>
                                </ol>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="hamburger" id="js-hamburger">
            <span class="hamburger__line hamburger__line--1"></span>
            <span class="hamburger__line hamburger__line--2"></span>
            <span class="hamburger__line hamburger__line--3"></span>
            </div>
        <div class="black-bg" id="js-black-bg"></div>
        </section>
        <!--🍔-->
    </div>
</header>
</form>
<div class="main_body">

<script type="text/javascript">
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

var startPos = 0,winScrollTop = 0;
$(window).on('scroll',function(){
    winScrollTop = $(this).scrollTop();
    if (winScrollTop >= startPos) {
        if(winScrollTop >= 80){
            $('.site-header').addClass('hide');
        }
    } else {
        $('.site-header').removeClass('hide');
    }
    startPos = winScrollTop;

});
//TOPへ
//ツールバー表示対策(ソース確認対策)
function winopen(url) {
    win = window.open(url, "host", "scrollbars=1,width=780,height=480");
}

var amountScrolled = 800;

$(window).scroll(function() {
    if ($(window).scrollTop() > amountScrolled) {
        $('a.sf-back-to-top').fadeIn('slow');
    } else {
        $('a.sf-back-to-top').fadeOut('slow');
    }
});

$('a.sf-back-to-top').click(function() {
    $('html, body').animate({
        scrollTop: 0
    }, 300);
    return false;
});
</script>