<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" media="all" href="style.css">
	</head>
	<body>
		<table width="100%" height="100%"><tr valign="center"><td align="center" nowrap><div id="upload">


<?php
/* 
 * foozzi 2011 copyleft
 * License: GNU/GPL
 * V.0.2 beta
*/
ini_set('display_errors',1); 
error_reporting(E_ALL);

if (@$_POST ['upload'] == "")
{
				echo 'Выберите файл | Максимальный размер 2000 MB | Запрещенно заливать исполняемые файлы<br><br>';
				echo '<form enctype="multipart/form-data" action="" method="post">';
				/*echo '<input type="hidden" name="MAX_FILE_SIZE" value="30000">';*/
				echo '<input type="file" name="file" size="45">';
				echo '<input type="submit" value=" Грузить! " name="upload">';
				echo '</form>';

			} else {

$blacklist = '/.(html|com|bat|exe|cmd|vbs|msi|jar|php(\d?)|phtml|access|js)$/i'; // патерт с запрещенными файлами
/* Если файл содержит запрещенное разрешение - выход с уведомлением*/
if($_FILES["file"]["size"] > 1024*2000*1024)
{
exit ("Файл слишком большой для загрузки");
}

if (preg_match($blacklist, $_FILES['file']['name'])) 
{
   exit ("Файл с данным расширением запрещен к загрузке");
}

 
$upload_dir = '/uploads/'; // папка
$upload_path = dirname (__FILE__).$upload_dir; //путь
/*$upload_filename = basename($_FILES['file']['tmp_name']);*/ // имя файла не изменное
$upload_filename = basename($_FILES["file"]["name"]);
$upload_link = "http://".$_SERVER ["HTTP_HOST"].dirname ($_SERVER ["PHP_SELF"]).$upload_dir.$upload_filename; // образовывает ссылку на скачивание


if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_path.$upload_filename))  
{

     echo "Файл загружен.\n";
     echo "Линки:<br>";
     echo "<input type='text' size=80 onclick='this.select()' value='".$upload_link."'><br><br>";
     echo "HTML Линк:<br>";
     echo "<input type='text' size=80 onclick='this.select()' value=\"<a href='".$upload_link."'>".$upload_link."</a>\"><br><br>";
     echo "BB-Code Линк:<br>";
     echo "<input type='text' size=80 onclick='this.select()' value='[url]".$upload_link."[/url]'><br><br>";
     echo "<a href='?".md5(microtime())."'>Загрузить другой файл</a>"; 
 } 
else 
{
   echo "Файл не загружен.\n";
}
}
?>



</body>
</html>
