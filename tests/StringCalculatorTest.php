<?php

use Acme\StringCalculator;
use Acme\ExpressionParser;

class StringCalculatorTest extends PHPUnit_Framework_TestCase {

	function setup()
	{
		$this->calculator = new StringCalculator(new ExpressionParser);
	}
	/**
	 * @test
	 */
	function it_adds_numbers()
	{
		$result = $this->calculator->calculate('2+2+2');
		$this->assertEquals(6, $result);

		$result = $this->calculator->calculate('2 + 2 + 2');
		$this->assertEquals(6, $result);
	}

	/**
	 * @test
	 */
	function it_multiplies_numbers()
	{
		$result = $this->calculator->calculate('2*2*2');
		$this->assertEquals(8, $result);

		$result = $this->calculator->calculate('2 * 3 * 4');
		$this->assertEquals(24, $result);
	}

	/**
	 * @test
	 */
	function it_subtracts_numbers()
	{
		$result = $this->calculator->calculate('5 - 3 - 1');
		$this->assertEquals(1, $result);
	}

	/**
	 * @test
	 * @expectedException Acme\Exceptions\UnsupportedOperationException
	 */
	function it_disallows_unsupported_operations()
	{
		$result = $this->calculator->calculate('3%3');
	}


}