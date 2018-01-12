<?php

App::uses('Controller', 'AppController');
// App::uses('Model', 'Usuario');

class RegistroController extends AppController {
	public $uses = array('Persona', 'Usuario');
	public $components = array('DebugKit.Toolbar');

	public function index() {

	}

	public function add(){
		$data = $this->request->data;
		if ($this->request->is('post') && !empty($data)) {

			$nuevo_usuario = array();
			$form_p = $data["Persona"];
			$form_u = $data["Usuario"];

			$nueva_persona["Persona"]["Nombre"] = $form_p["Nombre"];

			$nuevo_usuario["Usuario"]["Email"] = $form_u["Email"];
			$nuevo_usuario["Usuario"]["Password"] = $form_u["Password"];

			$this->Persona->create();
			$persona = $this->Persona->save($nueva_persona);
			debug($persona);
			echo var_dump($persona);

			// $this->Usuario->create();
			// $this->Usuario->save($nuevo_usuario);
		} else {

		}
	}

}
