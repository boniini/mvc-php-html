<?php
include 'config/bd.php';
class Producto{
	public $eproducto_id;
	public $categoria_id;
	public $nombre;
	public $precio_compra;
	public $precio_venta;
	public $codigo;
	public $fecha_vencimiento;
	public $cantidad;
	public $stock_minimo;
	public $imagen;
	
	
	public static function  getAll(){
		$bd  = Bd::conectar();
		$stm = $bd->prepare("SELECT * FROM productos");
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_CLASS,'Producto');
	}		
}