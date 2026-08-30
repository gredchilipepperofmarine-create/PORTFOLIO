<?php
require_once (__DIR__ . '/../../includes/portfolioDb.php');
try {
  $sql = $pdo->prepare('UPDATE ufo_counter SET count = count + 1 WHERE id = 1');
  $sql->execute();
  require_once 'ufo_getcount.php';
  echo json_encode(['countUfo' => $count]);
} catch(Exeption $e) {
  echo '通信エラー';
}
?>