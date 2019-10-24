<?php
// セッションのスタート
session_start();

//0.外部ファイル読み込み
include('functions.php');

// ログイン状態のチェック
checkSessionId();
// $menu = menu();

//1. DB接続
$pdo = connectToDb();
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理者ログインページ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
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
            <a class="navbar-brand" href="#">ユーザー登録</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
             <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">   
                    <li class="nav-item">
            <a class="nav-link" href="index.php">ブックマーク登録</a>
          </li>
        　<li class="nav-item">
            <a class="nav-link" href="../select_nologin.php">ブックマーク一覧</a>
          </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="user_index.php">管理者ログイン</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="user_select.php">ユーザー<br>&ensp;一覧</a>
            </li>

            <!-- <li class="nav-item">
                <a class="nav-link" href="user_select.php">ユーザー<br>&ensp;一覧</a>
            </li> -->
            <li class="nav-item">
            <a class="nav-link" href="../logout.php">ログアウト</a>
            </li>
            
          </ul>

        </nav>
    </header>

    <form method="post" action="user_insert.php">
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="lid">ID</label>
            <input type="text" class="form-control" id="lid" name="lid">
        </div>
        <div class="form-group">
            <label for="lpw">PW</label>
            <input type="" class="form-control" id="lpw" name="lpw">
        </div>

        <div class="form-group">
            <select class="btn btn-secondary dropdown-toggle" name="kanri_flg" id="kanri_flg">
                <option id="kanri_flg" value="0">一般</option>
                <option id="kanri_flg" value="1">管理者</option>
            </select>
        </div>

        <div class="form-group">
            <select class="btn btn-secondary dropdown-toggle" name="life_flg" id="life_flg">
                <option value="0">アクティブ</option>
                <option value="1">非アクティブ</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <input type="hidden" name="id" value="<?= $rs['id'] ?>">
    </form>

</body>

</html>