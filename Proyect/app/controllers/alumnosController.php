<?php

class alumnosController extends Controller {

	public function getIndex()
	{
		return View::make('index');
	}

	public function get_add()
	{
		return View::make('Alumnos.add');
	}

	public function post_add()
	{

		$Input=Input::All();
		$Alumnox=new Alumno;
		$Alumnox->Nombre=$Input{"Nombre"};
		$Alumnox->Apellido=$Input{"Apellido"};
		$Alumnox->Rut_Alum=$Input{"Rut"};
		$Alumnox->Clave=$Input{"Clave"};
		$Alumnox->Carrera_Cod_Carrera=$Input{"Carrera"};
		$Alumnox->save();
	}

}
