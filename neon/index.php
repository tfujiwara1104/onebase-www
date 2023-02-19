<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/head.inc")?>
<style type="text/css">.main>div {background-color: #080808!important;}</style>
<section class="section_kv">
	<div id="particles-js"></div>
	<div class="kv_div">
		<h1 class="display_567px_off">ビジネスを通して人として共にカッコ良く成長する
		<br>女性向けプライベート・コンサルティング・コミュニティ</h1>
		<h1 class="display_567px_on">ビジネスを通して 人として<br>共にカッコ良く成長する 女性向け<br>プライベート・コンサルティング・コミュニティ</h1>
		<img class="" src="/neon/img/common/neon_logo_white_1200.png" alt="" />
	</div>

	<div class="kv_bottom_area">
			<div class="sns_kv">
				<p>公式SNS</p>
				<a href="https://www.instagram.com/moeko_tate0316/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram fa-fw"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100027498694185" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f fa-fw"></i></a>
                <a href="https://bit.ly/3OUBcqc" target="_blank" rel="noopener noreferrer"><i class="fab fa-line fa-fw"></i></a>
                <a href="https://profile.ameba.jp/ameba/moeko141066-23/" target="_blank" rel="noopener noreferrer"><i class="fas fa-blog fa-fw"></i></a>
			</div>
		<div class="kv_bottom_area_inner">
			<p class="kv_bottom_area_inner_p">NEWS</p>
			<?$counter =0;?>
			<?foreach($_contents as $ctid => $col){ extract($col);?>
			<p><?=$date?>　<?=$title?></p>
			<?if($counter >= 1){?><? break;?><?}?>
			<? $counter++;?>
			<?}?>
			<a class="info_a" href="/neon/info/index.php">...もっとみる</a>
		</div>
	</div>
</section>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script type="text/javascript" src="/js/contents.js"></script>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/foot.inc")?>