<?php
/* 
 * foozzi 2011 copyleft
 * License: GNU/GPL
 * V.0.6.1
*/

 
ini_set('display_errors',1); 
error_reporting(E_ALL);
include_once ("./inc/inc.config.php");

if (@$_POST ['upload'] == "") // Проверка запроса, если он пуст показываем форму, если в upload что то есть инклюдим файл с обработчиком
{


				echo 'Выберите файл | Максимальный размер '.$max_size.'MB | Запрещенно заливать исполняемые файлы<br><br>';
				echo '<form enctype="multipart/form-data" action="" method="post">';
			   echo '<input type="file" name="filename" size="45"></br>';
				echo '<input type="submit" value=" Грузить! " name="upload">';
				echo '</form>';
				echo '<br>';
				include_once ("./inc/inc.count_file.php"); // Счетчик

			} else {

         include_once("./core/engine.php"); // загрузка

   }

?>
</body>
</html>