<?php


namespace App\libraries\Formulas\Factory;


use App\libraries\Formulas\Abstracts\FormulaAbstracts;
use App\libraries\Formulas\Exceptions\InvalidArgumentsException;
use App\libraries\Formulas\Exceptions\InvalidFormulaException;
use App\libraries\Formulas\Exceptions\InvalidOperatorException;
use App\libraries\Formulas\Formula;
use App\libraries\Formulas\Interfaces\FormulaFactoryInterface;
use App\libraries\Formulas\Interfaces\FormulaInterface;
use YoastSEO_Vendor\Psr\Log\InvalidArgumentException;

class FormulaFactory implements FormulaFactoryInterface
{
	/**
	 * @param string $opcode
	 * @return FormulaInterface|void
	 */
	public function createFormulaFactory(string $opcode): FormulaInterface
	{
		try {
			return new Formula($opcode);
		} catch (InvalidFormulaException|InvalidOperatorException|InvalidArgumentException|\Exception $e) {
			echo $e->getMessage();
		}
	}
}
