<div class="select_div">
<select id="change_js">
<optgroup label="【サポート】">
    <option value="/information.php">お知らせ</option>
    <option value="/config/">アイコン追加方法</option>
    <option value="/guide/qa.php">よくある質問</option>
    <option value="/application/contact.php">お問い合わせ</option>
</optgroup>
<optgroup label="【運営情報】">
    <option value="/company/">運営者情報</option>
    <option value="/rule/privacy.php">プライバシーポリシー</option>
    <option value="/rule/index.php">利用規約</option>
    <option value="/rule/affiliate.php">アフィリエイト利用規約</option>
    <?if($loginuser["type"]==2){?>
    <option value="/rule/community.php" selected>コミュニティ利用規約</option>
    <option value="/rule/plus.php">コミュニティプラス利用規約</option><?}?>
</optgroup>
<optgroup label="【マーケット】">
    <option value="/guide/marketplace.php">夢を叶える百貨店とは</option>
    <option value="/law/index.php">特定商取引法に基づく表記</option>
</optgroup>
</select>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
    const selected = document.getElementById("change_js");
    selected.onchange = function() {
        window.location.href = selected.value;
    };
</script>