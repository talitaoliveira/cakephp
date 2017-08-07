<?php

class UsuariosController extends AppController {

	public function index () {

		$model = $this->modelClass;

        die("aqui");

		//$this->set('usuarios', $this->$model->find("all"));

	}

	public function adicionar () {
		try{


		}catch(Exception $e){
			echo $e->getMessage();
		}
	}

}