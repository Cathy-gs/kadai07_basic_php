
<input type="checkbox" name="season[]" value="春"> 春
<input type="checkbox" name="season[]" value="夏"> 夏
<input type="checkbox" name="season[]" value="秋"> 秋
<input type="checkbox" name="season[]" value="冬"> 冬
<input type="checkbox" name="season[]" value="通年"> 通年


<?php
$season = $_POST['season'];

if (isset($_POST['season']) && is_array($_POST['season'])) {
    $food = $_POST['season'];
}

?>