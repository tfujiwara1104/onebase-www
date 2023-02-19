<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>
<style type="text/css">
body {background: #f5f5f5;}
</style>
<?if(!$action){?>

	<section class="section_www_regist">
		<div class="section_www_regist_inner">
			<h1>無料会員登録</h1>
			<p>お申込み者の情報を入力してください</p>
			<?=$msg?>
			<form action="/regist/" method="post">
				<?include_once("{$_SERVER['DOCUMENT_ROOT']}/regist/regist.inc")?>
				<div class="regist_div_form_checkbox" style="margin-top: 5px;">
					<input type="hidden" name="action" value="1" />
					<input type="checkbox" name="checkrule" value="1" id="checkrule"<?=isset($checkrule)?" checked=\"checked\"":""?> />
					<label for="checkrule"> 利用規約に同意する</label>
					<p>利用規約・プライバシーポリシーは<a href="/rule/privacy.php" target="_blank" rel="noopener noreferrer">こちら</a>から</p>
				</div>
				<div class="input_next___buttonstyle">
					<input type="submit" value="確認画面へ進む" />
				</div>
			</form>
		</div>
	</section>

<?}elseif($action==1){?>

	<section class="section_www_regist_check">
		<p>以下の内容で会員登録を行います。<br>よろしければ「送信する」ボタンを押してください。</p>

		<div class="disabled" disabled>

			<?$user = text_encode_(@$user)?>

			<script type="text/javascript" src="/js/ajaxzip2.js"></script>
			<script type="text/javascript">AjaxZip2.JSONDATA = '/json';</script>

			<div class="regist_div_form">

				<p>お名前</p>
				<input type="text" name="user[name1]" value="<?=@$user["name1"]?>" placeholder="姓 Last name" class="name_regi_input01" required>

				<input type="text" name="user[name2]" value="<?=@$user["name2"]?>" placeholder="名 First name" class="name_regi_input02" required>
				<div class="clear"></div>

				<p>メールアドレス</p>
				<input id="user[email]" type="text" placeholder="PC または メールアドレス" name="user[email]" value="<?=@$user["email"]?>" required />

				<div class="regist_div_form_checkbox">
					<?if(@$user["rfid"]){?>
						<label class="Delivery">rfid : #<?=@$user["rfid"]?></label>
					<?}else{?>
						<label class="Delivery">紹介者ID : -</label>
					<?}?>
				</div>

				<div class="regist_div_form_checkbox">
					<?if(@$user["receivemail"]==1){?>
						<label class="Delivery">ダイレクトメールの配信を希望する</label>
					<?}else{?>
						<label class="Delivery">ダイレクトメールの配信を希望しない</label>
					<?}?>
				</div>

			</div>

			<div class="regist_div_form_checkbox" style="margin-top: 8px;">
				<label for="checkrule"> 利用規約に同意する</label>
			</div>
		</div>
		<form action="/regist/" method="post" style="display:inline"><?showhidden($user,"user")?><?showhidden($confirm,"confirm")?>
			<input type="hidden" name="action" value="2" />
			<input type="hidden" name="checkrule" value="1" />
			<div class="input_yes___buttonstyle">
				<input type="submit" value="送信する" />
			</div>
		</form>
		<form action="/regist/" method="post" style="display:inline"><?showhidden($user,"user")?><?showhidden($confirm,"confirm")?>
			<input type="hidden" name="action" value="0" />
			<input type="hidden" name="checkrule" value="1" />
			<div class="input_no___buttonstyle" style="margin-top:-20px;">
				<input type="submit" value="訂正する" />
			</div>
		</form>
	</section>

<?}elseif($action==2){?>

	<section class="section_www_regist_comp">	
		<p class="contact_BOX_title" data-en="Welcome"><span>ようこそ！<br>夢を叶える百貨店へ</span></p>
		<p class="contact_BOX_p">無料会員登録が完了しました。<br><br>ログインに必要なパスワードがメールアドレスへ<br>自動送信されましたのでご確認ください。</p>
		<p class="contact_BOX_p_sub">メールが届かない場合は、お問い合わせまたは、<br />異なるメールアドレスにてお手続きください。</p><br />
		<a href="/login/" class="back_link_a"><i class="fas fa-angle-left"></i> ログインへ進む</a>
	</section>

<?}?>

<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc")?>