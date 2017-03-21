<?php

use PHPUnit\Framework\TestCase;
require_once(__DIR__.'/../src/StringBuilder.php');
use ratacibernetica\StringBuilder;

class StringBuilderTest extends TestCase{

	public function testAppendFunction() {
		$str = new StringBuilder();
		$str->append("first string");
		$this->assertEquals(1, count($str->strings) );

		$str->append("second string");
		$this->assertEquals(2, count($str->strings) );
		$this->assertEquals("second string", $str->strings[1] );

		
	}

	public function testConcatenateTwoStrings(){
		$str1 = "Hola";
		$str2 = " mundo";
		$stb = new StringBuilder();
		$stb->append($str1);
		$stb->append($str2);

		$this->assertEquals("Hola mundo", $stb->join() );
	}
}
