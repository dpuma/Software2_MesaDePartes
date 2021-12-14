<?php
/*
use App\Calculadora\Calculadora;

class CalculadoraTest extends \PHPUnit\Framework\TestCase {

	public function test_comprobar_suma_dos_numeros() {
		$calculadora = new Calculadora; 

		$suma = $calculadora->sumar(5, 11);

		$this->assertEquals(16, $suma);
	}

	public function test_comprobar_suma_arreglo() {
		$calculadora = new Calculadora; 

		$suma = $calculadora->sumarArreglo([8, 2, 7, 3]);

		$this->assertEquals(20, $suma);
	}

	public function test_comprobar_dividir_dos_numeros() {
		$calculadora = new Calculadora; 

		$division = $calculadora->dividir(10,2);

		$this->assertEquals(2, $division);
	}
}