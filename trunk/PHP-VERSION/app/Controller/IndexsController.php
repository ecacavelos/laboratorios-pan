<?php
class IndexsController extends AppController {
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index', 'empresa', 'enlaces', 'contactenos');
	}
	
    public $helpers = array('Html', 'Form');
	
	public function index() {
		$this->loadModel('Producto');
		$this->set('productos', $this->Producto->find('all'));
	}
	
	public function empresa() {
	}
	
	public function enlaces() {

	}
	
}