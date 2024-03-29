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
            if ($this->Producto->saveAll($this->request->data)) {
								
				$dir = new Folder(WWW_ROOT.'img/productos');
				$file = new File($dir->pwd() . DS . 'temp.jpg');
				$current_id = $this->Producto->getLastInsertID();
				
				// Verificamos que exista el archivo de imagen, subido como 'temp.jpg' antes de darle el nombre apropiado
				if ($file->exists()) {
					$file->copy($dir->pwd() . DS . $current_id . '.jpg');					
					$file->delete();
					$this->Session->setFlash('El producto se ha agregado correctamente.');
				} else {
					$this->Session->setFlash('No se pudo cargar el archivo de imagen para el producto.');
				}
				$file->close();
				
				// Verificamos que exista el archivo de prospecto, subido como 'temp.pdf' antes de darle el nombre apropiado
				$file = new File($dir->pwd() . DS . 'temp.pdf');
				if ($file->exists()) {
					$this->Producto->id = $current_id;
					$file->copy($dir->pwd() . DS . $this->Producto->field('nombre') . '.pdf');
					$file->delete();
					$this->Session->setFlash('El producto se ha agregado correctamente.');
				} else {
					$this->Session->setFlash('No se pudo cargar el archivo de prospecto para el producto.');
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
		$previous_nombre = $this->Producto->field('nombre');
		
		if ($this->request->is('get')) {
			$this->request->data = $this->Producto->read();
		} else {
			if ($this->Producto->saveAll($this->request->data)) {
				
				$dir = new Folder(WWW_ROOT.'img/productos');
				
				$this->Producto->id = $id;
				$nuevo_nombre = $this->Producto->field('nombre');
				$nuevo_prospecto_ok = false;
				
				// 1. Verificamos que se haya subido una imagen nueva, apuntamos $file al archivo de imagen anterior y borramos dicho archivo
				$file0 = new File($dir->pwd() . DS . 'temp.jpg');
				if ($file0->exists()) {
					$file = new File($dir->pwd() . DS . $id . '.jpg');
					$file->delete();
					$file->close();
				}
				$file0->close();
				
				// 2. Verificamos que se haya subido un prospecto nuevo, apuntamos $file al archivo de prospecto anterior y borramos dicho archivo
				$file0 = new File($dir->pwd() . DS . 'temp.pdf');
				$file = new File($dir->pwd() . DS . $previous_nombre . '.pdf');				
				if (!$file0->exists()) {
					if ($file->exists()) {
						$file->copy($dir->pwd() . DS . $nuevo_nombre . '.pdf');
						$nuevo_prospecto_ok = true;
					}
				}
				if ($file->exists()) {
					$file->delete();
				}
				$file->close();
				$file0->close();
				
				// 3. Tomamos el nuevo archivo de imagen subido y lo renombramos a {id}.jpg
				$file = new File($dir->pwd() . DS . 'temp.jpg');
				if ($file->exists()) {
					$file->copy($dir->pwd() . DS . $id . '.jpg');
					$file->delete();
					$this->Session->setFlash('Se actualizó el producto.');
				} else {
					$this->Session->setFlash('No se pudo actualizar el archivo de imagen.');
				}
				$file->close();
				
				// 4. Tomamos el nuevo archivo de prospecto subido y lo renombramos a {nombre}.pdf
				$file = new File($dir->pwd() . DS . 'temp.pdf');
				if ($file->exists()) {					
					$file->copy($dir->pwd() . DS . $nuevo_nombre . '.pdf');
					$file->delete();
					$this->Session->setFlash('Se actualizó el producto.');
				} else {
					if (!$nuevo_prospecto_ok) {
						$this->Session->setFlash('No se pudo actualizar el archivo de prospecto ' . $nuevo_nombre);
					}
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
		
		$this->Producto->id = $id;
		$current_nombre = $this->Producto->field('nombre');
		
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Producto->delete($id)) {
			
			$dir = new Folder(WWW_ROOT.'img/productos');

			// Borramos el archivo de imagen
			$file = new File($dir->pwd() . DS . $id . '.jpg');			
			if ($file->exists()) {
				$file->delete();
			}
			$file->close();

			// Borramos el archivo de prospecto
			$file = new File($dir->pwd() . DS . $current_nombre . '.pdf');
			if ($file->exists()) {
				$file->delete();
			}
			$file->close();
						
			$this->Session->setFlash('El producto con ID: ' . $id . ' ha sido borrado.');
			$this->redirect(array('action' => 'index'));
		}
	}
		
}
