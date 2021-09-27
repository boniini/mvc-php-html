<?php
class Bd{
	
	public static function conectar(){
		$mbd = new PDO('mysql:host=localhost;dbname=productos-123','root','');
		return $mbd;
	}
	
}