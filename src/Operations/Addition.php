<?php

namespace Acme\Operations;

class Addition extends Operation {

	function perform($numbers)
	{
		return array_reduce($numbers, function($carry, $item) {
			return $carry + $item;
		});
	}
}
