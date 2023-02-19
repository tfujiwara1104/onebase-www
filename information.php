<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>

<!-- <form action="<?=$self?>">
	<div style="display: flex;">
		<?showradio($_category,"s","caid",0," onclick=\"this.form.submit()\"")?>
	</div>
</form> -->
<section class="section_www_info">
	<div class="section_www_info_inner">
		<div class="sectionHd">
			<h1 class="sectionTtl">総合案内</h1>
		</div>
		<?=pagenavi($totalcnt,$pno)?>
		<p class="pagenavi_num_noline"><?=$totalcnt?>件中/<?=$startnum+1?>件～<?=$endnum?>件 を表示</p>
		<?foreach($_contents as $ctid => $col){ extract($col);?>
		<?if($disp==1){?>
		<ul class="newsListPage_lists">
			<li class="newsListPage_item"><a href="">
				<time class="newsListPage_date"><?=$date?></time>
				<p class="newsListPage_ttl"><?=$title?></p>
			</a></li>
			<?=$text?>

		</ul>
		<?}?><?}?>

		<?=pagenavi($totalcnt,$pno)?>
	</div>
</section>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc")?>