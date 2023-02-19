<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=shift_jis" />
	<meta http-equiv="Content-style-Type" content="text/html; charset=Shift_JIS" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<!-- <link rel="stylesheet" href="{$CSSPATH}/common.css" /> -->
	<link rel="stylesheet" href="https://onecollege.net/css/gmo.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<title>お支払手続き完了</title>
	
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
				<span>お支払方法の選択 &gt;</span>
			</li>
			<li>
				<span>必要事項を記入 &gt;</span>
			</li>
			{if $Confirm eq "1"}
			<li>
				<span>確認して手続き &gt;</span>
			</li>
			{/if}
			<li class="current">
				<span>お支払手続き完了</span>
			</li>
		</ul>
	</div>
	</div>
	<p class="active"><a href="{$CancelURL|htmlspecialchars}">&lt; マーケットに戻る</a></p>

	<div class="main">
	
		<form action="{$RetURL|htmlspecialchars}" method="post" onsubmit="return blockForm()">
		
			<p>{insert name="input_returnParams"}</p>
			
			<p class="txt">決済が完了しました<br>購入履歴は、メニュー <i class="fas fa-caret-right"></i>購入した商品 からご確認いただけます</p>
		
			<div class="block">
				<div class="bl_title">
					<div class="bl_title_inner">
						<h2>
							<span class="p">ご利用内容</span>
						</h2>
					</div>
				</div>
				
				<div class="bl_body">
		
					<table class="generic">
					{if $JobCd != "CHECK" }
					  <tr>
					    <th>商品代金</th>
					    <td >{$Amount|number_format|htmlspecialchars}円</td>
					  </tr>
					  <tr>
					    <th>消費税・(配送料)</th>
					    <td >{$Tax|number_format|htmlspecialchars}円</td>
					  </tr>
					  {/if}
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
					  </tr> -->
					  <tr>
					    <th>支払方法</th>
					    <td >
					    	{$MethodName|htmlspecialchars}
							  {if $Method eq "2"}
						   	 /{$PayTimes|htmlspecialchars}回
						   	 {/if}
					   	 </td>
					  </tr>
					  <tr>
					    <th>カード番号</th>
					    <td >{$CardNo|htmlspecialchars}</td>
					  </tr>
					  <tr>
					    <th>有効期限(MM/YY)</th>
					    <td >{$ExpireMonth|htmlspecialchars}/{$ExpireYear|htmlspecialchars}</td>
					  </tr>
					</table>
					
					<p class="control_pay">
						<span class="submit">
							<input type="submit" value="閉じる" />
						</span>
					</p>
					<br class="clear" />	
				</div>
				
			</div>
		</form>
	</div><br>
<footer><p class="footer">運営会社 ONE COLLEGE LLC</p></footer>
		
</div>
</div>
{* デバッグが必要な場合、以下の行の * を削除して、コメントを外してください。 *}
{*insert name="debug_showAllVars"*}
</body>
</html>