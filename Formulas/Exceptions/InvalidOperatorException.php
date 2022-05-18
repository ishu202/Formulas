<?php


namespace App\libraries\Formulas\Exceptions;

use Exception;
use Throwable;


class InvalidOperatorException extends Exception
{
	public function __construct()
	{
		parent::__construct("Invalid Operator Provided.");
	}
}
