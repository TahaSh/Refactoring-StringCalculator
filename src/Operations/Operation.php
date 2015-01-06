<?php

namespace Acme\Operations;

use Acme\Exceptions\UnsupportedOperationException;

abstract class Operation {

	const ADDITION = '+';
	const MULTIPLICATION = '*';
	const SUBTRACTION = '-';

	public static function make($type)
	{
		switch ($type) {
			case static::ADDITION:
				return new Addition;
				break;
			case static::MULTIPLICATION:
				return new Multiplication;
				break;
			case static::SUBTRACTION:
				return new Subtraction;
				break;
			
			default:
				throw new UnsupportedOperationException;
				break;
		}
	}

	abstract function perform($numbers);
}
