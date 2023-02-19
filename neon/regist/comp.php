<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/head.inc")?>
<div class="container">
	<?if(!$action){?>

	<p><i class="fas fa-exclamation-circle"></i>ＵＲＬの有効期限が切れています。</p>

	<?}elseif($action==2){?>

	<p><i class="fas fa-check"></i>会員情報が登録されました。<br />
	現在の会員ステータスは「仮登録」です。<br />
	下記、お支払いを済ませて「本登録」を完了してください。</p>

	<table>
	<tr><th><i class="fas fa-yen-sign"></i>入会金</th><td><?=number_format(ceil(strval(($member_initial_fee-$member_handling_fee)*$taxrate)))?>円 (税込)</td></tr>
	<tr><th><i class="fas fa-yen-sign"></i>登録手数料</th><td><?=number_format(ceil(strval($member_handling_fee*$taxrate)))?>円 (税込)</td></tr>
	<tr><th><i class="fas fa-cash-register"></i>合計金額</th><td><?=number_format($amount+$tax)?>円 (税込)</td></tr>
	</table>

	<?/*<h3>銀行振込</h3>
	<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/bank.inc")*/?>


	<?$gmo_cancelurl = "https://{$_SERVER['tld']}/";
	include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/gmo_form.inc")?>

	<?}?>
</div><!-- /container -->

<?include_once("{$_SERVER['DOCUMENT_ROOT']}/neon/inc/foot.inc")?>