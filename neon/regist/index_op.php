<?include_once("{$_SERVER['SERVER_ROOT']}/inc/common.inc");?>
<html>
<head>
    <?include_once("{$_SERVER['SERVER_ROOT']}/www/neon/inc/head_.inc");?>
</head>
<style type="text/css">
body {background-color: #080808;}
.rule_box {width: 100%;padding: 10px;border: solid 1px #aaa;height: 100px;overflow: scroll;color: #fff; margin-top:10px;}li,h4 {color: #fff;font-size: 12px;} h4 {margin-top: 0px;}
</style>
<?if(!$action){?>

	<section class="section_www_regist">
		<div class="section_www_regist_inner">
			<h1>無料会員登録</h1>
			<p>お申込み者の情報を入力してください</p>
			<?=$msg?>
			<form action="<?=$self?>" method="post">
				<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/regist/regist_op.inc")?>
				<div class="regist_div_form_checkbox" style="margin-top: 5px;">
					<input type="hidden" name="action" value="1" />
					<input type="checkbox" name="checkrule" value="1" id="checkrule"<?=isset($checkrule)?" checked=\"checked\"":""?> />
					<label for="checkrule"> 利用規約に同意する</label>
					<div class="rule_box">
						<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/rule_free.inc")?>
					</div><!--
					<p>利用規約・プライバシーポリシーは<a href="/neon/rule/index.php" target="_blank" rel="noopener noreferrer">こちら</a>から</p> -->
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
			<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/regist/regist_op.inc")?>
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

	<section class="section_www_regist section_www_regist_">
		<div class="section_www_regist_inner">
			<p class="paid_title">決済画面</p>
			<h1>NEON サロン会員登録</h1>

			<p class="paid_price">3,000円<span>（税込） / 月額</span></p>

			<p>お申込みご希望の方は必要事項を入力してください。</p>
			<?=$msg?>
			<form id="form_payment" action="<?=$self?>" method="post">
				<div class="regist_div_form">
					<p>申込者氏名 ※</p>
					<input id="name" type="text" name="name" value="<?=$user["name1"].$user["name2"]?>" placeholder="姓 Last name" required>
					<p>登録メールアドレス ※</p>
					<input id="email" type="text" name="email" value="<?=$user["email2"]?>" placeholder="PC または メールアドレス" required>

					  <!-- ここのdivタブがカード入力フォームに置き換わります。 -->
					  <p>クレジットカード情報 ※</p>
					  <div id="card-element" class="MyCardElement"></div>
					  <!-- ここにエラーメッセージが表示されます。 -->
					  <div id="card-errors" role="alert"></div>
				</div>

				<div class="regist_div_form_checkbox" style="margin-top: 20px;">
					<input type="hidden" name="action2" value="1" />
          <input type="hidden" name="salonuid" value="<?=$user["uid"]?>" />
					<input type="checkbox" name="checkrule" value="1" required />
					<label for="checkrule"> 利用規約に同意する</label>
					<div class="rule_box">
						<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/rule_paid.inc")?>
					</div>
          <!-- <p>利用規約は<a href="/neon/rule/paid.php" target="_blank" rel="noopener noreferrer">こちら</a></p> -->
				</div>

				<span class="regi_span_mt40px">※登録日から起算し、１ヵ月後より毎月自動決済されます</span>
				<div class="regi_form_input">
					<button id="button" onclick="if(!confirm('決済を実行します。\n本当によろしいですか？')){return false;}">決済する</button>
				</div>

			</form>
		</div>
	</section>


<!-- stripAPIを読み込みます -->
<script src="https://js.stripe.com/v3/"></script>
<script>
  // 公開可能なAPIキーです。
  const stripe = Stripe('pk_test_51Kg0TcDwSqtOAzZ1rr2fsfAcVj9xKUHSVGTejHZp33lH5P4CONhZ2Srwte9d7UFwri0ozj0pV1UBTcz0xGR805wj00oiRMheTL');
  // 入力フォームを生成します。スタイルを指定することもできます。
  const elements = stripe.elements();
  const cardElement = elements.create('card',{hidePostalCode: true});

  //　先程のdivタブにマウントします。
  cardElement.mount("#card-element");

  // クレジットカード番号や有効期限の入力に合わせてエラーメッセージを出力します。
  cardElement.addEventListener('change', ({error}) => {
      const displayError = document.getElementById('card-errors');
      if (error) {
        displayError.textContent = error.message;
      } else {
        displayError.textContent = '';
      }
  });

  const submit = document.getElementById('button');
  const name = document.getElementById('name');
  const email = document.getElementById('email');

  // 登録ボタンがクリックされたら、API通信をおこなう
  submit.addEventListener('click', async(e) => {
    e.preventDefault();
    const {paymentMethod, error} = await stripe.createPaymentMethod({
      type: 'card',
      card: cardElement,
        billing_details: {
          // 顧客名emailアドレスはなくてもOK
          name: name.value,
          email: email.value,
      },
    });
    // 通信エラー時
    if (error) {
      console.error(error)
    } else {
        // 成功したらトークンが返されるので、hiddenに埋め込む
        const form = document.getElementById('form_payment');
        const hiddenToken = document.createElement('input');
        hiddenToken.setAttribute('type', 'hidden');
        hiddenToken.setAttribute('value', paymentMethod.id);
        hiddenToken.setAttribute('name', 'token');
        form.appendChild(hiddenToken);
        form.submit();
      }
    });
</script>

<?}?>
<div class="smp_footer_div">
    <p>&copy;2022 NEON</p>
</div>
</html>
