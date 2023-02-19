<div class="select_div">
<select id="change_js">
<optgroup label="NEONメニュー">
    <option value="/neon/contact/">お問い合わせ</option>
    <option value="/neon/rule/index.php" selected>NEON 利用規約</option>
    <option value="/neon/rule/paid.php">NEON 有料利用規約</option>
    <option value="/neon/rule/privacy.php">プライバシーポリシー</option>
    <option value="/neon/administrator/index.php">運営者情報</option>
    <option value="/neon/guide/marketplace.php">NEON × 夢を叶える百貨店</option>
    <option value="/neon/law/">特定商取引法に基づく表記</option>
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