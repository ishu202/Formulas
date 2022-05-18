<?php


namespace App\libraries\Formulas\Interfaces;


interface FormulaInterface
{
	public function calculate(string $operation, array $arguments);

	public function getOperation(): string;

	public function getArguments(): array;
}
