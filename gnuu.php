<?php
/* 
 * foozzi 2011 copyleft
 * License: GNU/GPL
 * V.0.5 beta
*/
ini_set('display_errors',1); 
error_reporting(E_ALL);

if (@$_POST ['upload'] == "") // Проверка запроса, если он пуст показываем форму, если в upload что то есть инклюдим файл с обработчиком
{
				echo 'Выберите файл | Максимальный размер 10 MB | Запрещенно заливать исполняемые файлы<br><br>';
				echo '<form enctype="multipart/form-data" action="" method="post">';
			   echo '<input type="file" name="filename" size="45">';
				echo '<input type="submit" value=" Грузить! " name="upload">';
				echo '</form>';
				echo '<br>';
				include_once ("./inc/inc.count_file.php"); // Счетчик

			} else {

include_once("./inc/inc.upload.php"); // загрузка

   }

?>
</body>
</html>
