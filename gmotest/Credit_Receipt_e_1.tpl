<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=Shift_JIS" />
	<meta http-equiv="content-style-type" content="text/css" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<link rel="stylesheet" href="https://one-base.net/css/gmostyle.css" type="text/css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" type="text/css">
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Josefin+Sans:wght@100;200;300;400&family=Lobster&display=swap" rel="stylesheet">
	<title>お支払い手続き完了</title>
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
			<h2 class="purchase_head_h2">Payment Completed</h2>
			<p class="purchase_head_p">決済完了</p>
			<div class="purchase_Lion_rogomark">
				<a href="{$CancelURL|htmlspecialchars}">
					<img src="https://one-base.net/img/common/Lion_rogomark_fff_B.png" alt="" />	
				</a>
			</div>
		</div>
</div><!-- header -->
	<div class="main">
	<!--ヘッダー開始-->

	<div class="flow03">
		<ul>
			<li class="current">
				<span>お支払手続き完了</span>
			</li>
		</ul>
	</div>

	<p class="txt_end">決済が完了しました。次へお進みください。</p>
	
		<form action="{$RetURL|htmlspecialchars}" method="post" onsubmit="return blockForm()">
		
			<p>{insert name="input_returnParams"}</p>
			
			
		
			<div class="block">
				<!-- <div class="bl_title">
					<div class="bl_title_inner">
						<h2>
							<span class="p">ご利用内容</span>
						</h2>
					</div>
				</div> -->
				
				<div class="bl_body">
		
					<!-- <table class="generic">
					{if $JobCd != "CHECK" }
					  <tr>
					    <th>金額</th>
					    <td >{$Amount|number_format|htmlspecialchars}円</td>
					  </tr>
					  <tr>
					    <th>税送料</th>
					    <td >{$Tax|number_format|htmlspecialchars}円</td>
					  </tr>
					  {/if}
					  {* 自由項目を表示する場合、こちらの行を削除してください。
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
					  自由項目を表示する場合、こちらの行を削除してください。*}
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
					</table> -->
					
					<p class="control03">
						<span class="submit">
							<input type="submit" value="TOPへ戻る" />
						</span>
					</p>
					<br class="clear" />	
				</div>
				
			</div>
		</form>
	</div>
		

{* デバッグが必要な場合、以下の行の * を削除して、コメントを外してください。 *}
{*insert name="debug_showAllVars"*}
</body>
</html>