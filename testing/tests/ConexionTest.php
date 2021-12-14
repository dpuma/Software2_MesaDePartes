<?php

use App\Conexion\Conexion;

class ConexionTest extends \PHPUnit\Framework\TestCase {

    public function getConnection() {
        $pdo = new PDO("mysql:host=localhost;dbname=mesadepartes", "root", "");
        return $this->createDefaultDBConnection($pdo, "testconnection");
    }

     public function test_conexion() {

        $d = new Conexion();
        $d->conectar();

        $result = $d->findAll();

        $this->assertEquals(count($result), 1);

/*
        $hotel = new Hotel(array(
            'nombre' => 'Hotel Ritc Madrid',
            'estrellas' => 5,
            'tipoHabitacion' => 1,
            'ciudad' => 1
        ));
        $hotel->saveHotel($d->conn);

        $result = $d->findAll();

        $this->assertEquals(count($result), 2);*/
    }


}