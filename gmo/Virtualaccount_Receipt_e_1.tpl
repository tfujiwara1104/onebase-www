<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=shift_jis" />
	<meta http-equiv="Content-style-Type" content="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<!-- <link rel="stylesheet" href="{$CSSPATH}/common.css" /> -->
	<link rel="stylesheet" href="https://one-base.net/css/gmo.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css" type="text/css" media="all" />
	<title>銀行振込(バーチャル口座)</title>

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
		<h1>銀行振込　振込先情報</h1>
	</div>

	<div class="flow">
	</div>

	<div class="main">

		<form action="{$RetURL|htmlspecialchars}" method="post" onsubmit="return blockForm()">
			<p>{insert name="input_returnParams"}</p>

			<p class="txt">銀行振込(バーチャル口座)のお支払い申し込みを受付しました</p>
			<p class="txt">振込期限までに以下の口座に振込みを行ってください<br>振込期限内にお振込みがない場合はキャンセル扱いとなります</p>
			

			<div class="block">

						<h2>
							<span class="p">ご利用内容</span>
						</h2>

				<div class="bl_body">
					<div>
						<p class="txt_v"><i class="fas fa-exclamation-triangle faa-flash animated"></i>振込みの際は、振込依頼人欄に<span style="color: red;font-weight: bold;">振込コード＋お客様氏名</span>を入力してください。</p>
						<table id="cartinfo" class="generic">
							<tr>
								<th>金額</th>
								<td>{$Amount|number_format|htmlspecialchars}円</td>
							</tr>
							<tr>
								<th>消費税・(配送料)</th>
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
							<!-- <tr>
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
 -->						</table>

						<p class="txt"><i class="fas fa-exclamation-triangle faa-flash animated"></i>振込みの際は、振込依頼人欄に<span style="color: red;font-weight: bold;">振込コード＋お客様氏名</span>を入力してください</p>					

						<p class="control_v">
							メモ or 画面保存をしてから「閉じる」ボタンを押してください
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
<footer><p class="footer">運営会社 ONE COLLEGE LLC</p></footer>
</div>
</div>
</body>
</html>