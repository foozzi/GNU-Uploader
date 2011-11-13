<?php
/* 
 * foozzi 2011 copyleft
 * License: GNU/GPL
 * V.0.5 beta
*/
//Каталог, относительно скрипта
$path = 'uploads';
$d=@opendir($path);
if(!$d) die("Каталог ".$path." не найден!");
$s=0;
while($e=readdir($d)){
if(is_file($path."/".$e)) $s++;
}
echo "В хранилище уже ".$s." файл-(а)";
?>
