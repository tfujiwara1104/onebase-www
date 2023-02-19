<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>
<link rel="stylesheet" href="/css/market_.css" type="text/css" />
<style type="text/css">
.slick-slider .slick-track,.slick-slider .slick-list {transform: unset !important;}
.nav_rearch {display: none!important;}.smp_567px_use {display: flex;}.seminar_return {display: flex!important;}
@media (max-width:667px) {.smp_footer_div {background-color: transparent;}}
@media (max-width:567px) {
.smp_footer,.smp_footer_576px,.detaile_floor,.detail_pankuzu_list,.sf-back-to-top,.pre_return {display: none!important;}.header_hamburge {display: block !important;}}
</style>
<?extract($seminar)?>

<div class="detaile_floor">
	<div class="detaile_floor_innner">
		<p class="detaile_floor_name">
			<a href="/seminar/index.php"><span class="material-symbols-outlined">storefront</span>イベントマーケットをみる</a>
		</p>
	</div>
</div>
<div class="detaile_container">
	<p class="detail_pankuzu_list">
		<a href="/seminar/index.php">イベントマーケット</a> / <?=$_category[$caid]?> / <?=$name?>
	</p>

	<section class="container_inner01 clearfix">
	<div class="detaile_inner_right"><!-- detaile_inner_right -->

		<div class="open_time_box">
			<div class="open_time"><span class="material-symbols-outlined">date_range</span>開催日：<?=$date?><?if(isset($date2)){?> ～ <?=$date2?><?}?></div>
			<div class="open_time"><span class="material-symbols-outlined">alarm_on</span>開催時間：<?=$time1?> - <?=$time2?></div>
		</div>

		<?if($startdate >= date("Y-m-d", strtotime($new_day))){?>
			<span class="startdate_NEW">NEW</span><?}?>
		<?if($style==1){?>
			<span class="startdate_NEW">対面 / 会場開催</span>
		<?}else{?>
			<span class="startdate_NEW">オンライン / ウェブ開催</span>
		<?}?>
		<?if($discount){?><span class="notice_tag"><?=$discount?>%割引</span><?}?>
		<?if($pointamount1){?><span class="notice_tag">ダイヤモンド決済</span><?}?>
		<?if($capacity){?><span class="notice_tag">残席<?=$capacity-$cntreq?>名</span><?}?>
		<?if(!empty($affiliate_rate)){?><span class="notice_tag">クーポン対象</span><?}?>



		<h2 class="item_name"><?=$name?><br><span class="item_sub_name"><?=$sub_name?></span></h2>
		<p class="item_id">#<?=@$seminar["smid"]?></p>
		<div class="item_info_price_box">

	  		<!--開催終了を表示-->
			<?if($date < date("Y-m-d")){?>
				<p class="sale_finished">開催終了しました</p>
			<!--受付期間終了の表示-->
			<?}else if(!$is_sale){?>
				<p class="sale_finished">受付期間が終了しました</p>
			<!--満席の表示-->
			<?}else if( $cntreq==$capacity){?>
				<p class="sale_finished">定員に達しました</p>
			<!--無料-->
			<?}?>

			<?if(!$pointamount1 and !$pointamount2){?>
				<p>無料</p>
			<!--ダイヤモンド決済-->
			<?}else if($pointamount1){?>
				<p class="price_daiya" style="background-position:12px;"><?=number_format(ceil(strval($pointamount1)))?></p>
			<!--ポイント　ディスカウント-->
			<?}else if($discount and $pointamount2){?>
				<p><s style="font-size: 16px;">￥<?=number_format(ceil(strval($pointamount2)))?></s> ￥<?=number_format(ceil(strval(($pointamount2*((100-$discount)/100)))))?><span class="tax_included">（税込）</span></p>
			<!--ポイント-->
			<?}else{?>
				<p>￥<?=number_format(ceil(strval($pointamount2)))?><span class="tax_included">（税込）</span></p>
			<?}?>
	</div>
	<div class="item_info_box"><!-- 支払、ダイヤモンド還元表示 -->
		<?if(!$pointamount1 and !$pointamount2){?>
			<p><i class="fas fa-cash-register"></i> 無料</p>
		<?}elseif($pointamount1){?>
			<p><i class="fas fa-cash-register"></i> ダイヤモンド決済</p>
		<?}elseif($pointamount2){?>
			<p><i class="fas fa-cash-register"></i> クレジット決済 , ポイント決済</p>
		<?}else{?>
			<p><i class="fas fa-cash-register"></i> クレジット決済 , ポイント決済</p>
		<?}?>
		<p><i class="fas fa-gem"></i>
	      	<?if($pointamount1){?>
	      		<?=number_format(ceil(strval(($pointamount1*((100-$discount)/100))*0.05)))?><?}?>
	      	<?if($pointamount2){?>
	      		<?if($discount){?>
					<?=number_format(ceil(strval(($pointamount2*((100-$discount)/100))*0.05)))?><?}?>
			<?}?><span>ダイヤモンド還元</span></p>
	</div>
	<div class="item_info_box02" style="height:80px"><!-- 備考表示 -->
		<p>販売期間<span><?=@$seminar["startdate"]?$seminar["startdate"]:""?> ～ <?if($enddate){?><?=@$seminar["enddate"]?$seminar["enddate"]:""?><?}?></span></p>
		<p>申込状況<span><?if($cntreq<$capacity){?>残席 <?=number_format(ceil(strval($capacity-$cntreq)))?>名<?}else{?><span style="color:var(--ColorRed);">満員御礼</span><?}?><?if($capacity){?> ｜ 定員：<?=$capacity?>名<?}?></span></p>
	</div>

	<div class="use_912px">
	<form action="/seminar/<?=$smid?>" method="post" enctype="multipart/form-data">
	<div class="item_info_box03 smp_bottom_button_fixed">
		<?if($quantity <= $capacity){?>
			<div class="spinner_area">
			    <input type="button" value="－" class="btnspinner" data-cal="-1" data-target=".counter1">
			    <input id="quantity" type="number" class="counter1" data-max="<?=$capacity-$cntreq?>" data-min="1
			    " name="quantity" value="<?=$quantity?>">
			    <input type="button" value="＋" class="btnspinner" data-cal="1" data-target=".counter1">
				<input type="hidden" name="action" value="2" />
				<div class="FINISHED_color"></div>
			</div>
		<?}else{?>
			<div class="spinner_area spinner_area_only">
			    <input type="button" value="－" class="btnspinner" data-cal="-1" data-target=".counter1" readonly>
			    <input id="quantity" type="number" class="counter1" data-max="1" data-min="1
			    " name="quantity" value="<?=$quantity?>" readonly>
			    <input type="button" value="＋" class="btnspinner" data-cal="1" data-target=".counter1" readonly>
				<input type="hidden" name="action" value="2" />
				<div class="FINISHED_color"></div>
			</div><?}?>

		<!--開催終了を表示-->
		<?if($date < date("Y-m-d")){?>
			<div class="dummy__btn">
				開催終了しました
			</div>
		<!--受付期間終了の表示-->
		<?}else if(!$is_sale){?>
			<div class="dummy__btn">
				受付終了しました
			</div>
		<!--満席の表示-->
		<?}else if($cntreq==$capacity){?>
			<div class="dummy__btn">
				定員に達しました
			</div>
		<?}else{?>
				<div class="dummy__btn" style="background-color: #106f51;" id="jshow-popup">
					ログインして購入へ進む
				</div>
		<?}?>

			<!-- popup -->
			<div class="popup" id="js-popup">
				<div class="popup-inner_alert">
				  <p class="floor_guide_p">ログインを行ないます。<br>会員登録がお済でない方は<a href="/regist/index.php" class="alert_a">無料登録</a>からご登録ください。<br></p>
				<div class="flex_box_alert">
					<div class="close-btn_alert" id="js-close-btn">キャンセル</div>
					<input id="submit-btn_alert" type="submit" value="OK" />
				</div>
		      		<input type="hidden" name="action" value="8" />
				</div>
				<div class="black-bg_alert" id="js-black-bg09"></div>
		  </div>
	  	<!-- popup -->
	  	
	</div>
	</form>
	</div><!--use_912px-->


	<div class="item_info_box04">
		<form action="/seminar/<?=$smid?>" method="post" onclick="if(!confirm('出品者へのお問い合わせは、\nログインが必要です。')){return false;}">
			<input type="submit" value="お問い合わせはこちら" />
			<input type="hidden" name="action" value="4" />
		</form>
	</div>
	</div>

	<div class="detaile_inner_left"><!-- detaile_inner_left -->
	<div class="container_slider">
		<?if(is_file("{$_SERVER['SERVER_ROOT']}/upfile/seminar/{$smid}/01")){?>
			<ul class="slider thumb-item">
				<?for($i=1;$i<=10;$i++){ $n = str_pad($i,2,0,STR_PAD_LEFT);?>
				<?if(is_file("{$_SERVER['SERVER_ROOT']}/upfile/seminar/{$smid}/{$n}")){?>
				<li><img data-lazy="/img/upfile/seminar/<?=$smid?>/<?=$n?>" alt="" /></li>
				<?}?><?}?>
			</ul>

			<ul class="slider thumb-item-nav">
				<?for($i=1;$i<=10;$i++){ $n = str_pad($i,2,0,STR_PAD_LEFT);?>
				<?if(is_file("{$_SERVER['SERVER_ROOT']}/upfile/seminar/{$smid}/{$n}")){?>
				<li><img src="/img/upfile/seminar/<?=$smid?>/<?=$n?>" alt="" /></li>
				<?}?><?}?>
			</ul>
		<?}?>

	</div><!-- container_slider -->
	</div>
	</section>

	<section class="container_inner02 clearfix">
	<div class="detaile_inner_right02"><!-- detaile_inner_right -->

	<div class="div_info_BOX">
		<h3 class="title_h3">商品の説明</h3>
		<p class="display_667px_off">
			<?if(!$text){?>
					商品説明が設定されていません。
			<?}else{?>
					<?=nl2br($text)?><?}?>
		</p>
		<div class="text_wrapper display_667px_on">
			<p class="text hidden">
				<?if(!$text){?>
						商品説明が設定されていません。
					<?}else{?>
						<?=nl2br($text)?><?}?>
			</p>
			<?if($text){?><div class="show_more">続きを読む</div><?}?>
		</div>
	</div>

	<div class="item_info_box05">
	<h3 class="title_h3">この出品について</h3>

