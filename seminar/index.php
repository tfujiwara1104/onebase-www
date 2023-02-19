<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>
<style type="text/css">
.nav_rearch,.movie_event_category {display: inline-block!important;}
.free_skill_category {display: none!important;}
@media (max-width:667px) {.smp_footer_div {background-color: transparent;}}
@media (max-width:912px) {
.display_768px_off,.display_567px_off {display: none!important;}
.display_768px_on,.display_567px_on {display: flex;}}
@media (max-width:567px) {.movie_event_category {display: flex}}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/js/jquery.lazyload.min.js"></script>
<div id="contents"><!-- マーケット画面を先行取得 -->

<div class="div_floor_title">
	<img src="/img/common/floor_map_4th.png" alt="" />
	<h2 class="market_head_h2">Event market</h2>
	<p class="market_head_p">4F イベント販売フロア</p>
</div>

<section class="section_research">
<?=pagenavi($totalcnt,$pno)?>
<p class="pagenavi_num"><?=$totalcnt?>件中/<?=$startnum+1?>件～<?=$endnum?>件 を表示</p>
</section>

<div class="LINEUP_BOX">
	<?foreach($_seminar as $smid => $col){ extract($col);?>
	<?if($disp==1 or $disp==3){?>
	<div class="item_job">
		<a href="/seminar/<?=$smid?>">

			<div class="img_BOX02">
				<div class="img_BOX01_inner">
			<img style="object-fit: cover;height:100%;" src="/img/common/dummy.png" data-original="/img/<?=is_file("{$_SERVER['SERVER_ROOT']}/upfile/seminar/{$smid}/01")?"upfile/seminar/{$smid}/01":"common/noimage.png"?>" class="lazy" alt="" />
			</div>

					<?if(isset($_seminar2[$smid])){?>
						<img src="/img/common/dummy.png" data-original="/img/common/pop.png" class="lazy" alt="" style="position: absolute;top: 0;left: 0;width: 30%;"><?}?>

					<?if($cntreq == $capacity and $date >= date("Y-m-d")){?>
						<div class="full_color"></div>
						<div class="full_text"><p>FULL</p></div><?}?>

					<?if($startdate >= date("Y-m-d", strtotime($new_day))){?>
						<img src="/img/common/dummy.png" data-original="/img/common/new.png" class="lazy" alt="" style="position: absolute;top: 0;left: 0;width: 30%;"><?}?>

					<?if($discount or $date < date("Y-m-d")){?>
						<div class="discount_color"></div>
						<p class="discount">
							<?if($discount){?><i class="fas fa-tag"></i> <?=$discount?><span>%割引</span><?}?>
							<?if($date < date("Y-m-d")){?>
								<span>定員 <?if($capacity){?><?=$capacity?><?}else{?>-<?}?>名</span>
							<?}else if($cntreq == $capacity and $date >= date("Y-m-d")){?>
								<span style="color:#c30d23;">満員御礼</span>
							<?}else{?>
								<span>残席 <?=$capacity-$cntreq?>名</span>
							<?}?>
						</p><?}?>

					<?if($date < date("Y-m-d")){?>
						<div class="FINISHED_color"></div>
						<div class="FINISHED_text"><p>CLOSED</p></div>
						<?}?>

			</div>
			<?if($date > date("Y-m-d")){?>
					<div class="event_date_box event_date_box_s">
						<p class="event_date"><span
						><i class="fas fa-calendar-check fa-fw"></i>開催日</span><span
						><?=$date?></span></p></div><?}?>

				<?if($date == date("Y-m-d")){?>
					<div class="event_date_box event_date_box_t">
						<p class="event_date"><span
						><i class="fas fa-calendar-check fa-fw"></i>本日開催</span><span
						><?=$date?></span></p></div><?}?>

				<?if($date < date("Y-m-d")){?>
					<div class="event_date_box event_date_box_e">
						<p class="event_date"><span
						><i class="fas fa-calendar-check fa-fw"></i>開催終了</span><span
						><?=$date?></span></p></div><?}?>

			<div class="text_BOX">
				<p class="overflow_clamp_2_14px"><?=$name?>　<?=$sub_name?></p>

				<div class="price_box price_box_2">
					<?if($pointamount1){?><p class="price_daiya"><?=number_format($pointamount1*((100-$discount)/100)/**$taxrate*/)?></p><?}?>

					<?if($pointamount2){?>
						<?if($discount){?>
								<p><s style="font-size: 10px;">￥<?=number_format(ceil(strval($pointamount2)))?></s> ￥<?=number_format(ceil(strval(($pointamount2*((100-$discount)/100)))))?></p>
							<?}else{?>
								<p>￥<?=number_format(ceil(strval($pointamount2)))?></p><?}?><?}?>

					<?if(!$pointamount1 and !$pointamount2){?>
						<p class="mistumori_price">￥<span class="mistumori_price_span">Free</span></p>
						<?}?>
				</div>
				<div class="category_seller_wrap">
					<div class="category_seller_IMG">
						<img src="/img/common/dummy.png" data-original="/img/<?=is_file("{$_SERVER['SERVER_ROOT']}/upfile/user/{$uid1}/07")?"upfile/user/{$uid1}/07":"common/noimage.png"?>" class="lazy" alt="" />
					</div>
					<div class="category_seller_BOX">
						<p><?=$_category[$caid]?></p>
						<p>

							<?if($uid1){?>
							<?=($uid1?$_user[$uid1]:"")?><?}?>

							<?if($uid2){?>
							   / <?=($uid2?$_user[$uid2]:"")?><?}?>

							<?if($uid3){?>
							   / <?=($uid3?$_user[$uid3]:"")?><?}?>
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