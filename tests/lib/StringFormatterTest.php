<?php

namespace tests\lib;

use Lib\StringFormatter;

class StringFormatterTest extends \PHPUnit_Framework_TestCase
{
	public function testConcatStringSuccess(){

		$myString = new StringFormatter();
		$result = $myString->concatString("camel", "case");
		$this->assertEquals("camelcase",$result);
	}

	public function testConcatStringError(){
		/*
			$myClass = new MyClass();
	        $result = $myClass->IsBlue('blue');

	        $this->assert_False($result);
        */
	}

	public function testToCamelCase(){

		$myString = new StringFormatter();
		$result = $myString->toCamelCase("camel", "case");
		$this->assertEquals("camelCase", $result);
	}

	public function testPrefixWithFalseParameterSuccess(){

        $myString = new StringFormatter();
        $result = $myString->prefix("camel", "case", false);
        $this->assertEquals("camelcase", $result);
    }

   public function testPrefixWithTrueParameterSuccess(){

        $myString = new StringFormatter();
        $result = $myString->prefix("camel", "case", true);
        $this->assertEquals("camelCase", $result);
    }
}