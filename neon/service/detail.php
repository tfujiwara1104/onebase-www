<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/head.inc")?>
<style type="text/css">body {background-color: #000;}footer,.smp_footer_div,.smp_footer_768,.smp_footer_576px {display: none;}header {display: none!important;}.main {margin-top: 55px;}</style>
<?extract($seminar)?>

<div class="view_header">
	<div class="view_header_title">
        <?if($today <= $date){?>
        	<a href="/neon/service/live.php"><span class="material-symbols-outlined">chevron_left</span><span class="view_header_title_"><?=$name?></span></a>
        <?}else{?>
        	<a href="/neon/service/archive.php"><span class="material-symbols-outlined">chevron_left</span><span class="view_header_title_"><?=$name?></span></a>
        <?}?>
    </div>
    <div class="view_header_logo"><img class="" src="/neon/img/common/neon_logo_white_240.png" alt="" /></div>
</div>
<section class="section_live_">
	<div class="section_live_left">
		<div class="live_contents_img">
			<div class="live_contents_img_inner">
        <?if(!empty($liveurl)){?>
         	<?if($type2 == 1 or empty($type2)){?>
				<iframe src="https://www.youtube-nocookie.com/embed/<?=$embed?>?loop=1&rel=0&showinfo=0<?=$embed2?>" frameborder="0" allowfullscreen autoplay;></iframe>
			<?}else{?>
				<div class="img_live_inner">
					<img src="/img/<?=is_file("{$_SERVER['SERVER_ROOT']}/upfile/seminar/{$smid}/01")?"upfile/seminar/{$smid}/01":"common/noimage.png"?>" alt="" />
					<div class="view_only_color"></div>
                        <div class="view_only_text" style="margin-top:-45px;"><p>Limited release.</p>
                        	<a class="view_only_fff" href="/neon/login/index.php">ログインしてください</a>
                        </div>
				</div><?}?>
		<?}elseif(empty($liveurl) and $text or $text2 or $url1 or $url2 or $url3){?>
			<div class="none_item_">
				<span class="material-symbols-outlined">description</span>
				<p class="">CONTENTS Only.</p>
				<span class="msg_info_p">こちらはテキストまたはリンクでのご案内です。</span>
			</div>
		<?}else{?>
			<div class="none_item_">
				<span class="material-symbols-outlined">live_tv</span>
				<p class="">配信待機中です</p>
				<span class="msg_info_p">しばらくお待ちください。</span>
			</div>
		<?}?>
				<!--<script type="text/javascript" src="/neon/service/api.php?smid=<?=$smid?>"></script>-->
			</div>
		</div>
		<?if($today <= $date){?>
		<div class="contents_desc">
			<p class="contents_desc_tag">配信予定</p>
			<p class="contents_desc_day"><span class="material-symbols-outlined">date_range</span><?=$date?>　<?if(!empty($time1)){?><span class="material-symbols-outlined">alarm_on</span><?=$time1?><?}?><?if(!empty($time2)){?>～<?=$time2?><?}?></p>
		</div><?}?>

		<div class="text_wrapper text_wrapper_">
			<p>
				<span><?=$name?></span>
				<span class="live_text_name">
					<?if($uid1){?>
						<?if($_sellername[$uid1]){?><?=$_sellername[$uid1]?>
						<?}else{?><?=$_user[$uid1]?><?}?><?}?>
					<?if($uid2){?>
						<?if($_sellername[$uid2]){?><?=$_sellername[$uid2]?>
						<?}else{?><?=$_user[$uid2]?><?}?><?}?>
					<?if($uid3){?>
						<?if($_sellername[$uid3]){?><?=$_sellername[$uid3]?>
						<?}else{?><?=$_user[$uid3]?><?}?><?}?>｜ <?=$date?>　<?=$_seminar_live_category[$live_category]?><?if($type2 >= 2){?><br>#<?=$_user_oem_validity2[$type2]?>向け<?}?>
				</span>
			</p>
		</div>
		<?if($text){?>
		<div class="text_wrapper">
			<p class="live_text hidden"><?=@$seminar["text"]?></p>
			<div class="show_more">続きを読む</div>
		</div><?}?>
	</div>


	<div class="section_live_right sticky">
		<h2 class="display_667px_off">チャプターの選択</h2>
		<?foreach($recture as $key => $val){?>
 		<?if($key==1){if(!$val["name"]){?>	<p class="contents_desc_day_">チャプターは設定されていません。</p><?}?><?}?>
        <?if(!$val["name"]) continue;?>
			<form action="/neon/service/<?=$smid?>" method="post">
				<input type="submit" value="<?=$val["name"]?>（<?=$val["time"]?>）" onclick="if(!confirm('チャプター再生をします。\n再生ボタンを押してください。')){return false;}"/>
				<input type="hidden" name="action" value="1" />
				<input type="hidden" name="token" value="<?=$val["time"]?>" />
			</form>
			<?}?>
			<?if($text2 or $url1 or $url2 or $url3){?>
			<h2 class="mt40px display_667px_off">特記項目</h2>
			<div class="notes_text_box">
				<?if($text2){?><p><?=$text2?></p><?}?>
				<?if($type2 == 1){?>
					<p class="notes_text_box_link"><span class="material-symbols-outlined">link</span>リンク情報<i class="far fa-arrow-to-bottom"></i></p>
					<?if($url1){?><a href="<?=$url1?>" target="_blank" rel="noopener noreferrer"><?if($url_name1){?><?=$url_name1?><?}else{?><?=$url1?><?}?></a><?}?>
					<?if($url2){?><a href="<?=$url2?>" target="_blank" rel="noopener noreferrer"><?if($url_name2){?><?=$url_name2?><?}else{?><?=$url2?><?}?></a><?}?>
					<?if($url3){?><a href="<?=$url3?>" target="_blank" rel="noopener noreferrer"><?if($url_name3){?><?=$url_name3?><?}else{?><?=$url3?><?}?></a><?}?>
					<?if($url4){?><a href="<?=$url4?>" target="_blank" rel="noopener noreferrer"><?if($url_name4){?><?=$url_name4?><?}else{?><?=$url4?><?}?></a><?}?>
					<?if($url5){?><a href="<?=$url5?>" target="_blank" rel="noopener noreferrer"><?if($url_name5){?><?=$url_name5?><?}else{?><?=$url5?><?}?></a><?}?>
					<?if($url6){?><a href="<?=$url6?>" target="_blank" rel="noopener noreferrer"><?if($url_name6){?><?=$url_name6?><?}else{?><?=$url6?><?}?></a><?}?>
					<?if($url7){?><a href="<?=$url7?>" target="_blank" rel="noopener noreferrer"><?if($url_name7){?><?=$url_name7?><?}else{?><?=$url7?><?}?></a><?}?>
					<?if($url8){?><a href="<?=$url8?>" target="_blank" rel="noopener noreferrer"><?if($url_name8){?><?=$url_name8?><?}else{?><?=$url8?><?}?></a><?}?>
					<?if($url9){?><a href="<?=$url9?>" target="_blank" rel="noopener noreferrer"><?if($url_name9){?><?=$url_name9?><?}else{?><?=$url9?><?}?></a><?}?>
					<?if($url10){?><a href="<?=$url10?>" target="_blank" rel="noopener noreferrer"><?if($url_name10){?><?=$url_name10?><?}else{?><?=$url10?><?}?></a><?}?>
				<?}else{?>
					<p class="notes_text_box_link notes_text_box_link_span"><span class="material-symbols-outlined">link</span>リンク情報<i class="far fa-arrow-to-bottom"></i></p>
					<?if($url1){?><span class="notes_text_box_link_span_"><?=$url_name1?></span><?}?>
					<?if($url2){?><span class="notes_text_box_link_span_"><?=$url_name2?></span><?}?>
					<?if($url3){?><span class="notes_text_box_link_span_"><?=$url_name3?></span><?}?>
					<?if($url4){?><span class="notes_text_box_link_span_"><?=$url_name4?></span><?}?>
					<?if($url5){?><span class="notes_text_box_link_span_"><?=$url_name5?></span><?}?>
					<?if($url6){?><span class="notes_text_box_link_span_"><?=$url_name6?></span><?}?>
					<?if($url7){?><span class="notes_text_box_link_span_"><?=$url_name7?></span><?}?>
					<?if($url8){?><span class="notes_text_box_link_span_"><?=$url_name8?></span><?}?>
					<?if($url9){?><span class="notes_text_box_link_span_"><?=$url_name9?></span><?}?>
					<?if($url10){?><span class="notes_text_box_link_span_"><?=$url_name10?></span><?}?>
					<?if($url1 or $url2 or $url3){?><p class="notes_text_box_p">*アクセスは会員アップグレードが必要です。</p><?}?>
				<?}?>
			</div><?}?>
	</div>
</section>

<script type="text/javascript">
$(function() {
$('.show_more').click(function() {
	var show_text = $(this).parent('.text_wrapper').find('.live_text');
	var small_height = 65 //This is initial height.
	var original_height = show_text.css({
		height: 'auto'
	}).height();

	if (show_text.hasClass('open')) {
		/*CLOSE*/
		show_text.height(original_height).animate({
			height: small_height
		}, 300);
		show_text.removeClass('open');
		$(this).text('すべて見る').removeClass('active');
	} else {
		/*OPEN*/
		show_text.height(small_height).animate({
			height: original_height
		}, 300, function() {
			show_text.height('auto');
		});
		show_text.addClass('open');
		$(this).text('閉じる').addClass('active');
	}
});
})
</script>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/foot.inc")?>
