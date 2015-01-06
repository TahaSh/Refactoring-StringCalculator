<?php

namespace Acme;

class StringCalculator {

	private $parser;

	function __construct(ExpressionParser $parser)
	{
		$this->parser = $parser;
	}

	public function calculate($expression)
	{
		$operation = $this->parser->parse($expression)->getOperation();
		$numbers = $this->parser->parse($expression)->getNumbers();

		return $this->performOperation($operation, $numbers);
	}

	private function performOperation($operation, $numbers)
	{
		$operation = \Acme\Operations\Operation::make($operation);
		return $operation->perform($numbers);
	}

}
