<div class="select_div">
<select id="change_js">
<optgroup label="夢を叶える百貨店メニュー">
    <option value="/application/contact.php">お問い合わせ</option>
    <option value="/rule/index.php">利用規約</option>
    <option value="/rule/affiliate.php">利用規約 - アフィリエイト</option>
    <option value="/rule/privacy.php">プライバシーポリシー</option>
    <option value="/company/">運営会社概要</option>
    <option value="/guide/marketplace.php" selected>夢を叶える百貨店とは</option>
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