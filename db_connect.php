<?php
  // データベースユーザ
  $user = 'yaoya';
  $password = 'yaoyapass';
  // 利用するデータベース
  $dbName = 'yaoya';
  // MySQLサーバ
  $host = 'db-mysql.caz8lxtiucm5.us-east-1.rds.amazonaws.com:3306';
  // MySQLのDSN文字列
  $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
  //MySQLデータベースに接続する
  try {
    $pdo = new PDO($dsn, $user, $password);
    // プリペアドステートメントのエミュレーションを無効にする
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // 例外がスローされる設定にする
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo '<span class="error">エラーがありました。</span><br>';
    echo $e->getMessage();
    exit();
  }
  ?>
