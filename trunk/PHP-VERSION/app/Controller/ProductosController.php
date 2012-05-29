<?php
class ProductosController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index');
	}
    
	public $helpers = array('Html', 'Form');
	public $components = array('Session');
	public $name = 'Productos';	
	
	public function index() {		
		$this->set('productos', $this->Producto->find('all'));
	}	
	
    public function add() {
		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');
		
        if ($this->request->is('post')) {
			$this->Producto->create();
            if ($this->Producto->save($this->request->data)) {
				
				//$this->Session->setFlash($this->Producto->getLastInsertID());
				
				$dir = new Folder(WWW_ROOT.'img\productos');
				$file = new File($dir->pwd() . DS . 'temp.jpg');
				
				if ($file->exists()) {
					$file->copy($dir->pwd() . DS . $this->Producto->getLastInsertID() . '.jpg');
					//$file->copy($dir->pwd() . DS . $this->Producto->getLastInsertID() . '_s.jpg');
					$file->delete();
					$this->Session->setFlash('El producto se ha agregado correctamente.');
				} else {
					$this->Session->setFlash('No se pudo agregar el producto.');
				}
				$file->close();

                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('No se pudo agregar el producto.');
            }
        }
    }
	
	public function edit() {		
	}
		
}
