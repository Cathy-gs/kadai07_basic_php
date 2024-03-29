<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prefectures = $_POST["prefectures"];
    $season = $_POST["season"];
    $name = $_POST["name"];
    $overview = $_POST["overview"];
    $ditail = $_POST["ditail"];
    $cook = $_POST["cook"];
}
?>

<form action="write.php" method="POST">
    <input type="hidden" name="prefectures" value="<?php echo $prefectures; ?>">
    <input type="hidden" name="season" value="<?php echo $season; ?>">
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="overview" value="<?php echo $overview; ?>">
    <input type="hidden" name="ditail" value="<?php echo $ditail; ?>">
    <input type="hidden" name="cook" value="<?php echo $cook; ?>">
 
    <h2 class="contact-title">入力した内容確認</h2>
    <p>入力内容を確認してください</p>
    <div>
        <label>都道府県</label>
        <p><?php echo $prefectures; ?></p>
    </div>
    <div>
        <label>季節</label>
        <p><?php echo $name; ?></p>
    </div>
    <div>
        <label>食材名</label>
        <p><?php echo $mail; ?></p>
    </div>
    <div>
        <label>特徴</label>
        <p><?php echo $overview; ?></p>
    </div>
    <div>
        <label>詳細</label>
        <p><?php echo $ditail ?></p>
    </div>
    <div>
        <label>おすすめの調理法</label>
        <p><?php echo $cook; ?></p>
    </div>
    <input class="btn" type="button" value="内容を修正する" onclick="history.back(-1)">
    <button class="btn" type="submit" name="submit">送信する</button>
</form>