<div id="item_share">
<button id="copy-btn" class="js-copybtn">この出品をシェアする</button>

<!-- 左寄せキープ -->
<div id="item_share_text">
<span id="copy-text" class="js-copytext">夢を叶える百貨店
<br>おすすめ商品のお知らせ★
<br>
<br>【<?=$name?> <?=$sub_name?>】
<?php
echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>
<br>
<br>
<br>--------
<br>
<br>〈会員登録がお済でない方〉
<br>夢を叶える百貨店への
<br>かんたん無料登録はこちら
<br>https://<?=$_SERVER["tld"]?>/regist/</span>
</div>
</div>
<!-- 左寄せキープ -->

		<div class="controls_02">
			<form action="/seminar/<?=$smid?>" method="post" onclick="if(!confirm('事務局への報告は、\nログインが必要です。')){return false;}">
				<button type="submit" /><span class="material-symbols-outlined">campaign</span>この出品を事務局へ通報する</button>
				<input type="hidden" name="action" value="3" />
			</form>
		</div>
	</div>
	</div>

	<div class="detaile_inner_left02"><!-- detaile_inner_left -->
	<div class="spec_area_table">
		<dl>
			<dt>カテゴリ</dt><dd><?=$_category[$caid]?></dd>
		</dl>
		<dl>
			<dt>開催形態</dt>
			<dd><?if($style==1){?>
					対面 / 会場開催
				<?}else{?>
					オンライン / ウェブ開催
				<?}?>
			</dd>
			<?if($style==1){?>
				<dt>開催地区</dt>
				<dd><?if(isset($area)){?><?=$_addr1[$area]?><?}else{?>‐<?}?></dd>
				<dt>開催エリア</dt>
				<dd><?if(isset($place)){?><?=$place?><?}else{?>‐<?}?></dd>
				<dt>場所詳細 <i class="fas fa-paper-plane"></i></dt>
				<dd><span class="red_font_10px"><?if($seminar["address"]){?>※購入後にメールにて通知されます。<?}else{?>決定され次第、出品者より通知されます。必要に応じてお問い合わせください。<?}?></span></dd><?}?>
			<?if($style==2){?>
			    <dt>開催URL <i class="fas fa-paper-plane"></i></dt>
			    <dd><span class="red_font_10px"><?if($seminar["placeurl"]){?>購入後にメールにて通知されます。<?}else{?>決定され次第、出品者より通知されます。必要に応じてお問い合わせください。<?}?></span></dd><?}?>
		</dl>
		<dl>
			<dt>商品の補足</dt><dd><?if($text2){?><?=nl2br($text2)?><?}else{?>特記事項はありません<?}?></dd>
		</dl>
	</div>

	<!--プレビュー動画一覧-->
	<?if(isset($sample1) or isset($sample2) or isset($sample3)){?>
	<div class="preview_LINEUP_BOX">

		<?if(isset($seminar["sample1"])){
			//$parse_url = parse_url($seminar["sample1"]);
			//parse_str($parse_url["query"],$parse_str);
			preg_match("#(?<=v=|v\/|vi=|vi\/|youtu.be\/)[a-zA-Z0-9_-]{11}#", $seminar["sample1"], $matches);
			$embed = $matches[0];?>
			<div class="preview_iframe_BOX">
				<div class="img_BOX_course_inner">
			<iframe src="https://www.youtube.com/embed/<?=$embed?>" frameborder="0" allowfullscreen></iframe></div></div><?}?>

		<?if(isset($seminar["sample2"])){
			//$parse_url = parse_url($seminar["sample2"]);
			//parse_str($parse_url["query"],$parse_str);
			preg_match("#(?<=v=|v\/|vi=|vi\/|youtu.be\/)[a-zA-Z0-9_-]{11}#", $seminar["sample2"], $matches);
			$embed = $matches[0];?>
			<div class="preview_iframe_BOX">
				<div class="img_BOX_course_inner">
			<iframe src="https://www.youtube.com/embed/<?=$embed?>" frameborder="0" allowfullscreen></iframe></div></div><?}?>

		<?if(isset($seminar["sample3"])){
			//$parse_url = parse_url($seminar["sample3"]);
			//parse_str($parse_url["query"],$parse_str);
			preg_match("#(?<=v=|v\/|vi=|vi\/|youtu.be\/)[a-zA-Z0-9_-]{11}#", $seminar["sample3"], $matches);
			$embed = $matches[0];?>
			<div class="preview_iframe_BOX">
				<div class="img_BOX_course_inner">
			<iframe src="https://www.youtube.com/embed/<?=$embed?>" frameborder="0" allowfullscreen></iframe></div></div><?}?>

	</div><?}?>

		<h3 class="title_h3">出品者情報</h3>
        <div class="seller_box">
        	<div class="seller_img">
				<img src="/img/<?=is_file("{$_SERVER['SERVER_ROOT']}/upfile/user/{$uid1}/07")?"upfile/user/{$uid1}/07":"common/image_man.png"?>" alt="" />
			</div>
			<p><?if(!empty($user1["nickname"])){?><?=$user1["nickname"]?><?}else{?><?=$user1["name1"].$user1["name2"]?><?}?></p>
		</div>
			<?if($user1["plofile4"]){?>
				<div class="text_wrapper">
				<p class="text hidden"><?=nl2br($user1["plofile4"])?></p>
				<div class="show_more">続きを読む</div></div>
			<?}else{?>
				<p class="text_ hidden">出品者情報は現在、登録されていません。<br>設定まで今暫くお待ちください。</p>
			<?}?>
		<?if($uid2){?>
		<div class="seller_box">
        	<div class="seller_img">
				<img src="/img/<?=is_file("{$_SERVER['SERVER_ROOT']}/upfile/user/{$uid2}/07")?"upfile/user/{$uid2}/07":"common/image_man.png"?>" alt="" />
			</div>
			<p><?if(!empty($user2["nickname"])){?><?=$user2["nickname"]?><?}else{?><?=$user2["name1"].$user2["name2"]?><?}?></p>
		</div>
			<?if($user2["plofile4"]){?>
				<div class="text_wrapper">
				<p class="text hidden"><?=nl2br($user2["plofile4"])?></p>
				<div class="show_more">続きを読む</div></div>
			<?}else{?>
				<p class="text_ hidden">出品者情報は現在、登録されていません。<br>設定まで今暫くお待ちください。</p>
			<?}?>
		<?}?>
		<?if($uid3){?>
		<div class="seller_box">
        	<div class="seller_img">
				<img src="/img/<?=is_file("{$_SERVER['SERVER_ROOT']}/upfile/user/{$uid3}/07")?"upfile/user/{$uid3}/07":"common/image_man.png"?>" alt="" />
			</div>
			<p><?if(!empty($user3["nickname"])){?><?=$user3["nickname"]?><?}else{?><?=$user3["name1"].$user3["name2"]?><?}?></p>
		</div>
			<?if($user3["plofile4"]){?>
				<div class="text_wrapper">
				<p class="text hidden"><?=nl2br($user3["plofile4"])?></p>
				<div class="show_more">続きを読む</div></div>
			<?}else{?>
				<p class="text_ hidden">出品者情報は現在、登録されていません。<br>設定まで今暫くお待ちください。</p>
			<?}?>
		<?}?>

	</section>

	<?if(count($_seminar)){?>
	<section class="container_inner03">
		<h3 class="relation_h3"><span class="material-symbols-outlined">storefront</span>出品者の関連商品 / 4F Event market</h3>
		<div class="LINEUP_BOX">
			<?foreach($_seminar as $smid => $col){ extract($col);?>
			<?if($disp==1 or $disp==3){?>

			<div class="item">
				<a href="/seminar/<?=$smid?>">
				<div class="img_BOX01">
					<div class="img_BOX01_inner">
						<img style="object-fit: cover;height:100%;" src="/img/<?=is_file("{$_SERVER['SERVER_ROOT']}/upfile/seminar/{$smid}/01")?"upfile/seminar/{$smid}/01":"common/noimage.png"?>" alt=""/>
					</div>
				</div>

					<div class="text_BOX">
						<p class="overflow_clamp_2_14px"><?=$name?>　<?=$sub_name?></p>
						<div class="price_box price_box_3">
							<?if(!$pointamount1 and !$pointamount2){?><p>￥Free</p><?}?>
							<?if($pointamount1){?><p class="price_daiya"><?=number_format($pointamount1*((100-$discount)/100))?></p><?}?>
							<?if($pointamount2){?><p><span style="font-size: 15px;">￥</span><?=number_format($pointamount2*((100-$discount)/100))?></p><?}?>
						</div>
						<p class="text_note"><?=$_category[$caid]?></p>
				</div></a>
			</div><?}?><?}?>
		</div>
	</section><?}?>

	</div><!-- detaile_container -->

