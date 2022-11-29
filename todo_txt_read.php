<?php
$str = '';

$file = fopen('./data/whisky.txt','r');
flock($file,LOCK_EX);

if($file){
  while($line = fgets($file)){
    $str .= "<tr><td>{$line}</td></tr>";
    $array[] = 
    ['date_of_purchase' => str_replace("\n",'',explode(' ',$line)[0]),
    'distillery_name' => str_replace("\n",'',explode(' ',$line)[1]),
    'whisky_name' => str_replace("\n",'',explode(' ',$line)[2]),
    'whisky_age' => str_replace("\n",'',explode(' ',$line)[3]),
    'place' => str_replace("\n",'',explode(' ',$line)[4]),
    'price' => str_replace("\n",'',explode(' ',$line)[5]),
    'memorise' => str_replace("\n",'',explode(' ',$line)[6])];
  }
}

flock($file,LOCK_UN);
fclose($file);

echo'<pre>';
var_dump($array);
echo'</pre>';
// exit();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>購入したウィスキーのリスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>購入したウィスキーのリスト（一覧画面）</legend>
    <a href="todo_txt_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>購入したウィスキーのリスト</th>
        </tr>
      </thead>
      <tbody>
        <?= $str ?>
      </tbody>
    </table>
  </fieldset>

<script>
  const array = <?=json_encode($array)?>;
  console.log(array);
</script>

</body>

</html>