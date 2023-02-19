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
	<title>エラーメッセージ</title>
	{literal}
	<script type="text/javascript">
		if( document.all ){
			window.document.onkeydown = function(){
				if( event.keyCode == 8 ){
					return false
				}
			}
		}else{
			window.onkeydown = function( event ){
				if( event.keyCode == 8 ){
					return false
				}
			}
		}
		var submitted = {
						0:false,
						1:false,
						2:false
					}
		function blockForm( number ){
			if( submitted[number] ){
				return false
			}
			submitted[number] = true
			return true
		}
	</script>
	{/literal}
</head>

<body>
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

	<p class="txt_error">エラーが発生しました</p>

		<div class="block_err">
			<div class="bl_body">
				<p id="GP_errMessage">
					{if $ErrorMessageArray neq null}
						<ul>
						{foreach item=message from=$ErrorMessageArray}
							<li>{$message}</li>
						{/foreach}
						</ul>
					{else}
						<ul>
							{if $message.retry ne null}
							<li>{$message.retry}</li>
							{/if}
							{if $message.cancel ne null}
							<li>{$message.cancel}</li>
							{/if}
						</ul>
					{/if}
				</p>
				<ul>
				{if $MailLinkOrderNo eq null}
					<li>
						<form action="{$RetURL|htmlspecialchars}" method="post" onsubmit="return blockForm(0)">
							<p id="fields">
								決済をやめてショッピングサイトに戻る場合、このボタンを押してください。
								{insert name=input_returnParams}
								<p class="control04">
									<span class="control">
										<input type="submit" value="{$label.cancel}" />
									</span>
								</p>
							</p>
						</form>
						<br class="clear" />
					</li>
				{/if}
				{if $RetryURL neq null }
					<li>
						<form action="{$RetryURL|htmlspecialchars}" method="post" onsubmit="return blockForm(1)">
							<p>
								必要事項の記入からもう一度試してみる場合、このボタンを押してください。
								{insert name="input_keyItems"}
								<p class="control04">
									<span class="control">
										<input type="submit" value="{$label.retry}" />
									</span>
								</p>
							</p>
						</form>
						<br class="clear" />
					</li>
				{/if}
				{if $SelectURL neq null }
					<li>
						<form action="{$SelectURL|htmlspecialchars}" method="post" onsubmit="return blockForm(2)">
							<p>
								違う決済方法を選択される場合、このボタンを押してください。
								{insert name="input_keyItems"}
								<p class="control04">
									<span class="control">
										<input type="submit" value="{$label.select}" />
									</span>
								</p>
							</p>
						</form>
						<br class="clear" />
					</li>
				{/if}
				</ul>
			</div>
		</div>
	</div>


{* デバッグが必要な場合、以下の行の * を削除して、コメントを外してください。 *}
{*insert name="debug_showAllVars"*}
</body>
</html>