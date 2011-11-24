<?php
/* 
 * foozzi 2011 copyleft
 * License: GNU/GPL
 * V.0.6.1 beta
*/
error_reporting(E_ALL | E_STRICT); 
ini_set("display_errors", True);

include_once ("./inc/inc.config.php");
$date = date("d = F = Y ");
$userip = $_SERVER['REMOTE_ADDR'];
$file_name = $_FILES['filename']['name'];
$file_size = $_FILES['filename']['size'];
$file_size = $file_size / 1048576; 

if (!file_exists($upload_dir))
{
	mkdir('./'.$upload_dir, 0777);
	}

if(isset($allowedtypes)) 
{
	$allowed = 0;
	foreach($allowedtypes as $ext)
	{
		if(substr($file_name, (0 - (strlen($ext) + 1))) == ".".$ext) 
		$allowed = 1;
		}
		if($allowed == 0) 
		{
			echo "Не разрешенный тип файла.";
			die();
			}
}

if($file_size > $max_size) 
{
	echo "Файл слишком большой";
	}
			
$d=opendir($upload_dir);
$s=0;
while($e=readdir($d))
{
	if(is_file($upload_dir."/".$e)) 
     $s++;
  }			

$filelist = fopen("./data/data_files.txt","a+");
$upload_filename = $s."-".$file_name;/*.preg_replace('/^.*\.(.*)$/U', '$1', $file_name);*/
fwrite($filelist, $s ."|". basename($_FILES['filename']['name']) ."|". $userip ."|". $date."|". $upload_filename . "|\n");			

$upload_link = "http://".$_SERVER["HTTP_HOST"].dirname ($_SERVER["PHP_SELF"]).'/'.$upload_dir.'/'.$upload_filename;
move_uploaded_file($_FILES['filename']['tmp_name'], $upload_dir."/".$upload_filename);

	  echo "Файл загружен.<br>"; 
	  echo "Линки:<br>";
     echo "<input type='text' size=80 onclick='this.select()' value='".$upload_link."'><br><br>"; // Обычная ссылка
     echo "HTML Линк:<br>";
     echo "<input type='text' size=80 onclick='this.select()' value=\"<a href='".$upload_link."'>".$upload_link."</a>\"><br><br>"; // HTML Ссылка
     echo "BB-Code Линк:<br>";
     echo "<input type='text' size=80 onclick='this.select()' value='[url]".$upload_link."[/url]'><br><br>"; // BB-Code Ссылка
     echo "<a href='?".md5(microtime())."'>Загрузить другой файл</a>";
	
  
?>
