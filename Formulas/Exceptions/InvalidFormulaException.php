<?php


namespace App\libraries\Formulas\Exceptions;

use Exception;


class InvalidFormulaException extends Exception
{
	public function __construct()
	{
		parent::__construct("Illegal operation or arguments provided. Please check your formula");
	}

	private function invalid_formula($operation): string
	{
		if ($operation == '<missing OPERATION>') {
			return "Invalid Operator Provided.";
		}
		return $this;
	}

	private function invalid_arguments($arguments)
	{
		if (array_filter($arguments, function ($val) {
			return !$val;
		})) {
			throw new \Exception("Invalid Arguments provided");
		}
	}
}
