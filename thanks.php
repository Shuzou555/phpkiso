<?php

	//CRUD処理
	//C Create - 作成 - INSERT
	//R Read   - 取得 - SELECT
	//U Update - 更新 - UPDATE
	//D Delete - 削除 - DELETE


$nickname = $_POST['nickname'];
  $email = $_POST['email'];
  $content = $_POST['content'];

  //1.データベースの接続処理
  $dsn = 'mysql:dbname=phpkiso;host=localhost';
  $user = 'root';
  $password = '';
  $dbh = new PDO($dsn, $user, $password);
  $dbh->query('SET NAMES utf8');
  //オブジェクト指向

  //2.SQL文を実行する
  //アクサングラープ→｀
  $sql = 'INSERT INTO `survey` (`nickname`, `email`,`content`)
  											VALUES("' . $nickname . '", "' . $email . '", "' . $content . '")';
  echo $sql;
  echo '<br>';

  $stmt = $dbh->prepare($sql);
  $stmt->execute();

  //3,データベースと切断
  $dbh = null;
 ?>




<!DOCTYPE html>
<html lang="ja">
<head>
  <title>送信完了</title>
  <meta charset="utf-8">
</head>
<body>
  <h1>お問い合わせありがとうございました！</h1>
</body>
</html>