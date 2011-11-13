<?php
/* 
 * foozzi 2011 copyleft
 * License: GNU/GPL
 * V.0.5 beta
*/
     $upload_filename = /*basename($_FILES["filename"]["name"]);*/ "file-".$s.".".preg_replace('/^.*\.(.*)$/U', '$1', $_FILES['filename']['name']);
     $upload_path = dirname (__FILE__).$upload_dir;
     $upload_link = "http://".$_SERVER["HTTP_HOST"].dirname ($_SERVER ["PHP_SELF"]).'/'.$upload_dir.$upload_filename;
     $upload_dir = 'uploads/';
?>
