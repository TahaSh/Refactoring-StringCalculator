<?php

namespace Acme\Operations;

class Subtraction extends Operation {

	function perform($numbers)
	{
		$initial = array_shift($numbers);

		return array_reduce($numbers, function($carry, $item) {
			return $carry - $item;
		}, $initial);
	}
}