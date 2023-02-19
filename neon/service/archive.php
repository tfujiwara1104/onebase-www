<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/head.inc")?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/js/jquery.lazyload.min.js"></script>
<style type="text/css">.main>div {background-color: #f5f1e3!important;}</style>
<style type="text/css">

</style>
<div class="sticky_area_live">
<div class="sticky_area_live_inner">
    <div class="sticky_area_live_left"><!-- mypageメニュー -->
    	<h1><span class="material-symbols-outlined">movie</span>動画コンテンツ</h1>
        <div class="instant_search">
            <input type="text" class="search-text" placeholder="&#xf002;&nbsp;検索ワード">
        </div>
    	<div class="sticky_area_live_left_inner">
			<form action="<?=$self?>">
				<?showradio($_seminar_live_category,"s","live_category",0," onclick=\"this.form.submit()\"")?>
			</form>
        </div>
    </div>
    <div class="sticky_area_live_right" ontouchstart=""><!-- メイン表示 -->
        <!--🔍-->
        <div id="navArea200" class="display_667px_on">
            <div class="nav_search_BOX nav_search_BOX200">
                <div class="inner">
                   <form action="<?=$self?>">
                        <div class="category_archive_box">
                            <?showradio($_seminar_live_category,"s","live_category",0," onclick=\"this.form.submit()\"")?>
                        </div>
                    </form>
                </div>
            </div>
            <div class="toggle_btn200 touch_highlight_color_none">
                <span class="lines line-1"></span>
                <span class="line-2"><span class="material-symbols-outlined">category</span>カテゴリの選択</span>
                <span class="lines line-3"></span>
            </div>
            <div id="mask200"></div>
        </div>
        <!--🔍-->

        <div class="instant_search display_667px_on">
            <input type="text" class="search-text" placeholder="&nbsp;&#xf002;&nbsp;検索ワード">
        </div>

		<!-- <?=pagenavi($totalcnt,$pno)?> -->
		<p class="live_num"><?if($totalcnt==0){?>0件/項目がありません<?}else{?><?=$totalcnt?>件中/<?=$startnum+1?>件～<?=$endnum?>件 を表示<?}?></p>
		<div class="sticky_area_live_left_inner target-area">
			<?foreach($_seminar as $smid => $col){ extract($col);?>
			<?if($disp==1 or $disp==3){?>
			<a href="/neon/service/<?=$smid?>">
				<div class="img_live">
					<div class="img_live_inner">
					<img src="/img/common/dummy.png" data-original="/img/<?=is_file("{$_SERVER['SERVER_ROOT']}/upfile/seminar/{$smid}/01")?"upfile/seminar/{$smid}/01":"common/noimage.png"?>" class="lazy" alt="" /></div>
                    <?if($type2==3){?>
                        <p class="only_tag_">本会員向け</p>
                    <?}elseif($type2==2){?>
                        <p class="only_tag">サロン会員向け</p><?}?>

                    <?if($date >= date("Y-m-d", strtotime($new_day))){?>
                        <img src="/img/common/new.png" alt="" class="new_contents_tag"><?}?>
				</div>
				<div class="text_live">
					<p class="overflow_clamp_2_14px"><?=$name?>　<?=$sub_name?></p>
                    <?if(!empty($live_category)){?><p class="category_live">カテゴリ：<?=$_seminar_live_category[$live_category]?></p><?}?>
                    <div class="desc_flex">
                        <div class="desc_flex_column">
                            <p class="view_live">配信日：<?=$date?></p>
                            <?if(!empty($enddate)){?><p class="view_live">視聴期限：<?=$enddate?></p><?}?>
                            <?if(!empty($type2)){?><p class="view_live">公開対象：<?=$_user_oem_validity2[$type2]?></p><?}?>
                        </div>
                        <div class="desc_flex_">
                            <?if(empty($liveurl)){?><span class="material-symbols-outlined">videocam_off</span><?}?>
                            <?if($text2 or $url1 or $url2 or $url3){?><span style="margin-left:10px;" class="material-symbols-outlined">edit_note</span><?}?>
                            <!-- <?if(is_file("{$_SERVER['SERVER_ROOT']}/upfile/seminar/{$smid}/02")){?><img src="/upfile/seminar/<?=$smid?>/02" alt="" /><?}?>
                            <?if(is_file("{$_SERVER['SERVER_ROOT']}/upfile/seminar/{$smid}/03")){?><img src="/upfile/seminar/<?=$smid?>/03" alt="" /><?}?> -->
                        </div>
                    </div>
				</div>
			</a><?}?><?}?>
		</div>
	<!-- <?=pagenavi($totalcnt,$pno)?> -->



</div></div></div>
<script type="text/javascript">
	// Lazy Loadを起動する
$( 'img.lazy' ).lazyload(
{
	threshold: 300 ,			// 200pxの距離まで近づいたら表示する
	effect: "fadeIn" ,		// じわじわっと表示させる
});
</script>
<script type="text/javascript">

(function($) {
  var $body200   = $('#body');
  var $nav_h200   = $('#navArea_header');
  var $nav200   = $('#navArea200');
  var $BOX200   = $('.nav_search_BOX200');
  var $btn200   = $('.toggle_btn200');
  var $mask200  = $('#mask200');
  var open200   = 'open'; // class
  var open_h200   = 'open_h'; // class
  var isfixed200   = 'is-fixed'; // class
  // menu open close
    $btn200.on( 'click', function() {
    if ( ! $nav200.hasClass( open200 ) ) {
      $nav200.addClass( open200 );
      $nav_h200.addClass( open_h200 );
      $body200.addClass( isfixed200 );
    } else {
      $nav200.removeClass( open200 );
      $nav_h200.removeClass( open_h200 );
      $body200.removeClass( isfixed200 );
    }
  });
  // mask close
  $mask200.on('click', function() {
    $nav200.removeClass( open200 );
    $nav_h200.removeClass( open_h200 );
    $body200.removeClass( isfixed200 );
  });
} )(jQuery);
</script>
<script type="text/javascript">
$(function () {
  searchWord = function(){
    var searchText = $(this).val(), // 検索ボックスに入力された値
        targetText;

    $('.target-area a').each(function() {
      targetText = $(this).text();

      // 検索対象となるリストに入力された文字列が存在するかどうかを判断
      if (targetText.indexOf(searchText) != -1) {
        $(this).removeClass('hidden');
      } else {
        $(this).addClass('hidden');
      }
    });
  };

  // searchWordの実行
  $('.search-text').on('input', searchWord);
});
</script>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/foot.inc")?>
