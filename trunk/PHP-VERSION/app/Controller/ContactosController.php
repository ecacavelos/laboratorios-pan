<?php
class ContactosController extends AppController {
	
    public $helpers = array('Html', 'Form');
    

	public $name = 'Contactos';	
    
    public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index','enviar');
	}
    
	public function index() {
	
	
	
	}
	
	public function enviar() {
	App::uses('CakeEmail', 'Network/Email');
		
	    $servidor_mail='smtpcbi'; // Los dos mails se envian DESDE $servidor_mail que esta especificado en Conf/email.php
	    $correo_empresa_destinataria = 'test@cbi.com.py';
	   //MAIL PARA LABORATORIOS PAN
		$email = new CakeEmail($servidor_mail);
		$email->to($correo_empresa_destinataria);
		$email->subject('Mensaje de un usuario a traves de la pagina');
		$email->send($this->request->data['Contacto']['mensaje']."
		
		Nombre:".$this->request->data['Contacto']['nombre']."
		Mail:".$this->request->data['Contacto']['email']."
		Ciudad:".$this->request->data['Contacto']['ciudad']);
		
		//MAIL PARA EL USUARIO
		$email = new CakeEmail($servidor_mail);
		$email->to($this->request->data['Contacto']['email']);
		$email->subject('Gracias por contactarnos!');
		$email->send('Estimado/a '.$this->request->data['Contacto']['nombre'].': 
		
		
		Hemos recibido su consulta y le estaremos respondiendo en la brevedad posible'.'
		
		
		Gracias.');
		
		if($this->Contacto->save($this->request->data)){		
			$this->Session->setFlash('Gracias Por enviarnos su consulta, le estaremos respondiendo en los proximos dias');
        	$this->redirect(array('controller'=>'indexs', 'action' => 'index'));		
		} else {
			$this->Session->setFlash(__('Por favor intente nuevamente.'));
		}               
	
	}
		
}
