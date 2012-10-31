<?php
	$uploaddir = './';
	$uploaddir  = $target . basename($_FILE['file']['filename']);
	

	#if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
	 #   $path = './uploads/' . basename($_FILES['file']['filename']);
	 #   move_uploaded_file($_FILES['file']['filename'], $path);
	#}
	if (is_uploaded_file($_FILE['file']['filename'])) {
		echo "Temp file uploaded. \r\n";
    	} else {
   		echo "Temp file not uploaded. \r\n";
   	}
	if (move_uploaded_file($_FILE['file']['filename'], $uploaddir)) {
        	 echo "qacprojects.wesleyan.edu/interface_beta/gamma/{$file}" . "\r\n" .  $_FILES['userfile']['size'] . "\r\n" . $_FILES['userfile']['type'] ;
    }
	
#$bodyData = array (
#  'json' => json_encode($data)
#);


?>
