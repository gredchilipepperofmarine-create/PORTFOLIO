<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=ufo_counter;charset=utf8', 'ufoUser', 'ufo_counter');
  $sql = $pdo->prepare('UPDATE ufo_counter SET count = count + 1 WHERE id = 1');
  $sql->execute();
  require_once 'ufo_getcount.php';
  echo json_encode(['countUfo' => $count]);
} catch(Exeption $e) {
  echo '通信エラー';
}
?>