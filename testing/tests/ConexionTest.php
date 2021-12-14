<?php

//use App\Calculadora\Calculadora;
//use "C:\Users\Dennis\Documents\Github\Software2_MesaDePartes\config\Conexion";
use App\Conexion\Conectar;

class ConexionTest extends \PHPUnit\Framework\TestCase {

	public function test_comprobar_conexion() {

		$conectar = new Conectar; 
		$conn = $conectar->Conexion();

		$this->assertEquals(true, $conn);
/*
		if (!$conn) {
    		die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connected successfully";
		mysqli_close($conn);*/
	}
}