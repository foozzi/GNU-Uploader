<?php
/* 
 * foozzi 2011 copyleft
 * License: GNU/GPL
 * V.0.5 beta
*/
error_reporting(E_ALL | E_STRICT); 
ini_set("display_errors", True);

/* Функция подсчета файлов */
function count_file() { 
 global $upload_filename, $upload_path, $upload_link, $upload_dir; // Глобальные переменные
	     $path = 'uploads';
        $d=@opendir($path);
        $s=0;
while($e=readdir($d))
  {
if(is_file($path."/".$e)) 
     $s++;

  }
     include_once ("./inc/inc.config.php"); // Иклюд файла конфигов
  }
	 
/* Функция проверки файлов */
function check_file() {
global $ext;
	
	if ($_FILES) 
 {
		switch ($_FILES['filename']['type']) // Цикл проверки файлов
      {
			case 'image/jpeg':	      $ext='jpg'; break;
			case 'image/pjpeg':	      $ext='jpg'; break;
			case 'image/png':	         $ext='png'; break;
			case 'application/pdf':	   $ext='pdf'; break;
			case 'application/x-bzip2':$ext='bz2'; break;
			case 'application/x-gzip':	$ext='gz';  break;
			case 'application/x-tar':	$ext='tar'; break;
			case 'application/x-troff-man':$ext='man'; break;
			case 'application/zip':	   $ext='zip'; break;
         case 'audio/mpeg':	      $ext='mp3'; break;
		
			default:			$ext='';
		}	
 }
}



/* Функция проверки размера файла и загрузка */
function upload_file($max_size=645728) 
{
	
	global $upload_path, $upload_filename, $upload_dir, $upload_link, $m, $ext; // Глобальные переменные
   

		
if ($ext == true && $_FILES['filename']['size'] <= $max_size) // Проверка параметров файла
   {
			$m=move_uploaded_file($_FILES['filename']['tmp_name'], $upload_dir.$upload_filename); // Переменная отвечающая за загрузка файла
if ($m) // Если файл загружен выдать форму с ссылками
    {
	  echo "Файл загружен.<br>"; 
	  echo "Линки:<br>";
     echo "<input type='text' size=80 onclick='this.select()' value='".$upload_link."'><br><br>"; // Обычная ссылка
     echo "HTML Линк:<br>";
     echo "<input type='text' size=80 onclick='this.select()' value=\"<a href='".$upload_link."'>".$upload_link."</a>\"><br><br>"; // HTML Ссылка
     echo "BB-Code Линк:<br>";
     echo "<input type='text' size=80 onclick='this.select()' value='[url]".$upload_link."[/url]'><br><br>"; // BB-Code Ссылка
     echo "<a href='?".md5(microtime())."'>Загрузить другой файл</a>";
    }
	else
	  {
            echo "Ошибка. Возможно не хватает прав доступа.<br>";
            echo "<a href='?".md5(microtime())."'>Загрузить другой файл</a>";
	  }
    }
  else 
      {
				echo "Не разрешенный тип файла или слишком большой размер файла.<br>";
				echo "<a href='?".md5(microtime())."'>Загрузить другой файл</a>";
	   }

 }

count_file();// Вызов функции подсчета файлов и добавки номера к названию файла
check_file();// Вызов функции проверки файлов
upload_file();// Вызов функции загрузки файлов
  
?>
