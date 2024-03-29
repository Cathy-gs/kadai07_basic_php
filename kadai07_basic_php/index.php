<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>地域の食材図鑑</title>
</head>
<body>
    <?php include("inc/header.html"); ?>
   <div class="forms">
    <form action="confirm.php" method="post">
            都道府県： <?php include("form_select1.php");?><br>
            季節：<?php include("form_select2.php");?><br>
            食材名：<input type="text" name="name"><br>
            特徴：<input type="text" name="overview"><br>
            詳細：<textarea name="ditail" id="" cols="30" rows="4"></textarea><br>
            おすすめの調理方法：<textarea name="cook" id="" cols="30" rows="4"></textarea>
            <input type="submit" value="確認">
            <!-- <button type="submit">送信</button>  input とbuttonは意味が同じ-->

        </form>
        </div>
</body>
</html>