<?php

namespace Acme\Operations;

class Multiplication extends Operation {

	function perform($numbers)
	{
		return array_reduce($numbers, function($carry, $item) {
			return $carry * $item;
		}, 1);
	}
}