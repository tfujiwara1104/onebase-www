<?
/*
	メニュー作成
	ファイル名 => array( メニュー名 , ページタイトル )
*/

$menu = array(

	"/index.php" => array("トップページ",""),
	"/guide/index.php" => array("マーケットフロアガイド",""),
	"/guide/archive.php" => array("ガイド",""),
	"/guide/detail.php" => array("ガイドの内容",""),
	"/login/index.php" => array("ログイン",""),
	"/guide/access.php" => array("アクセス方法",""),
	"/law/index.php" => array("特定商取引法に基づく表記",""),
	"/reminder/index.php" => array("パスワード再送",""),
	"/regist/index.php" => array("会員登録",""),
	"/regist/comp.php" => array("仮登録完了",""),
	"/rule/index.php" => array("利用規約",""),
	"/rule/privacy.php" => array("プライバシーポリシー",""),
	"/test.php" => array("ウェブアクセラレータテスト","ウェブアクセラレータテスト"),
	"/phpinfo.php" => array("",""),
	"/contact/index.php" => array("お問い合わせ",""),
	"/contact/confirmation.php" => array("お問い合わせ確認",""),
	"/contact/submit.php" => array("お問い合わせ送信",""),
	"/company/index.php" => array("運営会社",""),
	"/item/index.php" => array("フリーマーケット",""),
	"/item/index_s.php" => array("スキルマーケット",""),
	"/item/detail.php" => array("フリー/スキルマーケット",""),
	"/seminar/index.php" => array("イベントマーケット",""),
	"/seminar/detail.php" => array("イベントマーケット",""),
	"/course/index.php" => array("ムービーマーケット",""),
	"/course/detail.php" => array("ムービーマーケット",""),
	"/zoom.php" => array("zoom URL生成",""),
	"/information/index.php" => array("総合案内",""),
	"/information/detail.php" => array("総合案内の内容",""),

	//neon
	"/neon/index.php" => array("トップページ",""),
	"/neon/info/index.php" => array("お知らせ",""),
	"/neon/service/index.php" => array("サービス",""),
	"/neon/service/salon.php" => array("サロン",""),
	"/neon/service/live.php" => array("ライブ",""),
	"/neon/service/archive.php" => array("ライブ・アーカイブ",""),
	"/neon/service/detail.php" => array("ライブ・アーカイブ概要",""),
	"/neon/login/index.php" => array("ログイン",""),
	"/neon/config/index.php" => array("アイコン設定方法",""),
	"/neon/law/index.php" => array("特定商取引法に基づく表記",""),
	"/neon/reminder/index.php" => array("パスワード再送",""),
	"/neon/regist/index.php" => array("会員登録",""),
	"/neon/regist/index_op.php" => array("会員登録",""),
	"/neon/regist/comp.php" => array("仮登録完了",""),
	"/neon/regist/neon_entry_pay.php" => array("有料登録完了",""),
	"/neon/rule/index.php" => array("利用規約",""),
	"/neon/rule/paid.php" => array("有料利用規約",""),
	"/neon/rule/market.php" => array("マーケット利用規約",""),
	"/neon/rule/privacy.php" => array("プライバシーポリシー",""),
	"/neon/rule/privacy_.php" => array("プライバシーポリシー",""),
	"/neon/contact/index.php" => array("お問い合わせ",""),
	"/neon/guide/qa.php" => array("よくある質問",""),
	"/neon/contact/confirmation.php" => array("お問い合わせ確認",""),
	"/neon/contact/submit.php" => array("お問い合わせ送信",""),
	"/neon/administrator/index.php" => array("運営会社",""),
	"/neon/neon_payment.php" => array("決済ページ",""),
	"/neon/guide/marketplace.php" => array("夢を叶える百貨店について",""),
	"/neon/guide/index.php" => array("マーケットフロアガイド",""),
	"/neon/item/index.php" => array("フリーマーケット",""),
	"/neon/item/index_s.php" => array("スキルマーケット",""),
	"/neon/item/detail.php" => array("フリー/スキルマーケット",""),
	"/neon/seminar/index.php" => array("イベントマーケット",""),
	"/neon/seminar/detail.php" => array("イベントマーケット",""),
	"/neon/course/index.php" => array("ムービーマーケット",""),
	"/neon/course/detail.php" => array("ムービーマーケット",""),


);

$leftmenu = array(

	"/login/index.php",
	"/reminder/index.php",
#	"/regist/index.php",
	"/law/index.php",
);

$title = $menu[$self][0];
$h2 = $menu[$self][1] ? $menu[$self][1] : $menu[$self][0] ;
