<?php
require_once "PHPUnit/Autoload.php";
require_once "php.php";
class phptest extends PHPUnit_Framework_TestCase
{
public function  escribir(){
	$persona = new php();
	$expected = "feliz año viejo";
	$actual = $persona->talk();
	$this->asserEquals($expected, $actual);
      }
}

