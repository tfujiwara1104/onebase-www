<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="content-type" content="text/html; charset=Shift_JIS" />
	<meta http-equiv="content-style-type" content="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- <link rel="stylesheet" href="{$CSSPATH}/common.css" /> -->
	<link rel="stylesheet" href="https://one-base.net/css/gmo.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<title>お支払方法の選択</title>

	{literal}
	<script type="text/javascript">
		var submitted = false
		function blockForm(){
			if( submitted ){
				return false
			}
			submitted = true
			return true
		}
	</script>
	{/literal}
</head>

<body>

<div class="wrapper">
<div class="bodyinner">

	<!--ヘッダー開始-->
	<div class="header">
		<p class="header_p">ONE BASE - Market Place -</p>
		<h1>お支払方法の選択</h1>
	</div>

	<div class="flow clearfix">
		<ul>
			<li class="current">
				<span>お支払方法の選択 &gt;</span>
			</li>
			<li>
				<span>必要事項を記入 &gt;</span>
			</li>
			{if $Confirm eq '1'}
			<li>
				<span>確認して手続き &gt;</span>
			</li>
			{/if}
			<li>
				<span>お支払手続き完了</span>
			</li>
		</ul>
	</div>
	<p class="active"><a href="{$CancelURL|htmlspecialchars}">&lt; マーケットに戻る</a></p>
	<div class="main">

		<p class="txt"><i class="fas fa-caret-right"></i>お支払方法を選択し、お進みください</p>

		{if  $CheckMessageArray neq null }
		<div id="GP_msg">
			<ul>
			{foreach item=message from=$CheckMessageArray}
				<li>{$message}</li>
			{/foreach}
			</ul>
		</div>
		{/if}

		<form action="{$SelectURL|htmlspecialchars}" onsubmit="return blockForm()" method="post">
			<p>
			{insert name="input_keyItems"}
			</p>			

			<div class="block">
				<h2><span class="p">お支払方法</span></h2>


				<div class="bl_body">

					<div class="paytypelist">

						{insert name="radio_paymentType"}

{* ++支払方法の選択肢をカスタマイズしたい場合は、上記の"radio_paymentType"行をコメントアウトし、以下をご利用ください
						<ul>
							<li>
								<input type="radio" name="PayType" value="credit" id="paytype_credit"/><label for="paytype_credit">クレジットカード</label>
							</li>
							<li>
								<input type="radio" name="PayType" value="cvs" id="paytype_cvs"/><label for="paytype_cvs">コンビニエンスストア</label>
							</li>
							<li>
								<input type="radio" name="PayType" value="edy" id="paytype_edy"/><label for="paytype_edy">楽天Edy</label>
							</li>
							<li>
								<input type="radio" name="PayType" value="suica" id="paytype_suica"/><label for="paytype_suica">モバイルSuica</label>
							</li>
							<li>
								<input type="radio" name="PayType" value="payeasy" id="paytype_payeasy"/><label for="paytype_payeasy">Pay-easy</label>
							</li>
							<li>
								<input type="radio" name="PayType" value="paypal" id="paytype_paypal"/><label for="paytype_paypal">PayPal</label>
							</li>
							<li>
								<input type="radio" name="PayType" value="netid" id="paytype_netid"/><label for="paytype_netid">ネットiD</label>
							</li>
							<li>
								<input type="radio" name="PayType" value="webmoney" id="paytype_webmoney"/><label for="paytype_webmoney">WebMoney</label>
							</li>
							<li>
								<input type="radio" name="PayType" value="au" id="paytype_au"/><label for="paytype_au">au</label>
							</li>
							<li>
								<input type="radio" name="PayType" value="docomo" id="paytype_docomo"/><label for="paytype_docomo">docomo</label>
							</li>
							<li>
								<input type="radio" name="PayType" value="sb" id="paytype_sb"/><label for="paytype_sb">ソフトバンクまとめて支払い(Ｂ)</label>
							</li>
							<li>
								<input type="radio" name="PayType" value="jibun" id="paytype_jibun"/><label for="paytype_jibun">じぶん銀行</label>
							</li>
							<li>
								<input type="radio" name="PayType" value="jcbPreca" id="paytype_jcbpreca"/><label for="paytype_jcbpreca">JCB PREMO</label>
							</li>
							<li>
								<fieldset>
									<legend><input type="radio" name="PayType" value="netcash" id="paytype_netcash"/><label for="paytype_netcash">NET CASH</label></legend>
									<div style="padding-left: 20px;"><input type="radio" name="netcash_paytype" value="NETCASH" id="netcash_paytype_netcash" /><label for="netcash_paytype_netcash">NET CASH</label></div>
									<div style="padding-left: 20px;"><input type="radio" name="netcash_paytype" value="NNCGIFT" id="netcash_paytype_nncgift" /><label for="netcash_paytype_nncgift">nanacoギフト</label></div>
								</fieldset>
							</li>
							<li>
								<input type="radio" name="PayType" value="rakutenid" id="paytype_rakutenid"/><label for="paytype_rakutenid">楽天ペイ</label>
							</li>
							<li>
								<input type="radio" name="PayType" value="linepay" id="paytype_linepay"/><label for="paytype_linepay">LINE Pay決済</label>
							</li>
							<li>
								<input type="radio" name="PayType" value="unionpay" id="paytype_unionpay"/><label for="paytype_unionpay">ネット銀聯決済</label>
							</li>
							<li>
								<input type="radio" name="PayType" value="recruit" id="paytype_recruit"/><label for="paytype_recruit">リクルートかんたん支払い決済</label>
							</li>
							<li>
								<input type="radio" name="PayType" value="virtualaccount" id="paytype_virtualaccount"/><label for="paytype_virtualaccount">銀行振込(バーチャル口座)</label>
							</li>
							<li>
								<input type="radio" name="PayType" value="paysle" id="paytype_paysle"/><label for="paytype_paysle">PAYSLE決済</label>
							</li>
							<li>
								<input type="radio" name="PayType" value="ganb" id="paytype_ganb"/><label for="paytype_ganb">銀行振込(バーチャル口座 あおぞら)</label>
							</li>

						</ul>
-- *}

						<p class="control">

							<span class="submit">
								<input type="submit" value="進む" />
							</span>

						</p>

					</div>

				</div>

			</div>

			<br class="clear" />

		</form>

	</div>
<footer><p class="footer">運営会社 ONE COLLEGE LLC</p></footer>
</div>
</div>
{* デバッグが必要な場合、以下の行の * を削除して、コメントを外してください。 *}
{*insert name="debug_showAllVars"*}
</body>
</html>