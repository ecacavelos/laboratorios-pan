<?php
class IndexsController extends AppController {
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index', 'empresa', 'enlaces', 'homenaje');
	}
	
    public $helpers = array('Html', 'Form');
	
	public function index() {
		$this->loadModel('Producto');
		$this->set('productos', $this->Producto->find('all'));
		$this->set('productos_en_promocion', $this->Producto->find('all', array('conditions' => array('Producto.promocion' => '1'))));
	}
	
	public function empresa() {
	}
	
	public function enlaces() {
	}
	
	public function homenaje() {
	}	
		
}