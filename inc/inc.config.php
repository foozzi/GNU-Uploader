<?php
/* 
 * foozzi 2011 copyleft
 * License: GNU/GPL
<<<<<<< HEAD
 * V.0.6.1 beta
*/
/* Максимальный размер файла в мб. */
$max_size = 50;
/* Папка для загрузки */
$upload_dir = 'uploads';
/* Путь к папке загрузки */
$upload_path = dirname (__FILE__).$upload_dir;
/* Массив с разрешенными файлами */
$allowedtypes = array("zip","rar");
=======
 * V.0.5 beta
*/
     $upload_filename = /*basename($_FILES["filename"]["name"]);*/ "file-".$s.".".preg_replace('/^.*\.(.*)$/U', '$1', $_FILES['filename']['name']);
     $upload_path = dirname (__FILE__).$upload_dir;
     $upload_link = "http://".$_SERVER["HTTP_HOST"].dirname ($_SERVER ["PHP_SELF"]).'/'.$upload_dir.$upload_filename;
     $upload_dir = 'uploads/';
>>>>>>> a8279673e5cf211ba1cf154a2fd2056b31432ec6
?>
