<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>
<style type="text/css">
.nav_rearch {display: inline-block!important;}
.free_skill_category {display: block!important;}
@media (max-width:667px) {.smp_footer_div {background-color: transparent;}}
@media (max-width:912px) {
.display_768px_off,.display_567px_off {display: none!important;}
.display_768px_on,.display_567px_on {display: flex;}}
@media (max-width:567px) {.free_skill_category {display: block!important;}}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/js/jquery.lazyload.min.js"></script>
<div id="contents"><!-- マーケット画面を先行取得 -->

<div class="div_floor_title">
	<img src="/img/common/floor_map_1th.png" alt="" />
	<h2 class="market_head_h2">Free market</h2>
	<p class="market_head_p">1F 商品販売フロア</p>
</div>

<section class="section_research">
	<?=pagenavi_item($totalcnt1,$pno1)?>
	<p class="pagenavi_num"><?=$totalcnt1?>件中/<?=$startnum1+1?>件～<?=$endnum1?>件 を表示</p>
</section>

<div class="LINEUP_BOX">
	<?foreach($_item1 as $itid => $col){ extract($col);?>
    <?if($re_tax==2) $taxrate=$re_taxrate;?>
	<?if($disp==1 and $product_type==1){?>
	<div class="item">
		<a href="/item/<?=$itid?>">
			<div class="img_BOX01">
				<div class="img_BOX01_inner">
					<?if($top_img){?><img src="/img/common/dummy.png" data-original="<?=$top_img?>" style="object-fit: cover;height:100%;" class="lazy" alt="" /><?}?>
				<?if(!$top_img){?><img src="/img/common/dummy.png" data-original="/img/<?=is_file("{$_SERVER['SERVER_ROOT']}/upfile/item/{$itid}/01")?"upfile/item/{$itid}/01":"common/noimage.png"?>" class="lazy" style="object-fit: cover;height:100%;" alt="" /><?}?></div>

				<?if(($discount or $postage==2 or $postage==3) and $sell_limit!=2){?>
					<div class="discount_color"></div>
					<p class="discount">
						<?if($discount){?><i class="fas fa-tag"></i> <?=$discount?><span>%割引</span><?}?>
						<?if($postage==2 or $postage==3){?><i class="fas fa-truck-moving"></i> 送料無料<?}?>
					</p><?}?>




 				<?if(isset($_item2[$itid]) and $sell_limit==1 ){?>
					<img src="/img/common/pop.png" alt="" style="position: absolute;top: 0;left: 0;width: 30%;"><?}?>

				<?if($startdate >= date("Y-m-d", strtotime($new_day))){?>
					<img src="/img/common/new.png"  alt="" style="position: absolute;top: 0;left: 0;width: 30%;"><?}?>

				<?if($enddate and $enddate < date("Y-m-d") and !(isset($_item2[$itid]) and $sell_limit==2 )){?>
					<div class="FINISHED_color"></div>
					<div class="FINISHED_text"><p>CLOSED</p></div><?}?>

				<?if(isset($_item2[$itid]) and $sell_limit==2 ){?>
					<div class="sold_color"></div>
					<div class="sold_text"><p>SOLD OUT</p></div><?}?>

			</div>

			<div class="text_BOX">
				<p class="overflow_clamp_2_14px"><?=$name?>　<?=$sub_name?></p>

				<?if($selltype==1){?>
					<div class="price_box">
						<?if($pointamount1){?><p class="price_daiya"><?=number_format($pointamount1*((100-$discount)/100)/**$taxrate*/)?></p><?}?>

						<?if($pointamount2){?>
							<?if($discount){?>
								<p><s style="font-size: 10px;">￥<?=number_format(ceil(strval($pointamount2)))?></s> ￥<?=number_format(ceil(strval(($pointamount2*((100-$discount)/100)))))?></p>
							<?}else{?>
								<p>￥<?=number_format(ceil(strval($pointamount2)))?></p><?}?><?}?>
					</div><?}?>


				<?if($selltype==2){?>
					<div class="price_box">
						<p class="mistumori_price"><span class="mistumori_price_span">お見積り</span></p>
					</div><?}?>


				<div class="category_seller_wrap">
					<div class="category_seller_IMG">
					<img src="/img/common/dummy.png" data-original="/img/<?=is_file("{$_SERVER['SERVER_ROOT']}/upfile/user/{$adid}/07")?"upfile/user/{$adid}/07":"common/noimage.png"?>" class="lazy" alt="" />
					</div>
					<div class="category_seller_BOX">
						<p><?=$_category[$caid]?></p>
        				<p><?=$sellername?></p>
					</div>
				</div>

			</div>
		</a>
	</div>
	<?}?>
	<?if($re_tax==2) $taxrate=1.1;?>
	<?}?>
</div><!--LINEUP_BOX-->

<?=pagenavi_item($totalcnt1,$pno1)?>

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