<?php

class administradorController extends Controller {

	public function getIndex()
	{
		return View::make('index');
	}

	public function get_alumno()
	{
		return View::make('Administrador.alumno');
	}

	public function post_alumno()
	{
		$Input=Input::All();
		$Alumnox=new Alumno;
		$Alumnox->Nombre=$Input{"Nombre"};
		$Alumnox->Apellido=$Input{"Apellido"};
		$Alumnox->Rut_Alum=$Input{"Rut"};
		$Alumnox->Clave=$Input{"Clave"};
		$Alumnox->Carrera_Cod_Carrera=$Input{"Carrera"};
		$Alumnox->save();
		return Redirect::to('/Administrador');
	}
}
