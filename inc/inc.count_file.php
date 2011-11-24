<?php
/* 
 * foozzi 2011 copyleft
 * License: GNU/GPL
 * V.0.5 beta
*/
//Каталог, относительно скрипта
$path = 'uploads';
$d=@opendir($path);
<<<<<<< HEAD
if(!$d) die("Каталог ".$path." не найден! Попробуйте загрузить файл, папка создастся автоматически.");
=======
if(!$d) die("Каталог ".$path." не найден!");
>>>>>>> a8279673e5cf211ba1cf154a2fd2056b31432ec6
$s=0;
while($e=readdir($d)){
if(is_file($path."/".$e)) $s++;
}
echo "В хранилище уже ".$s." файл-(а)";
?>
