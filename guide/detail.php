<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>

  <div class="breadcrumb">
    <div class="inner">
    	<a class="top_pankuzu" href="/"><span>トップ</span></a>
    	<a class="guide_pankuzu" href="/guide/archive.php"><span>ご利用ガイド</span></a>
    	<span><?=$_contents_["title"]?></span>
    </div>
  </div>
  <ul class="guide_list">
		<li>
		  <?foreach($_contents__ as $ctid => $col){ extract($col);?>
				<?if($disp==1){?>
				<a href="/guide/<?=$ctid?>"><?=$title?></a>
			<?}?><?}?>
		</li>
	</ul>

<section class="newsListPage">
	<div class="inner-articlePage">
		<h1 class="articlePage_contents_ttl"><?=$_contents_["title"]?></h1>
		<div class="articlePage_contents_date">最終更新日：<?=$_contents_["date"]?></div>
		<figure class="articlePage_contents_photo">
			<picture>
				<?if(is_file("{$_SERVER['SERVER_ROOT']}/upfile/contents/{$ctid}/01")){?>
					<img src="/img/upfile/contents/<?=$ctid?>/01" alt="" />
				<?}else{?>
					<img src="/img/common/information_def_img.jpg" alt="" />
				<?}?>
			</picture>
		</figure>
		<p class="articlePage_contents_text"><?=$_contents_["text"]?></p>
		<?if($_contents_["url"]){?>
		<div class="content_url"><p>関連情報はこちら</p><a href="<?=$_contents_["url"]?>" target="_blank" rel="noopener noreferrer"><?=$_contents_["url"]?></a></div><?}?>
		<a href="#" class="return_a" onclick="javascript:window.history.back(-1);return false;"><i class="fas fa-chevron-left"></i>　総合案内一覧に戻る</a>
	</div>
</section>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc")?>