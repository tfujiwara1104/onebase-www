<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>
<!-- <script type="text/javascript">
	let url = new
	URL(window.location.href);
	let params = url.searchParams;
	console.log(params.get('id'));
	let params__ = params.get('id');
</script> -->
<link rel="stylesheet" href="/css/market_.css" type="text/css" />
<style type="text/css">
.slick-slider .slick-track,.slick-slider .slick-list {transform: unset !important;}
.nav_rearch {display: none!important;}.smp_567px_use {display: flex;}
@media (max-width:667px) {.smp_footer_div {background-color: transparent;}}
@media (max-width:567px) {
.smp_footer,.smp_footer_576px,.detaile_floor,.detail_pankuzu_list,.sf-back-to-top,.pre_return {display: none!important;}.header_hamburge {display: block !important;}}
</style>
<?if($item["product_type"]==1){?><style>.free_return {display: flex!important;}</style><?}?>
<?if($item["product_type"]==2){?><style>.skill_return {display: flex!important;}</style><?}?>
<?extract($item)?>



<div class="detaile_floor">
	<div class="detaile_floor_innner">
		<p class="detaile_floor_name">
			<?if($item["product_type"]==1){?>
				<a href="/item/index.php"><span class="material-symbols-outlined">storefront</span>フリーマーケットをみる</a><?}?>
			<?if($item["product_type"]==2){?>
				<a href="/item/index_s.php"><span class="material-symbols-outlined">storefront</span>スキルマーケットをみる</a><?}?>
		</p>
	</div>
