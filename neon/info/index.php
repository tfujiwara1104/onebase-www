<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/head.inc")?>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/sticky_area.inc")?>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/smp_select/info_.inc")?>
<style type="text/css">#info__ {background-color: #dfdfdf!important;}</style>
<section class="section_www_">
	<h1>お知らせ</h1>
	<?=pagenavi($totalcnt,$pno)?>
	<p class="pagenavi_num_noline"><?=$totalcnt?>件中/<?=$startnum+1?>件～<?=$endnum?>件 を表示</p>
	<?foreach($_contents as $ctid => $col){ extract($col);?>

	<?if($disp==1){?>
	<input id="acd-check<?=$ctid?>" class="acd-check" type="checkbox">
	<label class="acd-label" for="acd-check<?=$ctid?>">
		<span class="info_date"><?=$date?></span>
		<span class="info_text"><?=$title?></span>
	</label>
	<div class="acd-content">
	  <p class="acd-content_p"><?=$text?></p>
	</div><?}?><?}?>

	<?=pagenavi($totalcnt,$pno)?>

	<a href="#" class="return_a" onclick="javascript:window.history.back(-1);return false;"><i class="fas fa-chevron-left"></i>　前の画面に戻る</a>
</section>

</div><!--sticky_area_left-->
</div><!--sticky_area_inner-->
</div><!--sticky_area-->
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/foot.inc")?>