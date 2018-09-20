<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>form_practice</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>確認画面</h1>
  <form action="thanks.php" method="post">
    <table border="1">
      <tr>
        <td>名前</td>
        <td><?php echo $_POST["name"]; ?></td>
      </tr>
      <tr>
        <td>メールアドレス</td>
        <td><?php echo $_POST["mail"]; ?></td>
      </tr>
      <tr>
        <td>メッセージ</td>
        <td><?php echo $_POST["message"]; ?></td>
      </tr>
    </table>
    <input type="submit" value="送信" />
  </form>
</body>
</html>
