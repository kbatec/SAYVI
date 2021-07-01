<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=b8rfdf83re10ctbfinkd-mysql.services.clever-cloud.com;dbname=b8rfdf83re10ctbfinkd",
			            "u8lzgctkyfosljfo",
			            "3xtlz21IZbEcgDqJf50Z");

		$link->exec("set names utf8");

		return $link;

	}

}