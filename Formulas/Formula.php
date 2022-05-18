<?php


namespace App\libraries\Formulas;


use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;
use Antlr\Antlr4\Runtime\InputStream;
use App\libraries\Formulas\Abstracts\FormulaAbstracts;
use App\libraries\Formulas\Interfaces\FormulaInterface;
use App\libraries\Formulas\Parser\FormulaLexer;
use App\libraries\Formulas\Parser\FormulaParser;

class Formula extends FormulaAbstracts implements FormulaInterface
{
	public function calculate(string $operation, array $arguments)
	{
		$values = array_map(function ($arg) {
			if (is_array($arg)) {
				return $this->calculate($arg['operation'], $arg['arguments']);
			}
			return $arg;
		}, $arguments);

		return $this->{strtolower($operation)}($values);
	}
}
