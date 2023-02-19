<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="content-type" content="text/html; charset=Shift_JIS" />
	<meta http-equiv="content-style-type" content="text/css" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<link rel="stylesheet" href="https://onecollege.net/css/gmostyle.css" type="text/css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" type="text/css">
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Josefin+Sans:wght@100;200;300;400&family=Lobster&display=swap" rel="stylesheet">
	<title>口座振替のお申込み</title>

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

<div class="header">
		<div id="purchase_headimg">
			<h2 class="purchase_head_h2">Payment Completed</h2>
			<p class="purchase_head_p">決済完了</p>
			<div class="purchase_Lion_rogomark">
				<a href="{$CancelURL|htmlspecialchars}">
					<img src="https://onecollege.net/img/common/Lion_rogomark_fff_B.png" alt="" />	
				</a>
			</div>
		</div>
</div><!-- header -->

	<div class="main">

		<p class="previous_page"><a href="{$CancelURL|htmlspecialchars}"><i class="fas fa-angle-left"></i> 商品ページへ戻る</a></p>

		<h1 class="Payment_completed_h1">銀行振込の実施</h1>
		<div class="flow">
			<ul>
				<li><span>お支払方法の選択 &gt;</span></li>
				<li class="current"><span>銀行振込方法の表示</span></li>
				<!-- {if $Confirm eq '1'}<li><span>確認して手続き &gt;</span></li>{/if} -->
				<!-- <li><span>お支払手続き完了</span></li> -->
			</ul>
		</div>

		<form action="{$RetURL|htmlspecialchars}" method="post" onsubmit="return blockForm()">
			<p>{insert name="input_returnParams"}</p>

			<p class="txt">銀行振込は決済代行会社指定のバーチャル口座へご入金いただくことで決済が完了します。</p>
			<p class="txt">振込期限に限らず、すみやかに振込みを行ってください。</p>
			<p class="txt">振込みの際は、<span class="txt_span">振込依頼人欄に「 振込コード ＋ お客様の氏名 」を入力</span>してください。</p>

			<div class="block">
				<div class="bl_title">
					<div class="bl_title_inner">
						<h2>
							<span class="title_p">ご利用内容</span>
						</h2>
					</div>
				</div>

				<div class="bl_body">
					<div>
						<table id="cartinfo" class="generic">
							<tr>
								<th>金額</th>
								<td>{$Amount|number_format|htmlspecialchars}円</td>
							</tr>
							<tr>
								<th>税送料</th>
								<td>{$Tax|number_format|htmlspecialchars}円</td>
							</tr>
							<tr>
								<th>お支払合計</th>
								<td>{$Total|number_format|htmlspecialchars}円</td>
							</tr>
							<tr>
								<th>振込先銀行名</th>
								<td >{$VaBankName|htmlspecialchars}({$VaBankCode|htmlspecialchars})</td>
							</tr>
							<tr>
								<th>振込先支店名</th>
								<td >{$VaBranchName|htmlspecialchars}({$VaBranchCode|htmlspecialchars})</td>
							</tr>
							<tr>
								<th>振込先科目</th>
								<td >{$VaAccountType|htmlspecialchars}</td>
							</tr>
							<tr>
								<th>振込先口座番号</th>
								<td >{$VaAccountNumber|htmlspecialchars}</td>
							</tr>
							<tr>
								<th>振込期限</th>
								<td >{$VaAvailableDateDisp|date_format:"%Y/%m/%d"|htmlspecialchars}</td>
							</tr>
							<tr>
								<th>振込コード</th>
								<td >{$VaTradeCode|htmlspecialchars}</td>
							</tr>
							<tr>
								<th>:自由項目１名称:</th>
								<td >{$ClientField1|htmlspecialchars}</td>
							</tr>
							<tr>
								<th>:自由項目２名称:</th>
								<td >{$ClientField2|htmlspecialchars}</td>
							</tr>
							<tr>
								<th>:自由項目３名称:</th>
								<td >{$ClientField3|htmlspecialchars}</td>
							</tr>
						</table>
						<p class="control_virtual">
							<span class="submit">
								<input type="submit" value="閉じる" />
							</span>
						</p>
						<br class="clear" />
					</div>
				</div>
			</div>
		</form>
	</div>

</div>
</div>
</body>
</html>