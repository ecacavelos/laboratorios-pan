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
	
	public $name = 'Producto';
    public $hasMany = array(
        'Upload' => array('className' => 'Upload'),
    );
	
}