<script type="text/javascript">
$(function() {
$('.show_more2,.show_more').click(function() {
	var show_text = $(this).parent('.text_wrapper').find('.text');
	var small_height = 120 //This is initial height.
	var original_height = show_text.css({
		height: 'auto'
	}).height();

	if (show_text.hasClass('open')) {
		/*CLOSE*/
		show_text.height(original_height).animate({
			height: small_height
		}, 300);
		show_text.removeClass('open');
		$(this).text('続きを読む').removeClass('active');
		$(this).toggleClass("on-click");
	} else {
		/*OPEN*/
		show_text.height(small_height).animate({
			height: original_height
		}, 300, function() {
			show_text.height('auto');
		});
		show_text.addClass('open');
		$(this).addClass('active');
		$(this).toggleClass("on-click");
	}
});
})
</script>
<script type="text/javascript">
let copy_text = document.querySelector('#copy-text').textContent;
let copy_btn = document.querySelector('#copy-btn');

copy_btn.addEventListener(`click`, () => {

navigator.clipboard.writeText(copy_text).then(() => {
    // true
    alert('出品ページをコピーしました。\nLINEなどにペーストしてください。');
  }, () => {
    // false
    output.textContent = 'Could not copy.';
  });

});
</script>
<script type="text/javascript">
function popupImage() {
  var popup = document.getElementById('js-popup');
  if(!popup) return;

  var closeBtn = document.getElementById('js-close-btn');
  var showBtn = document.getElementById('jshow-popup');

  closePopUp(closeBtn);
  closePopUp(showBtn);
  function closePopUp(elem) {
    if(!elem) return;
    elem.addEventListener('click', function() {
      popup.classList.toggle('is-show');
	});
	elem.addEventListener('click',function(){
	mediaElem.pause();
    });
  }
}
popupImage();
</script>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc")?>