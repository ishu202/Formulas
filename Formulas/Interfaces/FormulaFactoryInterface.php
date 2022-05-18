<?php


namespace App\libraries\Formulas\Interfaces;


interface FormulaFactoryInterface
{
	public function createFormulaFactory(string $opcode): FormulaInterface;
}
