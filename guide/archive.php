<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>
  
  <div class="guide_bg"><h1 class="sectionTtl">ご利用ガイド</h1></div>
  <div class="breadcrumb">
    <div class="inner">
    	<a class="top_pankuzu" href="/"><span>トップ</span></a>
    	<span>ご利用ガイド</span>
    </div>
  </div>

  <section class="section_www_guide">
	<div class="section_www_guide_inner">
		<div class="sectionHd">
			<h2>各項目から探す</h2>
		</div>
		<div class="about_contain">

			<div class="about_content">
			  <p><span class="material-symbols-outlined">local_library</span>初めての方へ</p>
			  	<?if($_contents_01){?>
			  		<ul class="newsListPage_lists">
					  	<?foreach($_contents_01 as $ctid => $col){ extract($col);?>
							<?if($disp==1){?>
								<li class="newsListPage_item"><a href="/guide/<?=$ctid?>"><?=$title?></a></li>
							<?}?><?}?>
						</ul>
					<?}else{?><span class="in_preparation">現在、ガイド準備中です。</span><?}?>
			</div>
			<div class="about_content">
			  <p><span class="material-symbols-outlined">person_add</span>会員登録・ログイン</p>
			  	<?if($_contents_02){?>
				  	<ul class="newsListPage_lists">
				  		<?foreach($_contents_02 as $ctid => $col){ extract($col);?>
							<?if($disp==1){?>
								<li class="newsListPage_item"><a href="/guide/<?=$ctid?>"><?=$title?></a></li>
							<?}?><?}?>
						</ul>
					<?}else{?><span class="in_preparation">現在、ガイド準備中です。</span><?}?>
			</div>
			<div class="about_content">
			  <p><span class="material-symbols-outlined">settings_account_box</span>会員情報について</p>
			  	<?if($_contents_03){?>
			  		<ul class="newsListPage_lists">
				  		<?foreach($_contents_03 as $ctid => $col){ extract($col);?>
							<?if($disp==1){?>
								<li class="newsListPage_item"><a href="/guide/<?=$ctid?>"><?=$title?></a></li>
							<?}?><?}?>
						</ul>
					<?}else{?><span class="in_preparation">現在、ガイド準備中です。</span><?}?>
			</div>
			<div class="about_content">
			  <p><span class="material-symbols-outlined">shopping_bag</span>購入について</p>
			  	<?if($_contents_04){?>
			  		<ul class="newsListPage_lists">
				  		<?foreach($_contents_04 as $ctid => $col){ extract($col);?>
							<?if($disp==1){?>
								<li class="newsListPage_item"><a href="/guide/<?=$ctid?>"><?=$title?></a></li>
							<?}?><?}?>
						</ul>
					<?}else{?><span class="in_preparation">現在、ガイド準備中です。</span><?}?>
			</div>
			<div class="about_content">
			  <p><span class="material-symbols-outlined">storefront</span>出品について</p>
			  	<?if($_contents_05){?>
				  	<ul class="newsListPage_lists">
				  		<?foreach($_contents_05 as $ctid => $col){ extract($col);?>
							<?if($disp==1){?>
								<li class="newsListPage_item"><a href="/guide/<?=$ctid?>"><?=$title?></a></li>
							<?}?><?}?>
						</ul>
					<?}else{?><span class="in_preparation">現在、ガイド準備中です。</span><?}?>
			</div>
			<div class="about_content">
			  <p><span class="material-symbols-outlined">cancel</span>キャンセル・返品・交換</p>
			  	<?if($_contents_06){?>
			  		<ul class="newsListPage_lists">
				  		<?foreach($_contents_06 as $ctid => $col){ extract($col);?>
							<?if($disp==1){?>
								<li class="newsListPage_item"><a href="/guide/<?=$ctid?>"><?=$title?></a></li>
							<?}?><?}?>
						</ul>
					<?}else{?><span class="in_preparation">現在、ガイド準備中です。</span><?}?>
			</div>
			<div class="about_content">
			  <p><span class="material-symbols-outlined">verified_user</span>有料会員について</p>
			  	<?if($_contents_07){?>
			  		<ul class="newsListPage_lists">
				  		<?foreach($_contents_07 as $ctid => $col){ extract($col);?>
							<?if($disp==1){?>
								<li class="newsListPage_item"><a href="/guide/<?=$ctid?>"><?=$title?></a></li>
							<?}?><?}?>
						</ul>
					<?}else{?><span class="in_preparation">現在、ガイド準備中です。</span><?}?>
			</div>
			<div class="about_content">
			  <p><span class="material-symbols-outlined">rule</span>利用規約など</p>
			  	<?if($_contents_08){?>
			  		<ul class="newsListPage_lists">
				  		<?foreach($_contents_08 as $ctid => $col){ extract($col);?>
							<?if($disp==1){?>
								<li class="newsListPage_item"><a href="/guide/<?=$ctid?>"><?=$title?></a></li>
							<?}?><?}?>
						</ul>
					<?}else{?><span class="in_preparation">現在、ガイド準備中です。</span><?}?>
			</div>
			<div class="about_content">
			  <p>その他</p>
			  	<?if($_contents_09){?>
			  		<ul class="newsListPage_lists">
				  		<?foreach($_contents_09 as $ctid => $col){ extract($col);?>
							<?if($disp==1){?>
								<li class="newsListPage_item"><a href="/guide/<?=$ctid?>"><?=$title?></a></li>
							<?}?><?}?>
						</ul>
					<?}else{?><span class="in_preparation">現在、ガイド準備中です。</span><?}?>
			</div>
		</div>

		<a href="#" class="return_a" onclick="javascript:window.history.back(-1);return false;"><i class="fas fa-chevron-left"></i>　前の画面に戻る</a>

	</div>
</section>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc")?>