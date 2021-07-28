<?php 

define("DBHOST", 'localhost');
define("DBUSER", 'root');
define("DBPASS", '');
define("DBNAME", 'test');

$db = @mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die("Нет соединения с БД");
mysqli_set_charset($db, "utf8") or die("Не установлена кодировка соединения");

?>