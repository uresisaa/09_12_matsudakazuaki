<?php
// 関数ファイルの読み込み
include('functions.php');
$pdo = connectToDb();

//1. GETデータ取得
$id   = $_GET['id'];

//2. DB接続します(エラー処理追加)
$pdo = connectToDb();

//3．データ登録SQL作成
$sql = 'DELETE FROM gs_bm_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//4．データ登録処理後
if ($status == false) {
  showSqlErrorMsg($stmt);
} else {
  header('Location: select.php');
  //select.phpへリダイレクト
  // header();
  // $rs = $stmt->fetch();
  exit;
}
