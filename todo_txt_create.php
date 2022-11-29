<?php
// var_dumpを最初に使ってデータが来ているか確認
// var_dump($_POST);
// exit();

// $data= file_get_contents('./data/whisky.txt'); // シフトJISファイル読み込み
// $str = mb_convert_encoding($data,"utf-8","sjis"); // シフトJISからUTF-8に変換
// echo $data; // 文字化けが起きない

$date_of_purchase = $_POST["date_of_purchase"];
$distillery_name = $_POST["distillery_name"];
$whisky_name =  $_POST["whisky_name"];
$whisky_age =  $_POST["whisky_age"];
$place =  $_POST["place"];
$price =  $_POST["price"];
$memorise =  $_POST["memorise"];


// \n　は改行を表す dataを書き込みます {}間に半角スペースが必要{}
$write_data = "{$date_of_purchase} {$distillery_name} {$whisky_name} {$whisky_age} {$place} {$price} {$memorise}\n";
// ファイルをOPNEしましょう。データのある場所を指定とファイル操作時のオプションを指定
$file = fopen('data/whisky.txt','a');
// LOCK＿EX は排他的ロック  書き込みをするのでファイルをロックする
flock($file,LOCK_EX);
// 他の人が書き込めないので書き込みます
fwrite($file,$write_data);
// 書き込みが終わったので他の人が触れるようにロックを解除します
flock($file,LOCK_UN);
// 終わったのでファイルをとじましょう
fclose($file);

// このままだと画面が変わらないので入力画面に戻してあげましょう
header('Location:todo_txt_input.php');

?>
