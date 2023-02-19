<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/head.inc")?>
<div class="kv_img">
	<img class="" src="/neon/img/common/neon_logo_white_1200.png" alt="" />
	<p>LIVE ｜ ARCHIVE</p>
</div>
<section class="contein_live_archive">

<!-- ライブ -->
<div class="box_live_">
	<h1><span>LIVE</span>配信スケジュール</h1>
	<div class="live_inner">
		<a class="leftbutton" href="#"><span></span></a>
		<div id="mousedragscrollable" class="mousedragscrollable">
			<?if($cnt){?>
			<?foreach($_seminar as $smid => $col){ extract($col);?>
			<?if($disp==1 or $disp==3){?>
			<ul>
				<li><a href="/neon/service/<?=$smid?>">
					<div class="live_contents_img">
						<div class="live_contents_img_inner">
							<img src="/img/<?=is_file("{$_SERVER['SERVER_ROOT']}/upfile/seminar/{$smid}/01")?"upfile/seminar/{$smid}/01":"common/noimage.png"?>" alt="" />
							<?if($type2!=1){?><p class="only_tag live_tag">会員向け</p><?}?>
						</div>
						<p class="live_contents_desc_tag_">配信予定</p>

						<?if($date == date("Y-m-d")){?>
							<img src="/img/common/eventdate2.png" alt="" class="held_tag"><?}?>

						<?if((!empty($time2)) and $time1 <= date("H:i") and $time2 >= date("H:i")){?>
							<p class="live_play"><span>ON AIR</span></p><?}?>

					</div>
					<div class="live_contents_desc">
						<div class="live_contents_desc_day">
							<span class="material-symbols-outlined">today</span><span class="day_span"><?=$date?></span>　<span class="material-symbols-outlined">alarm_on</span><span><?=$time1?>～<?=$time2?></span>
						</div>
						<p class="overflow_clamp_2_14px"><?=$name?></p>
						<div class="desc_flex">
							<div class="desc_flex_column">
								<p class="live_contents_desc_organizer">主催 | 出演</p>
								<p class="organizer_name">
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
											<?=$_user[$uid2]?>
										<?}?>
									<?}?>
									<?if($uid3){?>
										<?if($_sellername[$uid3]){?>
											<?=$_sellername[$uid3]?>
										<?}else{?>
											<?=$_user[$uid3]?>
										<?}?>
									<?}?>
								</p>
							</div>
							<div class="desc_flex_">
								<?if($text2 or $url1 or $url2 or $url3){?><span class="material-symbols-outlined">edit_note</span><?}?>
							</div>
						</div>
					</div>
				</a></li>
			</ul>
			<?}?>
			<?}?>
			<?}else{?>
				<ul>
				<li class="live_none">
					<div class="live_contents_img">
						<div class="live_contents_img_inner">
							<img class="no_live_img" src="/neon/img/common/neon_logo_white_300.png" alt="" />
						</div>
					</div>
					<div class="live_contents_desc">
						<div class="live_contents_desc_day">
							<span class="material-symbols-outlined">today</span><span class="day_span">No LIVE</span>
						</div>
						<p class="overflow_clamp_2_14px">現在、配信予定はありません。</p>
					</div>
				</li>
			</ul><?}?>
		</div>
		<?if($cnt > 2){?>
		<a class="rightbutton display_912px_on" href="#"><span></span></a><?}?>
		<?if($cnt > 3){?>
		<a class="rightbutton display_912px_off" href="#"><span></span></a><?}?>
	</div><!-- live_inner -->
</div><!-- box_live_ -->


<style type="text/css">

</style>


<!-- ライブのアーカイブ -->

