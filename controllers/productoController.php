<?php
include 'models/producto.php';
class productoController{
	
	public function index(){
		
		/*
			$estudiante = new Estudiante();
		
			$estudiantes = $estudiante -> getAll();
		*/
		
		
		
		$productos = Producto::getAll();
		
		
		include 'views/productos/index.php';
		
		
	}
	
}