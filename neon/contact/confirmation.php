<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/head.inc")?>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/sticky_area.inc")?>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/smp_select/contact_.inc")?>
<style type="text/css">#contact__ {background-color: #dfdfdf!important;}</style>
<section class="section_www_contact">
	<h1>お問い合わせ</h1>
	<h2>お問い合わせフォーム</h2>
	<h4>内容に不備がなければ「送信する」を押してください</h4>
	<form action="/neon/contact/submit.php" method="post" name="myform">
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

</div><!--sticky_area_left-->
</div><!--sticky_area_inner-->
</div><!--sticky_area-->
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/foot.inc")?>