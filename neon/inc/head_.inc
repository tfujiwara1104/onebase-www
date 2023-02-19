<title>(開発)NEON</title>
<link rel=”canonical” href=”https://onecollege.co.jp”>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="content-script-type" content="text/javascript" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">


<meta property="og:url" content="https://<?=$_SERVER["tld"]?>/neon/">
<meta property="og:title" content="(開発)NEON">
<meta property="og:description" content="ビジネスを通して人として共にカッコ良く成長する
女性向けプライベート・コンサルティング・コミュニティ">
<meta property="og:site_name" content="女性向けプライベート・コンサルティング・コミュニティ">
<meta property="og:image" content="https://<?=$_SERVER["tld"]?>/neon/img/common/neon_kv_01.jpg">

<link rel="apple-touch-icon" href="https://<?=$_SERVER["tld"]?>/neon/img/common/icon_128.png">
<link rel="shortcut icon" href="https://<?=$_SERVER["tld"]?>/neon/img/common/icon_16.png">
<link rel="stylesheet" href="https://<?=$_SERVER["tld"]?>/neon/css/default.css" type="text/css" id="defaultcss" />
<link rel="stylesheet" href="https://<?=$_SERVER["tld"]?>/neon/css/style.css" type="text/css" />
<link rel="stylesheet" href="https://<?=$_SERVER["tld"]?>/neon/css/contents.css" type="text/css" />
<link rel="stylesheet" href="https://<?=$_SERVER["tld"]?>/neon/css/smp.css" type="text/css" />


<script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
<link href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css" rel="stylesheet" />
<script type="text/javascript" src="/js/default.js"></script>
<script src="/js/slick.min.js"></script>


<script src="https://kit.fontawesome.com/0831db782a.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css" type="text/css" media="all" />
<script src="https://kit.fontawesome.com/4d07cd036d.js" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&family=Francois+One&family=Sulphur+Point:wght@300;400;700&family=Source+Serif+Pro:wght@300;400&family=Tangerine&family=Hina+Mincho&family=Josefin+Slab:ital,wght@1,100;1,200;1,300;1,400&family=Shippori+Mincho&family=Cinzel&family=Fredericka+the+Great&family=Cormorant+Garamond:wght@400;700&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>

<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons&display=swap" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.gstatic.com">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />



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


</script>