</div>
<div class="detaile_container">
	<p class="detail_pankuzu_list">
		<?if($item["product_type"]==1){?><a href="/item/index.php">フリーマーケット</a><?}?>
		<?if($item["product_type"]==2){?><a href="/item/index_s.php">スキルマーケット</a><?}?>
		 / <?=$_category[$caid]?> / <?=$name?><!--  / <span id="params_"></span> -->
	</p>

	<script type="text/javascript">
		let params_ = document.getElementById("params_");
		params_.innerHTML = params__;
	</script>

	<section class="container_inner01 clearfix">
	<div class="detaile_inner_right"><!-- detaile_inner_right -->
	<?if($startdate >= date("Y-m-d", strtotime($new_day))){?>
		<span class="startdate_NEW">NEW</span><?}?>
	<?if($discount){?><span class="notice_tag"><?=$discount?>%割引</span><?}?>
	<?if($selltype==2){?><span class="notice_tag">お見積り</span><?}?>
	<?if($pointamount1){?><span class="notice_tag">ダイヤモンド決済</span><?}?>
	<?if($sell_limit!=1){?><span class="notice_tag">現品限り</span><?}?>
	<?if($postage==2 and $pointamount2){?><span class="notice_tag">送料無料</span><?}?>
	<?if(!empty($affiliate_rate)){?><span class="notice_tag">クーポン対象</span><?}?>

	<h2 class="item_name"><?=$name?><br><span class="item_sub_name"><?=$sub_name?></span></h2>
	<p class="item_id">#<?=@$item["itid"]?></p>
	<div class="item_info_price_box">
		<?if(!$is_sale){?>
			<p class="sale_finished">販売期間が終了しました</p>
		<!--申込中の表示-->
		<?}else if($sold_out and $sell_limit==2){?>
			<p class="sale_finished">販売終了しました</p>
		<?}?>
		<?if($selltype==1){?>
	      	<?if($pointamount1){?>
	      		<p class="price_daiya" style="background-position:12px;"><?=number_format(ceil(strval(($pointamount1*((100-$discount)/100)))))?></p><?}?>

	      	<?if($pointamount2){?>
	      		<?if($discount){?>
	      			<?if($postage==1){?>
						<p><s style="font-size: 14px;">￥<?=number_format(ceil(strval($pointamount2)))?></s> ￥<?=number_format(ceil(strval(($pointamount2*((100-$discount)/100)))))?><span class="tax_included">（税込）</span></p>
						<?}?>

					<?if($postage==2 or $postage==3){?>
						<p><s style="font-size: 14px;">￥<?=number_format(ceil(strval($pointamount2)))?></s> ￥<?=number_format(ceil(strval(($pointamount2*((100-$discount)/100)))))?><span class="tax_included">（税込）</span></p><?}?>

	      		<?}else{?>

					<?if($postage==1){?>
						<p>￥<?=number_format(ceil(strval(($pointamount2*((100-$discount)/100)))))?><span class="tax_included">（税込）</span></p><?}?>

					<?if($postage==2 or $postage==3){?>
						<p>￥<?=number_format(ceil(strval(($pointamount2*((100-$discount)/100)))))?><span class="tax_included">（税込）</span></p><?}?>

				<?}?><?}?><?}?>

		<?if($selltype==2){?>
			<p>￥お見積り</p><?}?>
	</div>



	<div class="item_info_box"><!-- 支払、ダイヤモンド還元表示 -->
		<?if($pointamount1){?>
			<p><i class="fas fa-cash-register"></i> ダイヤモンド決済</p>
		<?}elseif($pointamount2){?>
			<p><i class="fas fa-cash-register"></i> クレジット決済 , ポイント決済</p>
		<?}else{?>
			<p><i class="fas fa-cash-register"></i> お問い合わせください</p>
		<?}?>
		<p><i class="fas fa-gem"></i>
		<?if($selltype==1){?>
	      	<?if($pointamount1){?>
	      		<?=number_format(ceil(strval(($pointamount1*((100-$discount)/100))*0.05)))?><?}?>
	      	<?if($pointamount2){?>
	      		<?if($discount){?>
	      			<?if($postage==1){?>
							<?=number_format(ceil(strval(($pointamount2*((100-$discount)/100))*0.05)))?><?}?>
					<?if($postage==2 or $postage==3){?>
						<?=number_format(ceil(strval(($pointamount2*((100-$discount)/100))*0.05)))?><?}?>

	      		<?}else{?>

					<?if($postage==1){?>
						<?=number_format(ceil(strval(($pointamount2*((100-$discount)/100))*0.05)))?><?}?>
					<?if($postage==2 or $postage==3){?>
						<?=number_format(ceil(strval(($pointamount2*((100-$discount)/100))*0.05)))?><?}?>

				<?}?><?}?><?}else{?>価格決定後に<?}?><span>ダイヤモンド還元</span></p>
	</div>
	<div class="item_info_box02"><!-- 備考表示 -->
		<p>販売期間<span><?=@$item["startdate"]?$item["startdate"]:""?> ～ <?if($enddate){?><?=@$item["enddate"]?$item["enddate"]:""?><?}?></span></p>
		<p>在庫数<span><?if($sell_limit==1){?>在庫あり<?}else{?>現品限り<?}?></span></p>
		<p>配送料<span>
			<?if($postage==1 and $pointamount2){?>￥<?=number_format(ceil(strval($postage_fee)))?>
			<?}elseif($postage==2 and $pointamount2){?>送料無料
			<?}else{?>‐<?}?></span></p>
	</div>
	<div class="use_912px">
	<form action="/item/<?=$itid?>" method="post" enctype="multipart/form-data">
	<div class="item_info_box03 smp_bottom_button_fixed">

		<?if($sell_limit==1){?>
			<div class="spinner_area">
			    <input type="button" value="－" class="btnspinner" data-cal="-1" data-target=".counter1">
			    <input id="quantity" type="number" class="counter1" data-max="100" data-min="1
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

		<?if($is_sale){?>
			<?if($sold_out and $sell_limit==2){?>
				<div class="dummy__btn">
					SOLD OUT
				</div>
			<?}elseif($selltype==2){?>
					<input type="submit" style="background-color: #106f51;" value="ログインして購入へ進む" onclick="if(!confirm('ログインを行ないます。\n会員登録がお済でない方は無料登録からご登録ください。')){return false;}" />
					<input type="hidden" name="params__" value="params__" />
		      		<input type="hidden" name="action" value="8" />
			<?}else{?>
				<div class="dummy__btn" style="background-color: #106f51;" id="jshow-popup">
					ログインして購入へ進む
				</div>
		 	<?}?>
		<?}else{?>
			<div class="dummy__btn">
				販売終了しました
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
		<form action="/item/<?=$itid?>" method="post" onclick="if(!confirm('出品者へのお問い合わせは、\nログインが必要です。')){return false;}">
			<input type="submit" value="お問い合わせはこちら" />
			<input type="hidden" name="action" value="4" />
		</form>
	</div>
	</div>

	<div class="detaile_inner_left"><!-- detaile_inner_left -->
	<div class="container_slider">

		<?if(is_file("{$_SERVER['SERVER_ROOT']}/upfile/item/{$itid}/01")){?>
			<ul class="slider thumb-item">
				<?for($i=1;$i<=10;$i++){ $n = str_pad($i,2,0,STR_PAD_LEFT);?>
				<?if(is_file("{$_SERVER['SERVER_ROOT']}/upfile/item/{$itid}/{$n}")){?>
				<li><img data-lazy="/img/upfile/item/<?=$itid?>/<?=$n?>" alt="" /></li>
				<?}?><?}?>
			</ul>

			<ul class="slider thumb-item-nav">
				<?for($i=1;$i<=10;$i++){ $n = str_pad($i,2,0,STR_PAD_LEFT);?>
				<?if(is_file("{$_SERVER['SERVER_ROOT']}/upfile/item/{$itid}/{$n}")){?>
				<li><img src="/img/upfile/item/<?=$itid?>/<?=$n?>" alt="" /></li>
				<?}?><?}?>
			</ul>
		<?}?>

		<?if($top_img){?>
			<ul class="slider thumb-item">
				<li><img class="sp-image" src="<?=$top_img?>" alt="" /></li>
				<?if($top_img2){?><li><img class="sp-image" src="<?=$top_img2?>" alt="" /></li><?}?>
				<?if($top_img3){?><li><img class="sp-image" src="<?=$top_img3?>" alt="" /></li><?}?>
				<?if($top_img4){?><li><img class="sp-image" src="<?=$top_img4?>" alt="" /></li><?}?>
				<?if($top_img5){?><li><img class="sp-image" src="<?=$top_img5?>" alt="" /></li><?}?>
				<?if($top_img6){?><li><img class="sp-image" src="<?=$top_img6?>" alt="" /></li><?}?>
				<?if($top_img7){?><li><img class="sp-image" src="<?=$top_img7?>" alt="" /></li><?}?>
				<?if($top_img8){?><li><img class="sp-image" src="<?=$top_img8?>" alt="" /></li><?}?>
				<?if($top_img9){?><li><img class="sp-image" src="<?=$top_img9?>" alt="" /></li><?}?>
				<?if($top_img10){?><li><img class="sp-image" src="<?=$top_img10?>" alt="" /></li><?}?>
			</ul>
			<ul class="slider thumb-item-nav">
				<li><img class="sp-image" src="<?=$top_img?>" alt="" /></li>
				<?if($top_img2){?><li><img class="sp-image" src="<?=$top_img2?>" alt="" /></li><?}?>
				<?if($top_img3){?><li><img class="sp-image" src="<?=$top_img3?>" alt="" /></li><?}?>
				<?if($top_img4){?><li><img class="sp-image" src="<?=$top_img4?>" alt="" /></li><?}?>
				<?if($top_img5){?><li><img class="sp-image" src="<?=$top_img5?>" alt="" /></li><?}?>
				<?if($top_img6){?><li><img class="sp-image" src="<?=$top_img6?>" alt="" /></li><?}?>
				<?if($top_img7){?><li><img class="sp-image" src="<?=$top_img7?>" alt="" /></li><?}?>
				<?if($top_img8){?><li><img class="sp-image" src="<?=$top_img8?>" alt="" /></li><?}?>
				<?if($top_img9){?><li><img class="sp-image" src="<?=$top_img9?>" alt="" /></li><?}?>
				<?if($top_img10){?><li><img class="sp-image" src="<?=$top_img10?>" alt="" /></li><?}?>
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
					<?=nl2br($text)?><br>
					<?if($text3){?><?=nl2br($text3)?><br><?}?>
					<?if($text4){?><?=nl2br($text4)?><?}?><?}?>
			</p>
			<div class="text_wrapper display_667px_on">
				<p class="text hidden">
					<?if(!$text){?>
						商品説明が設定されていません。
					<?}else{?>
						<?=nl2br($text)?><br>
						<?if($text3){?><?=nl2br($text3)?><br><?}?>
						<?if($text4){?><?=nl2br($text4)?><?}?><?}?>
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
</div>
</div>
<!-- 左寄せキープ -->

			<div class="controls_02">
				<form action="/item/<?=$itid?>" method="post" onclick="if(!confirm('事務局への報告は、\nログインが必要です。')){return false;}">
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
			<?if($product_type==1){?>
				<dl>
					<dt>ブランド</dt><dd><?if($brand){?><?=$brand?><?}else{?>‐<?}?></dd>
					<dt>商品の状態</dt><dd><?if($quality){?><?=$_item_quality[$quality]?><?}else{?>‐<?}?></dd>
				</dl>

			<?}?>
			<?if($product_type==2){?>
				<dl>
					<dt>商用利用</dt><dd><?if($commercial){?><?=$_item_commercial[$commercial]?><?}else{?>‐<?}?></dd>
					<dt>著作権譲渡</dt><dd><?if($copyright){?><?=$_item_copyright[$copyright]?><?}else{?>‐<?}?></dd>
				</dl>
				<dl>
					<dt>提供方法</dt><dd><?if($provide){?><?=$provide?><?}else{?>‐<?}?></dd>
					<dt>データ納品</dt><dd><?if($deliv_day){?><?=$_item_deliv_day[$deliv_day]?><?}else{?>‐<?}?></dd>
				</dl>
			<?}?>
			<?if($postage==1 or $postage==2){?>
			<dl>
				<dt>配送方法</dt><dd><?=$_item_pos_method[$pos_method]?></dd>
				<dt>発送地域</dt><dd><?=$_addr1[$pos_area]?></dd>
				<dt>発送目安</dt><dd><?=$_item_pos_day[$pos_day]?></dd>
			</dl><?}?>
			<dl>
				<dt>商品の補足</dt><dd><?if($text2){?><?=nl2br($text2)?><?}else{?>特記事項はありません<?}?></dd>
			</dl>
		</div>


		<!--プレビュー動画一覧-->
		<?if(isset($sample1) or isset($sample2) or isset($sample3)){?>
		<div class="preview_LINEUP_BOX">

			<?if(isset($item["sample1"])){
				preg_match("#(?<=v=|v\/|vi=|vi\/|youtu.be\/)[a-zA-Z0-9_-]{11}#", $item["sample1"], $matches);
				$embed = $matches[0];?>
				<div class="preview_iframe_BOX">
					<div class="img_BOX_course_inner">
						<iframe src="https://www.youtube.com/embed/<?=$embed?>" frameborder="0" allowfullscreen></iframe>
					</div>
				</div><?}?>

			<?if(isset($item["sample2"])){
				preg_match("#(?<=v=|v\/|vi=|vi\/|youtu.be\/)[a-zA-Z0-9_-]{11}#", $item["sample2"], $matches);
				$embed = $matches[0];?>
				<div class="preview_iframe_BOX">
					<div class="img_BOX_course_inner">
						<iframe src="https://www.youtube.com/embed/<?=$embed?>" frameborder="0" allowfullscreen></iframe>
					</div>
				</div><?}?>

			<?if(isset($item["sample3"])){
				preg_match("#(?<=v=|v\/|vi=|vi\/|youtu.be\/)[a-zA-Z0-9_-]{11}#", $item["sample3"], $matches);
				$embed = $matches[0];?>
				<div class="preview_iframe_BOX">
					<div class="img_BOX_course_inner">
						<iframe src="https://www.youtube.com/embed/<?=$embed?>" frameborder="0" allowfullscreen></iframe>
					</div>
				</div><?}?>

		</div><?}?>

		<h3 class="title_h3 mt50px">出品者情報</h3>
        <div class="seller_box">
        	<div class="seller_img">
				<img src="/img/<?=is_file("{$_SERVER['SERVER_ROOT']}/upfile/user/{$adid}/07")?"upfile/user/{$adid}/07":"common/noimage.png"?>" alt="" />
			</div>
			<p><?if(!empty($user1["nickname"])){?><?=$user1["nickname"]?><?}else{?><?=$user1["name1"].$user1["name2"]?><?}?></p>
		</div>
		<div class="text_wrapper">
			<?if($product_type==1){?>
				<?if($user1["plofile1"]){?>
					<p class="text hidden"><?=nl2br($user1["plofile1"])?></p>
					<div class="show_more">続きを読む</div>
				<?}else{?>
					<p class="text hidden">出品者情報は現在、登録されていません。<br>設定まで今暫くお待ちください。</p>
				<?}?>
			<?}?>
			<?if($product_type==2){?>
				<?if($user1["plofile2"]){?>
					<p class="text hidden"><?=nl2br($user1["plofile2"])?></p>
					<div class="show_more">続きを読む</div>
				<?}else{?>
					<p class="text hidden">出品者情報は現在、登録されていません。<br>設定まで今暫くお待ちください。</p>
				<?}?>
			<?}?>
		</div>
	</section>

	<?if(count($_item)){?>
	<section class="container_inner03">

		<h3 class="relation_h3"><span class="material-symbols-outlined">storefront</span>出品者の関連商品
			<?if($product_type==1){?>/ 1F Free market<?}?>
			<?if($product_type==2){?>/ 2F Skill market<?}?>
		</h3>

		<div class="LINEUP_BOX">
		<?foreach($_item as $itid => $col){ extract($col);?>
		<?if($disp==1 or $disp==3){?>

			<div class="item">
				<a href="/item/<?=$itid?>">
				<div class="img_BOX01">
				<div class="img_BOX01_inner">
						<?if($top_img){?><img style="object-fit: cover;height:100%;" src="<?=$top_img?>" alt="" /><?}?>
						<?if(!$top_img){?><img style="object-fit: cover;height:100%;" src="/img/<?=is_file("{$_SERVER['SERVER_ROOT']}/upfile/item/{$itid}/01")?"upfile/item/{$itid}/01":"common/noimage.png"?>" alt="" /><?}?>
					</div>
				</div>

					<div class="text_BOX">
						<p class="overflow_clamp_2_14px"><?=$name?>　<?=$sub_name?></p>
						<div class="price_box price_box_3">
							<?if($selltype==1){?>
							<?if($pointamount1){?>
								<p class="price_daiya"><?=number_format($pointamount1*((100-$discount)/100))?></p><?}?>

							<?if($pointamount2){?>
								<p><span>￥</span><?=number_format($pointamount2*((100-$discount)/100))?></p><?}?><?}?>

							<?if($selltype==2){?>
									<p class="mistumori_price">￥<span class="mistumori_price_span">お見積り</span></p><?}?>
						</div>
						<p class="text_note"><?=$_category[$caid]?></p>
				</div></a>
			</div><?}?><?}?>
		</div>
	</section><?}?>

	</div><!-- detaile_container -->

<!-- 購入確認画面　共通画面表示 -->

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