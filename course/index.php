<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>
<style type="text/css">
.nav_rearch,.movie_event_category {display: inline-block!important;}
.free_skill_category {display: none!important;}
@media (max-width:667px) {.smp_footer_div {background-color: transparent;}}
@media (max-width:912px) {
.display_768px_off,.display_567px_off {display: none!important;}
.display_768px_on,.display_567px_on {display: flex;}}
@media (max-width:567px) {.movie_event_category {display: block!important;}}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/js/jquery.lazyload.min.js"></script>
<div id="contents"><!-- マーケット画面を先行取得 -->

<div class="div_floor_title">
	<img src="/img/common/floor_map_3th.png" alt="" />
	<h2 class="market_head_h2">Movie market</h2>
	<p class="market_head_p">3F 動画販売フロア</p>
</div>

<section class="section_research">

	<?=pagenavi($totalcnt,$pno)?>

	<p class="pagenavi_num"><?=$totalcnt?>件中 <?=$startnum+1?>件～<?=$endnum?>件 を表示</p>

</section>

<div class="LINEUP_BOX">
	<?foreach($_course as $coid => $col){ extract($col);?>
	<?if($disp==1){?>
	<!-- 動画コース一覧ここから -->
	<div class="course">
		<a href="/course/<?=$coid?>">
			<div class="img_BOX_course">
				<div class="img_BOX_course_inner">
				<img src="/img/common/dummy.png" data-original="/img/<?=is_file("{$_SERVER['SERVER_ROOT']}/upfile/course/{$coid}/01")?"upfile/course/{$coid}/01":"common/noimage.png"?>" class="lazy" alt=""/>
				</div>

				<?if($discount or $time){?>
					<div class="discount_color"></div>
					<p class="discount">
						<?if($discount){?><i class="fas fa-tag"></i> <?=$discount?><span>%割引</span><?}?>
						<?if($time){?><span><i class="fas fa-clock"></i> <?=$time?>時間</span><?}?>
					</p><?}?>

				<?if(isset($_course2[$coid])){?>
					<img src="/img/common/dummy.png" data-original="/img/common/pop.png" class="lazy" alt="" style="position: absolute;top: 0;left: 0;width: 25%;"><?}?>

				<?if($startdate >= date("Y-m-d", strtotime($new_day))){?>
					<img src="/img/common/dummy.png" data-original="/img/common/new.png" class="lazy" alt="" style="position: absolute;top: 0;left: 0;width: 25%;"><?}?>

				<?if($enddate and $enddate < date("Y-m-d")){?>
					<div class="FINISHED_color"></div>
					<div class="FINISHED_course_text"><p>CLOSED</p></div><?}?>
			</div>

			<div class="text_BOX">
				<p class="overflow_clamp_2_14px"><?=$name?>　<?=$sub_name?></p>

				<div class="price_box price_box_2">
					<?if($pointamount1){?><p class="price_daiya"><?=number_format($pointamount1*((100-$discount)/100)/*-$entory_service1*/)?></p><?}?>
					<?if($pointamount2){?>
						<?if($discount){?>
								<p><s style="font-size: 10px;">￥<?=number_format(ceil(strval($pointamount2)))?></s> ￥<?=number_format(ceil(strval(($pointamount2*((100-$discount)/100)))))?></p>
							<?}else{?>
								<p>￥<?=number_format(ceil(strval($pointamount2)))?></p><?}?><?}?>
				</div>

				<div class="category_seller_wrap">
					<div class="category_seller_IMG">
						<img src="/img/common/dummy.png" data-original="/img/<?=is_file("{$_SERVER['SERVER_ROOT']}/upfile/user/{$uid1}/07")?"upfile/user/{$uid1}/07":"common/noimage.png"?>" class="lazy" alt="" />
					</div>
					<div class="category_seller_BOX">
					<p><?=$_category[$caid]?></p>
						<p>
						<?if($uid1){?>
						<?if($_sellername[$uid1]){?>
						<?=$_sellername[$uid1]?>
						<?}else{?>
						<?=$_user[$uid1]?>
					  	<?}?>
						<?}?>
			            <?if($uid2){?>
			            <?if($_sellername[$uid2]){?>
						   <?=$_sellername[$uid2]?>
						<?}else{?>
						  <?$_user[$uid2]?>
						<?}?>
						<?}?>
						<?if($uid3){?>
            			<?if($_sellername[$uid3]){?>
						  <?=$_sellername[$uid3]?>
						<?}else{?>
						  <?$_user[$uid3]?>
						<?}?>
						<?}?>
						</p>
					</div>
				</div>

			</div>
		</a>
	</div>
	<?}?>
	<?}?>
</div><!--LINEUP_BOX-->

<?=pagenavi($totalcnt,$pno)?>

</div><!--contents-->
<script type="text/javascript">
	// Lazy Loadを起動する
$( 'img.lazy' ).lazyload(
{
	threshold: 300 ,
	effect: "fadeIn" ,
});
</script>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc")?>