<?php
/* 
 * foozzi 2011 copyleft
 * License: GNU/GPL
<<<<<<< HEAD
 * V.0.6.1 beta
*/
ini_set('display_errors',1); 
error_reporting(E_ALL);
include_once ("./inc/inc.config.php");

if (@$_POST ['upload'] == "") // Проверка запроса, если он пуст показываем форму, если в upload что то есть инклюдим файл с обработчиком
{
				echo 'Выберите файл | Максимальный размер '.$max_size.'MB | Запрещенно заливать исполняемые файлы<br><br>';
=======
 * V.0.5 beta
*/
ini_set('display_errors',1); 
error_reporting(E_ALL);

if (@$_POST ['upload'] == "") // Проверка запроса, если он пуст показываем форму, если в upload что то есть инклюдим файл с обработчиком
{
				echo 'Выберите файл | Максимальный размер 10 MB | Запрещенно заливать исполняемые файлы<br><br>';
>>>>>>> a8279673e5cf211ba1cf154a2fd2056b31432ec6
				echo '<form enctype="multipart/form-data" action="" method="post">';
			   echo '<input type="file" name="filename" size="45">';
				echo '<input type="submit" value=" Грузить! " name="upload">';
				echo '</form>';
				echo '<br>';
				include_once ("./inc/inc.count_file.php"); // Счетчик

			} else {

<<<<<<< HEAD
         include_once("./core/engine.php"); // загрузка
=======
include_once("./inc/inc.upload.php"); // загрузка
>>>>>>> a8279673e5cf211ba1cf154a2fd2056b31432ec6

   }

?>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> a8279673e5cf211ba1cf154a2fd2056b31432ec6
