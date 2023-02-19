<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>
<link rel="stylesheet" href="/css/top.css" type="text/css" />
<section class="section_kv">
	<div id="particles-js"></div>
	<div class="kv_div">
		<img class="" src="/img/common/kv_top_logo.png" alt="" />
		<p>
		<a href="/item/index.php">1F</a><a href="/item/index_s.php">2F</a><a href="/course/index.php">3F</a><a href="/seminar/index.php">4F</a><a href="/guide/"><span class="material-symbols-outlined md-light">map</span></a></p>
	</div>
	<div class="kv_bottom_area">
		<div class="sns_kv">
			<a href="https://lin.ee/j1c4rBK" target="_blank" rel="noopener noreferrer"><i class="fab fa-line fa-fw"></i></a>
		</div>
		<div class="kv_bottom_area_inner">
			<p class="kv_bottom_area_inner_p">NEWS</p>
			<?$counter =0;?>
			<?foreach($_contents as $ctid => $col){ extract($col);?>
			<p><?=$date?>　<?=$title?></p>
			<?if($counter >= 1){?><? break;?><?}?>
			<? $counter++;?>
			<?}?>
			<a class="info_a_" href="/information.php">...もっとみる</a>

		</div>
	</div>
</section>

<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script type="text/javascript" src="/js/contents.js"></script>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc")?>