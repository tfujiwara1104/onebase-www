
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>
<section class="section_www_contact">

<h3>FORM<span>お問い合わせフォーム</span></h3>
<h4>内容に不備がなければ「送信する」を押してください</h4>

<form action="/contact/submit.php" method="post" name="myform">
	<table class="table_form_contact">
		<tr>
		    <th>お名前</th>
		    <td><input type="text" name="name" readonly="readonly" value="<?=$name?>"></td>
		</tr>
		<tr>
		    <th>フリガナ</th>
		    <td><input type="text" name="furigana" readonly="readonly" value="<?=$furigana?>"></td>
		</tr>
		<tr>
		    <th>メールアドレス</th>
		    <td><input type="text" name="address" readonly="readonly" value="<?=$address?>"></td>
		</tr>
		<tr>
		    <th>電話番号</th>
		    <td><input type="text" name="tel" readonly="readonly" value="<?=$tel?>"></td>
		</tr>
		<tr>
		    <th>お問い合わせ<br class="smp_425_on">内容</th>
		    <td><textarea name="otoiawase" class="gray_bg" readonly="readonly"><?=$otoiawase?></textarea></td>
		</tr>
	</table>
	<div class="input_yes___buttonstyle">
		<input type="submit" value="送信する">
	</div>
	<div class="input_no___buttonstyle">
		<a href="#" onclick="javascript:window.history.back(-1);return false;">もどる</a>
	</div>
</form>

</section>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc")?>