<?php
$dsn = 'mysql:dbname=phpkiso;host=localhost';
  $user = 'root';
  $password = '';
  $dbh = new PDO($dsn, $user, $password);
  $dbh->query('SET NAMES utf8');
  
  //お問い合わせ内容全件取得
  $sql = 'SELECT * FROM `survey` WHERE 1 ';
      // SELECT カラム名　FROM テーブル名　WHERE　条件
      // カラム名の部分に*を使用すると、全カラムを意味する。
  
  $sql = '';

  echo $sql;
  echo '<br>';

  $stmt = $dbh->prepare($sql);
  $stmt->execute();


  //取得した一覧データを表示
  while (1) { 
    $rec = $stmt -> fetch(PDO: :FETCH_ASSOC);
    if ($rec == false<?php
// １．データベースに接続する
$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

// ２．SQL文を実行する
$sql = 'SELECT * FROM `survey`';
// SQLを実行
$stmt = $dbh->prepare($sql);
$stmt->execute();

while (1) {
  $rec = $stmt->fetch(PDO::FETCH_ASSOC);
  if ($rec == false) {
    break;
  }
  echo $rec['code'] . '<br>';
  echo $rec['nickname'] . '<br>';
  echo $rec['email'] . '<br>';
  echo $rec['content'] . '<br>';
  echo '<hr>';
}

// ３．データベースを切断する
$dbh = null;

  

?>