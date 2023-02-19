<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/head.inc")?>
<style type="text/css">
body {background-color: #080808;}
</style>
<?if(!$action){?>

	<section class="section_www_regist">
		<div class="section_www_regist_inner">
			<h1>無料会員登録</h1>
			<p>お申込み者の情報を入力してください</p>
			<?=$msg?>
			<form action="<?=$self?>" method="post">
				<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/regist/regist.inc")?>
				<div class="regist_div_form_checkbox" style="margin-top: 5px;">
					<input type="hidden" name="action" value="1" />
					<input type="checkbox" name="checkrule" value="1" id="checkrule"<?=isset($checkrule)?" checked=\"checked\"":""?> />
					<label for="checkrule"> 利用規約に同意する</label>
					<p>利用規約・プライバシーポリシーは<a href="/neon/rule/index.php" target="_blank" rel="noopener noreferrer">こちら</a>から</p>
				</div>
				<div class="regi_form_input">
					<input type="submit" value="確認画面へ進む" />
				</div>
			</form>
		</div>
	</section>

<?}elseif($action==1){?>

	<section class="section_www_regist">
		<div class="section_www_regist_inner">
		<p>以下の内容で会員登録を行います。<br>よろしければ「登録する」ボタンを押してください。</p>

		<div class="disabled" disabled>
			<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/regist/regist.inc")?>
			<div class="regist_div_form_checkbox" style="margin-top: 8px;">
				<input type="hidden" name="action" value="1" />
				<input type="checkbox" name="checkrule" value="1" id="checkrule"<?=isset($checkrule)?" checked=\"checked\"":""?> />
				<label for="checkrule"> 利用規約に同意する</label>
			</div>
		</div>
		<form action="<?=$self?>" method="post" style="display:inline"><?showhidden($user,"user")?><?showhidden($confirm,"confirm")?>
			<input type="hidden" name="action" value="2" />
			<input type="hidden" name="checkrule" value="1" />
			<div class="regi_form_input">
				<input type="submit" value="登録する" />
			</div>
		</form>
		<form action="<?=$self?>" method="post" style="display:inline"><?showhidden($user,"user")?><?showhidden($confirm,"confirm")?>
			<input type="hidden" name="action" value="0" />
			<input type="hidden" name="checkrule" value="1" />
			<div class="input_no___buttonstyle" style="margin-top:-20px;">
				<input type="submit" value="訂正する" />
			</div>
		</form>
		</div>
	</section>

<?}elseif($action==2){?>

	<section class="section_www_regist_comp">
		<p class="contact_BOX_title" data-en="Welcome"><span>ようこそ！<br>NEON
		へ</span></p>
		<p class="contact_BOX_p">無料会員登録が完了しました。<br><br>ログインに必要なパスワードがメールアドレスへ<br>自動送信されましたのでご確認ください。</p>
		<p class="contact_BOX_p_sub">メールが届かない場合は、お問い合わせまたは、<br />異なるメールアドレスにてお手続きください。</p><br />
		<a href="neon/login/" class="back_link_a"><i class="fas fa-angle-left"></i> ログインへ進む</a>
	</section>

<?}?>

<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/foot.inc")?>
