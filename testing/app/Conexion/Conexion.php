<?php

namespace App\Conexion;

//session_start();
class Conexion {
	protected $dbh;
		public function conectar(){
			try {
				$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=mesadepartes","root","");
				
				return $conectar;	
			} catch (Exception $e) {
				print "¡Error BD!: " . $e->getMessage() . "<br/>";
				die();	
			}
		}
		
		public function set_names(){	
			return $this->dbh->query("SET NAMES 'utf8'");
		}

		public function ruta(){
			//return "http://localhost:90/PERSONAL_mesadepartes/";
			return "http://localhost:80/Software2_MesaDePartes/";
		}
	}
?>