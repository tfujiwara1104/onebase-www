<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/head.inc")?>
<style type="text/css">
.main_body {
	background: url(/neon/img/common/login_bg.jpg) no-repeat;
	background-size: cover;
	width: 1440px;
    height: 100vh;
    position: relative;
	background-attachment: fixed;
}
body {background: #080808;}
</style>

<section class="section_login">
	<div class="section_login_inner">
	<img src="/neon/img/common/welcom_white_01.png" alt="" />
	<p class="section_login_p">SIGN IN</p>
	<span class="section_login_span">ログイン情報を入力してください</span>
	<div class="section_www_form">
		<form action="/neon/login/" method="post">
			<div class="login_form_input">
				<p>メールアドレス</p>
				<input id="loginid" type="text" name="loginid" value="" placeholder="メールアドレス" required />
			</div>
			<div class="login_form_input" style="margin-top: 10px;">
				<p>パスワード</p>
				<input id="password" type="password" name="password" value="" placeholder="英数字" required />
				<p class="password_re"><a href="https://<?=$_SERVER["tld"]?>/neon/reminder/">パスワードをお忘れの方はこちら</a></p>
			</div>
			<div class="login_form_input">
				<input type="submit" value="SIGN IN" />
				<input type="hidden" name="action" value="login" />
				<p class="login_keep">
					<input type="checkbox" name="setcookie" value="1" id="setcookie" />
					<label for="setcookie">ログイン状態を保持する</label>
				</p>
			</div>	
		</form>
		<div class="link_text">
			<p>NEONは初めてですか？</p>
			<a href="https://<?=$_SERVER["tld"]?>/neon/regist/index.php" class="bottom_border_block">無料登録はこちら</a>
		</div>		
		</div>
	</div>
</section>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/foot.inc")?>