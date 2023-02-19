<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/head.inc")?>
<style type="text/css">
body {
	background: url(/neon/img/common/login_bg.jpg) no-repeat;
	background-size: cover;
	width: 100vw;
    height: 100vh;
    position: relative;
	background-attachment: fixed;
}
@media (max-width:667px) {.smp_footer_div {background-color: transparent;}}
</style>

<section class="section_www_reminder">
	<div class="section_reminder_inner">
	<p class="reminder_p">パスワードの再発行</p>
	<?=$msg?>
	<div class="section_www_reminder_form">
		<form action="/neon/reminder/" method="post">
			<p class="reminder_form_p">登録メールアドレスを入力してください</p>
			<input id="email" type="text" name="email" value="" placeholder="Email" required />
			<input type="hidden" name="action" value="1" />
			<div class="input_yes___buttonstyle">
				<input type="submit" value="送信" />
			</div>
		</form>
	</div>

	<a href="#" class="return_a white" onclick="javascript:window.history.back(-1);return false;"><i class="fas fa-chevron-left"></i>　前の画面に戻る</a>
</div>
</section>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/foot.inc")?>