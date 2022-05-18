<?php


namespace App\libraries\Formulas;


use App\libraries\Formulas\Factory\FormulaFactory;

class FormulaProvider
{
	public function provideFormulas(FormulaFactory $factory, string $operation): Interfaces\FormulaInterface
	{
		return $factory->createFormulaFactory($operation);
	}
}
