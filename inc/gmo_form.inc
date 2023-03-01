<form action="<?=$gmo_url?>" method="post">
<input type="hidden" name="ShopID" value="<?=$gmo_shopid?>" />
<input type="hidden" name="OrderID" value="<?=$orderid?>" />
<input type="hidden" name="Amount" value="<?=$amount?>" />
<input type="hidden" name="Tax" value="<?=$tax?>" />
<input type="hidden" name="DateTime" value="<?=$datetime?>" />
<input type="hidden" name="ShopPassString" value="<?=$shoppassstring?>" />
<input type="hidden" name="RetURL" value="<?=$gmo_returl?>" />
<input type="hidden" name="CancelURL" value="<?=isset($gmo_cancelurl)?$gmo_cancelurl:$_SERVER["REQUEST_URI"]?>" />
<input type="hidden" name="UseCredit" value="1" />
<input type="hidden" name="UseVirtualaccount" value="1" />
<input type="hidden" name="VaTradeDays" value="10" />
<input type="hidden" name="JobCd" value="CAPTURE" />
<p><input type="submit" value="GMO決済画面へ" /></p>
</form>