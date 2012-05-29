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
		if ($this->Auth->user('id')) {
			$this->set('logeado', '1');
		} else {
			$this->set('logeado', '0');
		}
	}	
	
    public function add() {
		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');
		
        if ($this->request->is('post')) {
			$this->Producto->create();
            if ($this->Producto->save($this->request->data)) {
								
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
	
	public function edit($id = null) {
		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');
		
		$this->Producto->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->Producto->read();
		} else {
			if ($this->Producto->save($this->request->data)) {
				
				$dir = new Folder(WWW_ROOT.'img\productos');
				$file = new File($dir->pwd() . DS . $id . '.jpg');
				$file->delete();
				$file->close();

				$file = new File($dir->pwd() . DS . 'temp.jpg');
				if ($file->exists()) {
					$file->copy($dir->pwd() . DS . $id . '.jpg');
					$file->delete();
									$this->Session->setFlash('Se actualizó el producto.');
				} else {
					$this->Session->setFlash('No se pudo actualizar el producto.');
				}
				$file->close();
				
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('No se pudo actualizar el producto.');
			}
		}
	}
	
	public function delete($id) {
		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');
		
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Producto->delete($id)) {
			
			$dir = new Folder(WWW_ROOT.'img\productos');
			$file = new File($dir->pwd() . DS . $id . '.jpg');
			
			if ($file->exists()) {
				$file->delete();
			}
			
			$file->close();
						
			$this->Session->setFlash('El producto con ID: ' . $id . ' ha sido borrado.');
			$this->redirect(array('action' => 'index'));
		}
	}
		
}
