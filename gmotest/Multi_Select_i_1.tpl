<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="content-type" content="text/html; charset=Shift_JIS" />
	<meta http-equiv="content-style-type" content="text/css" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<link rel="stylesheet" href="https://one-base.net/css/gmostyle.css" type="text/css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" type="text/css">
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Josefin+Sans:wght@100;200;300;400&family=Lobster&display=swap" rel="stylesheet">
	<title>支払方法選択ページ</title>
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
<div class="header">
		<div id="purchase_headimg">
			<h2 class="purchase_head_h2">Payment</h2>
			<p class="purchase_head_p">決済</p>
			<div class="purchase_Lion_rogomark">
				<a href="{$CancelURL|htmlspecialchars}">
					<img src="https://one-base.net/img/common/Lion_rogomark_fff_B.png" alt="" />	
				</a>
			</div>
		</div>
</div><!-- header -->

<div class="main">
		<p class="previous_page"><a href="{$CancelURL|htmlspecialchars}"><i class="fas fa-angle-left"></i> 商品ページへ戻る</a></p>

		<h1 class="Payment_completed_h1">決済を開始します</h1>
		<div class="flow">
			<ul>
				<li class="current"><span>お支払方法の選択 &gt;</span></li>
				<li><span>必要事項を記入 &gt;</span></li>
				<!-- {if $Confirm eq '1'}<li><span>確認して手続き &gt;</span></li>{/if} -->
				<li><span>お支払手続き完了</span></li>
			</ul>
		</div>
	
		<p class="txt">お支払い方法</p>
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
				<!-- <div class="bl_title">
					<div class="bl_title_inner">
						<h2>
							<span class="p">お支払方法をお選びください。</span>
						</h2>
					</div>
				</div> -->

				<div class="bl_body">

					<div class="paytypelist">

						{insert name="radio_paymentType"}

{* ++支払方法の選択肢をカスタマイズしたい場合は、上記の"radio_paymentType"行をコメントアウトし、以下をご利用ください
						<ul>
							<li>
								<input type="radio" name="PayType" value="credit" id="paytype_credit"/><label for="paytype_credit">クレジットカード</label>
								<p class="visa_master"><i class="fab fa-cc-visa"></i><i class="fab fa-cc-mastercard"></i><i class="fab fa-cc-jcb"></i><i class="fab fa-cc-amex"></i><i class="fab fa-cc-diners-club"></i><i class="fab fa-cc-discover"></i></p>
							</li>
							<li>
								<input type="radio" name="PayType" value="virtualaccount" id="paytype_virtualaccount"/><label for="paytype_virtualaccount">銀行振込(バーチャル口座)</label>
							</li>
							<!-- <li>
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
								<input type="radio" name="PayType" value="paysle" id="paytype_paysle"/><label for="paytype_paysle">PAYSLE決済</label>
							</li>
							<li>
								<input type="radio" name="PayType" value="ganb" id="paytype_ganb"/><label for="paytype_ganb">銀行振込(バーチャル口座 あおぞら)</label>
							</li> -->

						</ul>
-- *}
						<p class="control">
							<span class="submit"><input type="submit" value="進む" /></span>
						</p>
					</div>
				</div>
			</div><br class="clear" />

			<div class="block">
				<div class="bl_title">
					<div class="bl_title_inner">
						<h2>
							<span class="p">ご利用内容</span>
						</h2>
					</div>
				</div>
				<div class="bl_body">
					<div>
						<table id="cartinfo" class="generic">
							<tr>
								<th>商品代金</th>
								<td>{$Amount|number_format|htmlspecialchars}円</td>
							</tr>
							<tr>
								<th>消費税・配送料</th>
								<td>{$Tax|number_format|htmlspecialchars}円</td>
							</tr>
							<tr>
								<th>お支払合計</th>
								<td>{$Total|number_format|htmlspecialchars}円</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</form>

</div><!-- main -->

{* デバッグが必要な場合、以下の行の * を削除して、コメントを外してください。 *}
{*insert name="debug_showAllVars"*}
</body>
</html>