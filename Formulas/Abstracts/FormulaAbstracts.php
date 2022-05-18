<?php


namespace App\libraries\Formulas\Abstracts;

use App\libraries\Formulas\Parser\Context\ExpressionContext;
use App\libraries\Formulas\Traits\Parser;
use App\libraries\Formulas\Traits\TreeGenerator;

abstract class FormulaAbstracts
{
	use TreeGenerator, Parser;

	protected ExpressionContext $expression;

	protected string $operation;

	protected array $args;

	/**
	 * @throws \Exception
	 */
	public function __construct(string $opcode)
	{
		$this->expression = $this->setExpression($opcode);
		$this->setOperationAndArgs($this->expression);
	}

	public function getOperation(): string
	{
		return $this->operation;
	}

	public function getArguments(): array
	{
		return $this->args;
	}


	protected function sum($args)
	{
		return array_sum($args);
	}

	protected function div($args)
	{
		$res = null;
		$reversed_args = array_reverse($args);
		for ($i = 0; $i < count($reversed_args); $i++) {
			if (array_key_exists(($i + 1), $reversed_args)) {
				if ($res != null) {
					$res /= $reversed_args[$i + 1];
				} else {
					$res = $reversed_args[$i] / $reversed_args[$i + 1];
				}
			}
		}
		return $res;
	}

	protected function sub($args)
	{
		$res = null;
		for ($i = 0; $i < count($args); $i++) {
			if (array_key_exists(($i + 1), $args)) {
				if ($res != null) {
					$res -= $this->args[$i + 1];
				} else {
					$res = $args[$i] - $args[$i + 1];
				}
			}
		}
		return $res;
	}

	protected function mul($args)
	{
		return array_product($args);
	}
}
