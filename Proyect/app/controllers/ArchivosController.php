<?php

class ArchivosController extends Controller {

	protected function getIndex()
	{
		return View::make('index');
	}
	public function get_add()
	{
		return View::make('Archivo.add');
	}

	public function get_post()
	{

		$Input=Input::All();
		$Archivo=new Archivo;
		$Archivo->Nombre=$Input{"Url"};
		$Archivo->Cod_Arch=$Input{"codigo"};
		$Archivo->save();
	}

}
