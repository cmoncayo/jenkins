<?php
require_once "PHPUnit/Autoload.php";
require_once "personas.php";
class phptest extends PHPUnit_Framework_TestCase
{
public function  escribir(){
	$persona = new personas();
	$expected = "feliz año viejo";
	$actual = $persona->talk();
	$this->asserEquals($expected, $actual);
      }
}

