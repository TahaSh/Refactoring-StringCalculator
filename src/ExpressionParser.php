<?php

namespace Acme;

class ExpressionParser {

	private $operation;
	private $numbers;

	public function parse($expression)
	{
		$this->operation = $this->extractOperation($expression);

		$this->numbers = $this->extractNumbers($expression);

		return $this;
	}

	public function getOperation()
	{
		return $this->operation;
	}

	public function getNumbers()
	{
		return $this->numbers;
	}

	private function extractOperation($expression)
	{
		preg_match("/\d+\s?+([^\w\d\s])/", $expression, $operation);
		return $operation[1];
	}

	private function extractNumbers($expression)
	{
		$numbers = preg_split("/[^\d\w\s]/", $expression);
		return array_map("trim", $numbers);
	}
}
