<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/head.inc")?>

<h3>ウェブサイト記述内容</h3>

<p style="white-space:pre">
$path = "/course/1000000001/1000000001.mp4";
$secret = "asdfqwer1234";
$limit = dechex(time() + (60 * 60));
$md5 = md5("{$path}/{$secret}/{$limit}");
</p>

<?
$path = "/course/1000000001/1000000001.mp4";
$secret = "asdfqwer1234";
$limit = dechex(time() + (60 * 60));
$md5 = md5("{$path}/{$secret}/{$limit}");
?>

<table>
<tr><th style="width:150px">path</th><td><?=$path?></td></tr>
<tr><th>secret</th><td><?=$secret?></td></tr>
<tr><th>limit</th><td><?=$limit?></td></tr>
<tr><th>md5</th><td><?=$md5?></td></tr>
<tr><th>src</th><td>http://aijxuws6.user.webaccel.jp/course/1000000001/1000000001.mp4?webaccel_secure_time=<?=$limit?>&webaccel_secure_hash=<?=$md5?></td></tr>
</table>

<video src="http://aijxuws6.user.webaccel.jp/course/1000000001/1000000001.mp4?webaccel_secure_time=<?=$limit?>&webaccel_secure_hash=<?=$md5?>" preload="auto" controls="controls" style="width:560px;float:left;margin-right:10px;" id="video"></video>

<br style="clear:left" />

<h3>オリジンサーバー htaccess</h3>

<p style="white-space:pre">
&lt;FilesMatch "\.mp4$"&gt;
	AddType video/mp4 .mp4
	Header set Cache-Control "s-maxage=86400, public"
	Header set X-WebAccel-Secret "asdfqwer1234"
&lt;/FilesMatch&gt;
</p>

<?include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/foot.inc")?>