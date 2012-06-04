<?php
class Upload extends AppModel {
	var $name = 'Upload';
	var $actsAs = array('FileUpload.FileUpload' => array(
		'uploadDir' => 'img/productos',
		'allowedTypes' => array(
		  'jpg' => array('image/jpeg', 'image/pjpeg'),
		  'jpeg' => array('image/jpeg', 'image/pjpeg'), 
		  'gif' => array('image/gif'),
		  'png' => array('image/png', 'image/x-png'),
		  'pdf',
		),
		'fileNameFunction' => 'sanitizeFileName'
	));
	
	function sanitizeFileName($fileName){
		//Logic for sanitizing your filename
		
		$extension1 = end(explode('.',$fileName));
    	return 'temp.' . $extension1;
		//return $fileName;
	}
		
}
?>