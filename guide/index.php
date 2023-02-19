<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>
<style type="text/css">
.slick-track {height: 300px;}
.slick-slide img {object-fit: cover;}
@media (max-width:1024px) {.slick-track {height: 250px;} }
@media (max-width:768px) {.slick-track {height: 200px;} }
@media (max-width:667px) {.smp_footer_div {background-color: transparent;}}
@media (max-width:567px) {.slick-track {height: 150px;} }
</style>
<div class="guide_line_info">
<div class="guide_line_info_inner">
	<span class="Official_line">夢を叶える百貨店 公式 LINE アカウント</span>
	<div class="guide_line_info_inner_inner_icon">
		<span class="Official_line_follow">最新情報やお得なお知らせを配信中！</span>
		<a href="https://lin.ee/j1c4rBK" class="insta_btn3" target="_blank" rel="noopener noreferrer"><i class="fab fa-line"></i> <span>Follow Me</span></a>
	</div>
</div>
</div>
<section class="section_Instagram">
	<ul class="slider">
		<li><img src="/img/common/online_shop01.jpg" alt=""></li>
		<li><img src="/img/common/market_bldg02.jpg" alt=""></li>
		<li><img src="/img/common/market_img_001.png" alt=""></li>
		<li><img src="/img/common/movie_buy02.jpg" alt=""></li>
		<li><img src="/img/common/syuppin_M.jpg" alt=""></li>
		<li><img src="/img/common/syuppin_E.jpg" alt=""></li>
	</ul>
</section>

<section class="guide_section_contain">
	<h1>夢を叶える百貨店</h1>
    <ul class="floor_list">
    	<li class="floor_list__item">
    		<a href="/item/index.php">
    			<div class="floor_list__head">
	      		<span>1F</span>
	      		<h2>Free market</h2>
	      		<p>商品販売フロア</p>
	      	</div>
	      	<div class="floor_list__desc">
						<p>中古品から新品の物販を取り扱うフロアです。<br>望む人々が自発的に取引を行なえる市場を目指し、従来の' flea market 'ではなく" Free market "を採用しています。</p>
					</div>
    		</a>
    	</li>
    	<li class="floor_list__item">
    		<a href="/item/index_s.php">
    			<div class="floor_list__head">
	      		<span>2F</span>
	      		<h2>Skill market</h2>
	      		<p>スキル販売フロア</p>
	      	</div>
	      	<div class="floor_list__desc">
						<p>スキル・サービスの販売を取り扱うフロアです。<br>仕事を依頼したい方と請け負いたい方をマッチングします。お悩みや困った際はこちらのフロアを覗いてみましょう。</p>
					</div>
    		</a>
    	</li>
    	<li class="floor_list__item">
    		<a href="/course/index.php">
    			<div class="floor_list__head">
	      		<span>3F</span>
	      		<h2>Movie market</h2>
	      		<p>動画販売フロア</p>
	      	</div>
	      	<div class="floor_list__desc">
						<p>動画コンテンツの販売を取り扱うフロアです。<br>あなたの人生をより豊かにする動画が販売されています。夢や理想を広げるキッカケをぜひ見つけてみてください。</p>
					</div>
    		</a>
    	</li>
    	<li class="floor_list__item">
    		<a href="/seminar/index.php">
    			<div class="floor_list__head">
	      		<span>4F</span>
	      		<h2>Event market</h2>
	      		<p>イベント販売フロア</p>
	      	</div>
	      	<div class="floor_list__desc">
						<p>イベント・セミナー・コンサートなどの販売を取り扱うフロアです。<br>オンラインからリアルまで出品者が体験を共有する場を提供しています。新しい出会いであなたの世界を広げてください。</p>
					</div>
    		</a>
    	</li>
    	<!-- <li class="floor_list__item">
    		<a href="">
    			<div class="floor_list__head">
	      		<span>5F</span>
	      		<h2>Shop mall<ruby style="font-size: 14px;">（準備中）</ruby></h2>
	      		<p>ショップ出店フロア</p>
	      	</div>
	      	<div class="floor_list__desc">
						<p>ショップとして同一販売者の出品販売を取り扱うフロアです。<br>1～4Fに出品されている同一販売者の出品をまとめてチェックいただけます。気に入った出品者をチェックしてみてください。</p>
					</div>
    		</a>
    	</li> -->
    </ul>
    <div class="community_logo">
		<img src="/img/common/market_logo.png" alt="" />
	</div>
</section>




<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript">
	$('#play-video').on('click', function(e){
  e.preventDefault();
  $('#video-overlay').addClass('open');
  $("#video-overlay").append('<iframe width="1000" height="563" src="https://www.<?=$_SERVER["tld"]?>/video/concept_movie.mp4" frameborder="0" allowfullscreen></iframe>');
});

$('.video-overlay, .video-overlay-close').on('click', function(e){
  e.preventDefault();
  close_video();
});

$(document).keyup(function(e){
  if(e.keyCode === 27) { close_video(); }
});

function close_video() {
  $('.video-overlay.open').removeClass('open').find('iframe').remove();
};


 $('.slider').slick({
    arrows: false,//左右の矢印はなし
    autoplay: true,//自動的に動き出すか。初期値はfalse。
    autoplaySpeed: 0,//自動的に動き出す待ち時間。初期値は3000ですが今回の見せ方では0
    speed: 6900,//スライドのスピード。初期値は300。
    infinite: true,//スライドをループさせるかどうか。初期値はtrue。
    pauseOnHover: false,//オンマウスでスライドを一時停止させるかどうか。初期値はtrue。
    pauseOnFocus: false,//フォーカスした際にスライドを一時停止させるかどうか。初期値はtrue。
    cssEase: 'linear',//動き方。初期値はeaseですが、スムースな動きで見せたいのでlinear
    slidesToShow: 3,//スライドを画面に4枚見せる
    slidesToScroll: 1,//1回のスライドで動かす要素数
    responsive: [
      {
      breakpoint: 769,//モニターの横幅が769px以下の見せ方
      settings: {
        slidesToShow: 3,//スライドを画面に2枚見せる
      }
    },
    {
      breakpoint: 428,//モニターの横幅が426px以下の見せ方
      settings: {
        slidesToShow: 2,//スライドを画面に1.5枚見せる
      }
    }
  ]
  });
</script>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc")?>