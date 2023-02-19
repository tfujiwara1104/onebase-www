<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/head.inc")?>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/sticky_area.inc")?>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/smp_select/contact_.inc")?>
<style type="text/css">#contact__ {background-color: #dfdfdf!important;}</style>
<section class="section_www_contact">
	<h1>お問い合わせ</h1>
	<p>
	本サイトご覧いただきありがとうございます。
	<br>お問い合わせ内容によってはご回答できない、もしくはご回答に時間を要する場合もございますので予めご了承ください。
	<br><br>お客さまの個人情報は厳重な安全管理を行うとともに、お問い合わせへの回答、情報提供のためだけに使用させていただきます。
	<br>本問い合わせにおける個人情報は、第三者にお渡しすることはございません。
	<br>個人情報の取扱い全般に関する考え方はプライバシーポリシーをご確認ください。
	</p>

	<h2>お問い合わせフォーム</h2>
	<h4>必要事項をご記入の上、お問い合わせください</h4>
	<form action="/neon/contact/confirmation.php" method="post" name="myform">
		<table class="table_form_contact">
			<tr>
			    <th>お名前</th>
			    <td><input type="text" name="name" placeholder="（必須）" required></td>
			</tr>
			<tr>
			    <th>フリガナ</th>
			    <td><input type="text" name="furigana" placeholder="（必須）" required></td>
			</tr>
			<tr>
			    <th>メールアドレス</th>
			    <td><input type="text" name="address" placeholder="（必須）" required></td>
			</tr>
			<tr>
			    <th>電話番号</th>
			    <td><input type="text" name="tel" placeholder=""></td>
			</tr>
			<tr">
			    <th>お問い合わせ<br class="smp_425_on">内容</th>
			    <td><textarea name="otoiawase" placeholder="（必須）" required></textarea></td>
			</tr>
		</table>
		<div class="input_next___buttonstyle">
			<input type="button" value="確認画面へ" onclick="check_contactform()">
		</div>
	</form>
<a href="#" class="return_a" onclick="javascript:window.history.back(-1);return false;"><i class="fas fa-chevron-left"></i>　前の画面に戻る</a>

</section>

</div><!--sticky_area_left-->
</div><!--sticky_area_inner-->
</div><!--sticky_area-->
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/foot.inc")?>