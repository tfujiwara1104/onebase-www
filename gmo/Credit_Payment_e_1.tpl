<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=shift_jis" />
	<meta http-equiv="Content-style-Type" content="text/html; charset=Shift_JIS" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<!-- <link rel="stylesheet" href="{$CSSPATH}/common.css" /> -->
	<link rel="stylesheet" href="https://one-base.net/css/gmo.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<title>クレジット決済入力</title>
	
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
		<h1>お支払手続き</h1>
	

	<div class="flow clearfix">
		<ul>
	
			<li>
				<a href="{$SelectURL|htmlspecialchars}">
					<span>お支払方法の選択 &gt;</span>
				</a>
			</li>
		
			<li  class="current">
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
	</div>
	<p class="active"><a href="{$CancelURL|htmlspecialchars}">&lt; マーケットに戻る</a></p>

	<div class="main">

		{if  $CheckMessageArray neq null }
		<div id="GP_msg">
			<ul>
			{foreach item=message from=$CheckMessageArray}
				<li>{$message}</li>
			{/foreach}
			</ul>
		</div>
		{/if}

		<form action="{$ExecURL|htmlspecialchars}" onsubmit="return blockForm()" method="post">

			<p>{insert name="input_keyItems"}</p>

			<div class="block">

						<h2>
							<span class="p">クレジットカード決済の必要事項をご記入ください</span>
						</h2>

				<div class="bl_body">

					<table class="generic" summary="credit_1" id="credit">
						<tr>
							<th>お支払い方法</th>
							<td>
								{insert name="select_payMethodList"}
							</td>
						</tr>
						<tr>
							<th>分割回数<br /><span class="note"><i class="fas fa-caret-right"></i>お支払方法が分割の場合、必ず選択ください</span></th>
							<td>
								{insert name="select_payTimesList"}
							</td>
						</tr>
						{if $MemberCardArray ne null}
							<tr>
								<th class="td_bl2">
									カードの指定方法を選択してください
								</th>
								<td>
									{insert name="radio_paymentMode"}
								</td>
							</tr>
							<tr>
								<th class="inner_label" colspan="2">
									カード番号を入力して決済する場合、以下の内容を入力してください
								</th>
							</tr>
						{/if}
						<tr>
							<th>カード番号<br /><span class="note"><i class="fas fa-caret-right"></i>ハイフン’-’無しで、数字のみご記入ください</span></th>
							<td><input name="CardNo" type="text" id="Name" value="{$CardNo|htmlspecialchars}" class="code" maxlength="16" size="20"/></td>
						</tr>
						<tr>
							<th>カード有効期限</th>
						<td>
							{insert name="select_expireList"}
						</td>
					</tr>
					<tr>
						<th>セキュリティコード</th>
						<td><input name="SecurityCode" type="text" id="SecurityCode" value="{$SecurityCode|htmlspecialchars}" class="code" maxlength="4" size="6" /></td>
					</tr>
					{if $MemberCardArray ne null}
						<tr>
							<th class="inner_label" colspan="2">
								登録カードで決済する場合、以下の内容を入力してください
							</th>
						</tr>
						<tr>
							<th class="td_bl2">ご利用になるカードを選択してください</th>
							<td>{insert name="select_memberCardList"}</td>
						</tr>
					{/if}
					</table>
					<p class="control">
						<span class="submit">
							{if $Confirm eq "1"}
							<input type="submit" value="確認する" />
							{else}
							<input type="submit" value="決済する" />
							{/if}
						</span>
					</p>
				</div>
			</div>

			<div class="block">
				<div class="bl_title">
					<div class="bl_title_inner">
						<h2 class="h2_pay">
							ご利用内容
						</h2>
					</div>
				</div>

				<div class="bl_body">

					<div>
						<table id="cartinfo" class="generic">
							<tr>
								<th>商品代金</th>
								<td>{$Amount|number_format|htmlspecialchars} 円</td>
							</tr>
							<tr>
								<th>消費税・(配送料)</th>
								<td>{$Tax|number_format|htmlspecialchars} 円</td>
							</tr>
							<tr>
								<th>お支払合計</th>
								<td>{$Total|number_format|htmlspecialchars} 円</td>
							</tr>
						</table>
					</div>

				</div>

			</div>

			<br class="clear" />

		</form>
	</div><br>
<footer>
	<p class="footer">運営会社 ONE COLLEGE LLC</p>
</footer>
</div>
</div>
{* デバッグが必要な場合、以下の行の * を削除して、コメントを外してください。 *}
{*insert name="debug_showAllVars"*}
</body>
</html>