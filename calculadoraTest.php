<?php 
use PHPUnit\Framework\TestCase;
require 'calculadora.php';
class CalculadoraTest extends TestCase
{
    public function setUp(){
        $this->calc = new Calculadora;
    }
	public function testAssertion(){
		$this->assertTrue(false, 'Debe ser verdadero');
	}
	public function testSuma(){
	    $this->assertEquals(5, $this->calc->sumar(3,2));
    }
    public function testResta(){
	    $this->assertEquals(5, $this->calc->restar(5,3));
    }
}