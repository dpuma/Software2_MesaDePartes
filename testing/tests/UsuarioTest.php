<?php

use App\Calculadora\Calculadora;

class UsuarioTest extends \PHPUnit\Framework\TestCase {

	public function test_comprobar_insertar_usuario() {
		//$calculadora = new Calculadora; 
		//$suma = $calculadora->sumar(5, 11);

		$this->assertEquals(16, $suma);
	}
}