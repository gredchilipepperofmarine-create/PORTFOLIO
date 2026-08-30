-- カウント保存用テーブルを作成
CREATE TABLE IF NOT EXISTS `ufo_counter` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `count` INT UNSIGNED NOT NULL DEFAULT 0
)
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT IGNORE INTO `ufo_counter` (`id`, `count`) VALUES (1, 0);