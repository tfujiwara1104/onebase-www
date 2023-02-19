<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>
<style type="text/css">
body {background: url(/img/common/login_bgimg.png) no-repeat center center;background-size: cover;}
</style>
<section class="section_www">

	<p class="entrance_regist_p"><span class="entrance_regist_span">Login</span><br>Welcome back!</p>
	<div class="section_www_form">
		<form action="/login/" method="post">
			<div class="login_form_input">
				<p>メールアドレス</p>
				<input id="loginid" type="text" name="loginid" value="" placeholder="メールアドレス" required />
			</div>
			<div class="login_form_input" style="margin-top: 23px;">
				<p>パスワード</p>
				<input id="password" type="password" name="password" value="" placeholder="英数字" required />
				<p class="password_re"><a href="https://<?=$_SERVER["tld"]?>/reminder/">パスワードをお忘れの方はこちらから</a></p>
			</div>
			<div class="login_form_input">
				<input type="submit" value="ログイン" />
				<input type="hidden" name="action" value="login" />
				<p class="login_keep">
					<input type="checkbox" name="setcookie" value="1" id="setcookie" />
					<label for="setcookie">ログイン状態を保持する</label>
				</p>
			</div>	
		</form>
		<div class="link_text">
			<p>夢を叶える百貨店は初めてですか？</p>
			<a href="https://<?=$_SERVER["tld"]?>/regist/" class="bottom_border_block">無料登録はこちら</a>
		</div>		

	</div>
</section>
<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc")?>