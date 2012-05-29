<?php
class Producto extends AppModel {
	public $validate = array(
        'nombre' => array(
            'rule' => 'notEmpty'
        ),
        'descripcion' => array(
            'rule' => 'notEmpty'
        )
    );
	
	var $actsAs = array('FileUpload.FileUpload' => array('uploadDir' => 'img/productos', 'fileNameFunction' => 'sanitizeFileName'));
	
	function sanitizeFileName($fileName){
		//Logic for sanitizing your filename
    	return 'temp.jpg';
	}
	
}