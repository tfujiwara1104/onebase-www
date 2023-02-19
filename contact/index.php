<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>

  <div class="breadcrumb">
    <div class="inner">
    	<a class="top_pankuzu" href="/"><span>トップ</span></a>
    	<span>お問い合わせ</span>
    </div>
  </div>
<section class="section_www_info">
	<div class="section_www_info_inner">
	<div class="sectionHd">
		<h1 class="sectionTtl">お問い合わせ</h1>
	</div>
	<p>
	夢を叶える百貨店をご覧いただきありがとうございます。
	<br>お問い合わせ内容によってはご回答できない、もしくはご回答に時間を要する場合もございますので予めご了承ください。
	<br><br>お客さまの個人情報は厳重な安全管理を行うとともに、お問い合わせへの回答、情報提供のためだけに使用させていただきます。
	<br>本問い合わせにおける個人情報は、第三者にお渡しすることはございません。
	<br>個人情報の取扱い全般に関する考え方は「プライバシーポリシー」をご確認ください。	
	</p>

	<h3>FORM<span>お問い合わせフォーム</span></h3>
	<h4>必要事項をご記入ください。</h4>
	<form action="/contact/confirmation.php" method="post" name="myform">
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
			<tr class="contact_textarea_form_th">
			    <th>お問い合わせ<br class="smp_425_on">内容</th>
			    <td><textarea name="otoiawase" placeholder="（必須）" required></textarea></td>
			</tr>
		</table>
		<div class="input_next___buttonstyle">
			<input type="button" value="確認画面へ" onclick="check_contactform()">
		</div>
	</form>
<a href="#" class="return_a" onclick="javascript:window.history.back(-1);return false;"><i class="fas fa-chevron-left"></i>　前の画面に戻る</a>

	</div>
</section>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc")?>