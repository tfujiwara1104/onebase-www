<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>

<h3 class="smp_425_on">REMINDER<span>パスワード再発行</span></h3>
<section class="section_www_reminder">
	<p class="reminder_p">パスワードの再発行を行います</p>
	<?=$msg?>
	<div class="section_www_reminder_form">
		<form action="/reminder/" method="post">
			<p class="reminder_form_p">登録メールアドレスを入力してください</p>
			<input id="email" type="text" name="email" value="" placeholder="Email" required />
			<input type="hidden" name="action" value="1" />
			<div class="input_yes___buttonstyle">
				<input type="submit" value="送信" />
			</div>
		</form>
	</div>
</section>
<a href="#" class="return_a" onclick="javascript:window.history.back(-1);return false;"><i class="fas fa-chevron-left"></i>　前の画面に戻る</a>

<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc")?>