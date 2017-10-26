<?php
use PHPUnit\Framework\TestCase;
require_once 'calc.php';

class MyProceduralTest extends TestCase
{
	public function testCalcMinus()
	{
		$this->expectOutputString('0');	
		calc(4,4,'-');		
	}
	public function testCalcPlus()
	{
		$this->expectOutputString('8');	
		calc(4,4,'p');		
	}
	public function testCalcDiv()
	{
		$this->expectOutputString('1');	
		calc(4,4,'/');	
				
	}
	public function testCalcMultip()
	{
		$this->expectOutputString('16');	
		calc(4,4,'*');	
	}
}