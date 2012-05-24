<?php
class IndexsController extends AppController {
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index', 'empresa', 'enlaces', 'contactenos');
	}
	
    public $helpers = array('Html', 'Form');
	
	public function index() {
	}
	
	public function empresa() {
	}
	
	public function enlaces() {

	}
	
	public function contactenos() {
	}
	
}