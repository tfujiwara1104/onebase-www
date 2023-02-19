<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>
<style type="text/css">
body {
	background: url(/img/common/regist_bgimg.jpg) no-repeat top;
	background-position-x: 70%;
	background-size: cover;
}
</style>
<?if(!$action){?>

	<section class="section_www_regist">
		<div class="section_www_regist_inner">
			<h1>Zoom Meeting URL発行</h1>
			<p>Meeting情報を入力してください</p>
			<?=$msg?>
			<form action="<?=$self?>" method="post">

				<script type="text/javascript" src="/js/ajaxzip2.js"></script>
				<script type="text/javascript">AjaxZip2.JSONDATA = '/json';</script>

				<div class="regist_div_form">

					<p>ミーティング名称 </p>
					<input id="meeting_name" type="text" placeholder="ミーティング名称" name="meeting_name" value="" required />
					<p>ミーティング開始時刻 </p>
					<input id="meeting_time" type="datetime-local"  name="meeting_time" value=""  required />
					<p>ミーティング時間（分） </p>
					<input id="meeting_duration" type="number"  name="meeting_duration" value=""  required />
				</div>
					<input type="hidden" name="action" value="1" />
				<div class="input_next___buttonstyle">
					<input type="submit" value="URLを発行する" />
				</div>
			</form>
		</div>
	</section>

<?}else{?>

	<section class="section_www_regist_comp">
		<p class="contact_BOX_title" data-en="Welcome"><span>URL生成完了</span></p>
	  <p class="contact_BOX_p">zoomミーティング開始時刻は以下です<br><br><?=$meeting_time?></p>
			  <p class="contact_BOX_p">zoomミーティング時間は<?=$meeting_duration?>分です。</p>
		<p class="contact_BOX_p">zoomミーティングURLは以下です<br><br><?=$message?></p>
		<a href="/index.php" class="back_link_a"><i class="fas fa-angle-left"></i> TOPへ戻る</a>
	</section>

<?}?>

<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc")?>
