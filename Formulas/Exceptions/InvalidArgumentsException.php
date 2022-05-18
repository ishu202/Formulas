<?php


namespace App\libraries\Formulas\Exceptions;

use Exception;
use Throwable;


class InvalidArgumentsException extends Exception
{
	public function __construct()
	{
		parent::__construct("Invalid Arguments provided");
	}
}
