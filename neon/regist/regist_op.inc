<?$user = text_encode_(@$user)?>

<script type="text/javascript" src="/js/ajaxzip2.js"></script>
<script type="text/javascript">AjaxZip2.JSONDATA = '/json';</script>

<div class="regist_div_form">

	<p>お名前 ※</p>
	<input type="text" name="user[name1]" value="<?=@$user["name1"]?>" placeholder="姓 Last name" class="name_regi_input01" required>

	<input type="text" name="user[name2]" value="<?=@$user["name2"]?>" placeholder="名 First name" class="name_regi_input02" required>
	<div class="clear"></div>

	<p>メールアドレス ※</p>
	<input id="user[email]" type="text" placeholder="PC または メールアドレス" name="user[email]" value="<?=@$user["email"]?>" required />

	<p>メールアドレス(確認) ※</p>
	<input id="user[ref]" type="text" placeholder="PC または メールアドレス" name="confirm[ref]"  value="<?=@$confirm["ref"]?>" required />
	<?if(!$action){?><span>メールアドレスはログイン用のIDとなります。</span><?}?>

	<div class="regist_div_form_checkbox">
		<input type="checkbox" name="user[receivemail]" checked="<?=@$user["receivemail"]?"checked":""?>" value="1" id="userreceivemail" />
		<label for="userreceivemail" class="Delivery">ダイレクトメールの配信を希望する</label>
	</div>

</div>
