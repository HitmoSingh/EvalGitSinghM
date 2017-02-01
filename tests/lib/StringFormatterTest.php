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

	public function testToCamelCase(){

		$myString = new StringFormatter();
		$result = $myString->toCamelCase("camel", "case");
		$this->assertEquals("camelCase", $result);
	}

	/******* Fonction  TestPrefix avec un False *******/
	public function testPrefixWithFalseParameterSuccess(){

        $myString = new StringFormatter();
        $result = $myString->prefix("camel", "case", false);
        $this->assertEquals("camelcase", $result);
    }

    /******* Fonction  TestPrefix avec un True *******/
    public function testPrefixWithTrueParameterSuccess(){

        $myString = new StringFormatter();
        $result = $myString->prefix("camel", "case", true);
        $this->assertEquals("camelCase", $result);
    }


    /******* Fonction  TestSuffix avec un False *******/
    public function testSuffixWithFalseParameterSuccess()
    {
        $myString = new StringFormatter();
        $result = $myString->suffix("camel", "case", false);
        $this->assertEquals("casecamel", $result);
    }

    /******* Fonction  TestSuffix avec un True *******/
    public function testSuffixWithTrueParameterSuccess()
    {
        $myString = new StringFormatter();
        $result = $myString->suffix("camel", "case", true);
        $this->assertEquals("caseCamel", $result);
    }
}