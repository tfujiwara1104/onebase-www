<?

$filename = isset($_GET["filename"]) ? $_GET["filename"] : "" ;

if(is_file("{$_SERVER['SERVER_ROOT']}/upfile/{$filename}")){
	$size = getimagesize("{$_SERVER['SERVER_ROOT']}/upfile/{$filename}");
	header("Content-type: {$size['mime']}");
	readfile("{$_SERVER['SERVER_ROOT']}/upfile/{$filename}");
}else{
	header("HTTP/1.0 404 Not Found");
}

?>
