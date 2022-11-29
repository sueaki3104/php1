<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="Shift_JIS">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>ウィスキー購入履歴</title>
</head>

<body>
  <form action="./todo_txt_create.php" method="POST">
    <fieldset>
      <legend>購入したウィスキーをリスト化しよう（入力画面）</legend>
      <a href="todo_txt_read.php">リスト画面</a>
      <div class=input>
        購入日:<br><input type="date" name="date_of_purchase" style="width:200px;"> 
      </div>
      <div class=input>
        蒸留所名:<br><input type="text" name="distillery_name" style="width:200px;">
      </div>
      <div class=input>
        ウィスキー名:<br><input type="text" name="whisky_name" style="width:200px;">
      </div>
      <div class=input>
        熟成年数（age）:<br><input type="text" name="whisky_age" style="width:200px;">
      </div>
      <div class=input>
        購入場所:<br><input type="text" name="place" style="width:200px;">
      </div>
      <div class=input>
        値段（税込）:<br><input type="number" name="price" style="width:200px;">
      </div>
      <div class=input>
        想い出:<br><textarea name="memorise" style="width:200px;" style="heigt:400px;"></textarea>
      </div>
      <div>
        <button>登録</button>
      </div>
    </fieldset>
  </form>

</body>

</html>