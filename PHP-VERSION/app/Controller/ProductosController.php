<?php
class ProductosController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index');
	}
    
	public $helpers = array('Html', 'Form');
	public $name = 'Productos';
	
	public function index() {		
	 $this->set('productos', $this->Producto->find('all'));
	}
	
	public function add() {		
	}
	
	public function edit() {		
	}
	
}