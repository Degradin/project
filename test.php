<?php 
$title="Форма авторизации"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php"; // подключаем файл для соединения с БД
?>
<?php
  $act = R::dispense('acts');
  $act->time = date("d.m.y, H:i:s"); 
  $act->text = "Lorem ipsum";
  R::store($act);

  echo $act;
?>