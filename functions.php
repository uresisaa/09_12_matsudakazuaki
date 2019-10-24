<?php
//共通で使うものを別ファイルにしておきましょう。

//DB接続関数（PDO）
function connectToDb()
{
  $dbn = 'mysql:dbname=gsacfd04_db12;charset=utf8;port=3306;host=localhost';
  $user = 'root';
  $pwd = '';
  try {
    return new PDO($dbn, $user, $pwd);
  } catch (PDOException $e) {
    exit('dbError:' . $e->getMessage());
  }
}


//SQL処理エラー
function showSqlErrorMsg($stmt)
{
  $error = $stmt->errorInfo();
  exit('sqlError:' . $error[2]);
}

// SESSIONチェック＆リジェネレイト
function checkSessionId()
{
  // ログイン失敗時の処理（ログイン画面に移動）
  if(!isset($_SESSION['session_id'])||$_SESSION['session_id']!=session_id()){
    header('Location:login.php');
  }else{
    // ログイン成功時の処理（一覧画面に移動）
    session_regenerate_id(true);
    $_SESSION['session_id'] =session_id();
  }
}

// menuを決める
function menu()
{
  $menu = '<li class="nav-item"><a class="nav-link" href="user/user_index.php">ユーザー登録</a></li><li class="nav-item"><a class="nav-link" href="user/user_select.php">ユーザー管理</a></li>';
  // $menu .= '<li class="nav-item"><a class="nav-link" href="index.php">todo登録</a></li><li class="nav-item"><a class="nav-link" href="select.php">ユーザー一覧</a></li>';
  $menu .= '<li class="nav-item"><a class="nav-link" href="logout.php">ログアウト</a></li>';
  return $menu;
}


function userlog()
{
  // $menu = '<li class="nav-item"><a class="nav-link" href="user/user_index.php">ユーザー登録</a></li><li class="nav-item"><a class="nav-link" href="user/user_select.php">ユーザー管理</a></li>';
  // $menu .= '<li class="nav-item"><a class="nav-link" href="index.php">todo登録</a></li><li class="nav-item"><a class="nav-link" href="select.php">ユーザー一覧</a></li>';
  $userlog = '<li class="nav-item"><a class="nav-link" href="logout.php">ログアウト</a></li>';
  return $userlog;
}
