<?php

namespace tests\lib;

use Lib\StringFormatter;

class StringFormatterTest extends \PHPUnit_Framework_TestCase
{
	public function testConcatStringSuccess()
	{
		$myString = new StringFormatter();
		$result = $myString->concatString("allo", "mora");

		$this->assertEquals("allomora",$result);
	}

	public function testConcatStringError()
	{
		/*
		$myClass = new MyClass();
        $result = $myClass->IsBlue('blue');

        $this->assert_False($result);
        */
	}

	public function testToCamelCase()
	{
		$myString = new StringFormatter();
		$result = $myString->toCamelCase("allo", "mora");

		$this->assertEquals("alloMora", $result);
	}
}