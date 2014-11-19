<?php

class profesorController extends Controller {

	public function getIndex()
	{
		return View::make('index');
	}
	public function get_add()
	{
		return View::make('Profesor.add');
	}
	public function get_post()
	{

		$Input=Input::All();
		$Prof=new Profesor;
		$Prof->Nombre=$Input{"Nombre"};
		$Prof->Apellido=$Input{"Apellido"};
		$Prof->Rut_Prof=$Input{"Rut"};
		$Prof->Clave=$Input{"Clave"};
		$Prof->Departamento_Cod_Dpto=$Input{"Dpto"};
		$Prof->save();
	}

}
