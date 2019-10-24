<?php
// $rows = $stmt->fetchAll();
// 関数ファイルの読み込み
include('user_function.php');
$pdo = connectToDb();

// getで送信されたidを取得
$id   = $_GET['id'];

//DB接続します
$pdo = connectToDb();

//データ登録SQL作成，指定したidのみ表示する
$sql = 'SELECT*FROM user_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//データ表示
if ($status == false) {
    // エラーのとき
    showSqlErrorMsg($stmt);
} else {
    // エラーでないとき
    $rs = $stmt->fetch();
    // fetch()で1レコードを取得して$rsに入れる
    // $rsは配列で返ってくる．$rs["id"], $rs["task"]などで値をとれる
    // var_dump()で見てみよう
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>todo更新ページ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">ログイン更新</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="user_index.php">管理者ページ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_select.php">ログイン一覧</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <form method="post" action="user_update.php">
        <div class="form-group">
            <label for="name">name</label>
            <!-- 受け取った値をvaluesに埋め込もう -->
            <input type="text" class="form-control" id="name" name="name" value="<?= $rs['name'] ?>">
        </div>
        <div class="form-group">
            <label for="lid">ID</label>
            <!-- 受け取った値をvaluesに埋め込もう -->
            <input type="text" class="form-control" id="lid" name="lid" value="<?= $rs['lid'] ?>">
        </div>
        <div class="form-group">
            <label for="lpw">PW</label>
            <!-- 受け取った値挿入しよう -->
            <input type="text" class="form-control" id="lpw" name="lpw" value="<?= $rs['lpw'] ?>">
        </div>
        <div class="form-group">
            <label for="kanri_flg"></label>
            <!-- 受け取った値挿入しよう -->
            <!-- <input type="text" class="form-control" id="kanri_flg" name="kanri_flg" value="<?= $rs['kanri_flg'] ?>"> -->
            <select class="btn btn-secondary dropdown-toggle" name="kanri_flg" id="kanri_flg">
                <option id="kanri_flg" value="0" <?= $rs['kanri_flg'] == "0" ? 'selected' : "" ?>>一般</option>
                <option id="kanri_flg" value="1" <?= $rs['kanri_flg'] == "1" ? 'selected' : "" ?>>管理者</option>
            </select>
        </div>
        <div class="form-group">
            <label for="life_flg"></label>
            <!-- 受け取った値挿入しよう -->
            <!-- <input type="taxt" class="form-control" id="life_flg" name="life_flg" value="<?= $rs['life_flg'] ?>"> -->
            <select class="btn btn-secondary dropdown-toggle" name="life_flg" id="life_flg">
                <option value="0" <?= $rs['life_flg']  == "0" ? 'selected' : "" ?>>アクティブ</option>
                <option value="1" <?= $rs['life_flg']  == '1' ? 'selected' : "" ?>>非アクティブ</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <!-- idは変えたくない = ユーザーから見えないようにする-->
        <input type="hidden" name="id" value="<?= $rs['id'] ?>">
    </form>

</body>

</html>