<div class="box_archive_">
	<h1>最新のアーカイブ<a class="" href="/neon/service/archive.php">全てを表示</a></h1>
	<div class="archive_inner">
		<?foreach($_seminar2 as $smid => $col){ extract($col);?>
		<?if($disp==1 or $disp==3){?>
			<a href="/neon/service/<?=$smid?>">
				<div class="live_contents_img">
					<div class="live_contents_img_inner">
						<img src="/img/<?=is_file("{$_SERVER['SERVER_ROOT']}/upfile/seminar/{$smid}/01")?"upfile/seminar/{$smid}/01":"common/noimage.png"?>" alt="" />
						<?if($type2!=1){?><p class="only_tag">会員向け</p><?}?>

						<?if($date >= date("Y-m-d", strtotime($new_day))){?>
							<img src="/img/common/new.png" alt="" class="new_contents_tag"><?}?>
					</div>
				</div>
				<div class="live_contents_desc">
					<p class="overflow_clamp_2_14px"><?=$name?></p>
					<div class="desc_flex">
						<div class="desc_flex_column">
							<p class="archive_day"><?=$date?></p>
							<p class="organizer_name">
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
										<?=$_user[$uid2]?>
									<?}?>
								<?}?>
								<?if($uid3){?>
									<?if($_sellername[$uid3]){?>
										<?=$_sellername[$uid3]?>
									<?}else{?>
										<?=$_user[$uid3]?>
									<?}?>
								<?}?>
							</p>
						</div>
						<div class="desc_flex_">
							<?if(empty($liveurl)){?><span class="material-symbols-outlined">videocam_off</span><?}?>
							<?if($text2 or $url1 or $url2 or $url3){?><span class="material-symbols-outlined">edit_note</span><?}?>
							<!-- <?if(is_file("{$_SERVER['SERVER_ROOT']}/upfile/seminar/{$smid}/02")){?><img src="/upfile/seminar/<?=$smid?>/02" alt="" /><?}?>
							<?if(is_file("{$_SERVER['SERVER_ROOT']}/upfile/seminar/{$smid}/03")){?><img src="/upfile/seminar/<?=$smid?>/03" alt="" /><?}?> -->
						</div>
					</div>
				</div>
			</a>
		<?}?>
		<?}?>
	</div>
</div>


</section>
<script type="text/javascript">
	// スクロールバーWindows対策
    function mousedragscrollable(element){
    let target; // 動かす対象
    $(element).each(function (i, e) {
        $(e).mousedown(function (event) {
            event.preventDefault();
            target = $(e); // 動かす対象
            $(e).data({
                "down": true,
                "move": false,
                "x": event.clientX,
                "y": event.clientY,
                "scrollleft": $(e).scrollLeft(),
                "scrolltop": $(e).scrollTop(),
            });
            return false
        });
        // move後のlink無効
        $(e).click(function (event) {
            if ($(e).data("move")) {
                return false
            }
        });
    });
    // list要素内/外でのevent
    $(document).mousemove(function (event) {
        if ($(target).data("down")) {
            event.preventDefault();
            let move_x = $(target).data("x") - event.clientX;
            let move_y = $(target).data("y") - event.clientY;
            if (move_x !== 0 || move_y !== 0) {
                $(target).data("move", true);
            } else { return; };
            $(target).scrollLeft($(target).data("scrollleft") + move_x);
            $(target).scrollTop($(target).data("scrolltop") + move_y);
            return false
        }
    }).mouseup(function (event) {
        $(target).data("down", false);
        return false;
    });
}
mousedragscrollable(".mousedragscrollable");

$(function() {
    var rightbutton = $('.rightbutton');
    var leftbutton = $('.leftbutton');
    $('.leftbutton').hide();
        //右へ
        rightbutton.click(function () {
        $('.mousedragscrollable').animate({
            scrollLeft: $('.mousedragscrollable').scrollLeft() + 1000
        }, 600);
        return false;
        });

        // 左へ
        leftbutton.click(function () {
        $('.mousedragscrollable').animate({
            scrollLeft: $('.mousedragscrollable').scrollLeft() - 1000
        }, 600);
        return false;
        });
  });
</script>
<script type="text/javascript">
const element = document.getElementById('mousedragscrollable');
const clientWidth = element.clientWidth;
const scrollWidth = element.scrollWidth;

element.onscroll = function() {
  if (scrollWidth - (clientWidth + element.scrollLeft) == 0) {
    $('.rightbutton').fadeOut();
  }
    if (scrollWidth - (clientWidth + element.scrollLeft) >= 200) {
    $('.rightbutton').fadeIn();
  }


  if (element.scrollLeft <= 100) {
    $('.leftbutton').fadeOut();
    } else {
    $('.leftbutton').fadeIn();
  }
};
</script>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/foot.inc")?>