<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=ufo_counter;charset=utf8', 'ufoUser', 'ufo_counter');
  $current_sql = $pdo->prepare('SELECT count FROM ufo_counter WHERE id = 1');
  $current_sql->execute();
  $count = $current_sql->fetch();
  $getcount = $count['count'];
} catch(Exeption $e) {
  echo '通信エラー';
}
?>