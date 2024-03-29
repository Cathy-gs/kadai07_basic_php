

<h1>完了</h1>
<p>送信が完了しました。 3秒後に元のページに戻ります</p>

<?php
$prefectures = $_POST["prefectures"];
$name = $_POST["name"];
$overview = $_POST["overview"];
$ditail = $_POST["ditail"];
$cook = $_POST["cook"];


$c = ",";
$str = $prefectures.$c.$name.$c.$overview.$c.$ditail.$c.$cook;

//ファイルに書き込むまでの挙動（3行がセット）
$file = fopen("date.csv","a"); // aは追加で書き込みをしたいという構文
fwrite($file,$str."\n"); // \（opt+¥）nを追加すると、改行ができる（改行がないと）
fclose($file); // 必ずファイルをクローズする

?>

<script>setTimeout(function(){ window.location.href = "index.php"; }, 3000);</script>

