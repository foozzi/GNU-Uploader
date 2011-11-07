<?
$file_list = array(
                 'upload_badext' => array (        // Расширения запрещенных файлов
                                              'text/html',
                                              'text/php',
                                              'text/x-php',
                                              'application/php',
                                              'application/x-php',
                                              'application/x-httpd-php',
                                              'application/javascript',
                                              'application/x-ruby',
                                              'application/x-sh',
                                              'application/ecmascript',
                                              'vbs',
                                          ),
                 'upload_correct_mime_type' => array(
                                                       'image/gif',
                                                       'image/jpeg',
                                                       'image/pjpeg',
                                                       'multipart/form-data',
                                                        ),
                 );

function check_mime_type() {
        global $file_list;
        
         if(!in_array($this->mime_type, $file_list['right_file'])) return false;
        
         return true;
    }
?>

