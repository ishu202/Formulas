<?php


namespace App\libraries\Formulas\Traits;


use App\libraries\Formulas\Exceptions\InvalidArgumentsException;
use App\libraries\Formulas\Exceptions\InvalidFormulaException;
use App\libraries\Formulas\Exceptions\InvalidOperatorException;
use App\libraries\Formulas\Parser\Context\ExpressionContext;
use http\Exception\InvalidArgumentException;

trait TreeGenerator
{
	/**
	 * @throws \Exception
	 */
	protected function setOperationAndArgs(ExpressionContext $context): void
	{
		try {
			$tree = $this->createOperationTree($context);

			$this->missing($tree['operation'], $tree['arguments']);
			$this->invalid_operator($tree['operation']);
			$this->invalid_arguments($tree['arguments']);

			$this->operation = $tree['operation'];
			$this->args = $tree['arguments'];
		} catch (\Exception $e) {
			echo "<pre>{$e->getTraceAsString()}</pre>";
		}
	}

	/**
	 * @throws \Exception
	 */
	protected function createOperationTree(ExpressionContext $tree): array
	{
		if ($tree->exception) {
			throw new \Exception($tree->exception);
		};
		$operation = $tree->OPERATION()->getText();
		$arguments = array_reduce($tree->argument(), function ($memo, $val) {
			$expression = $val->expression();

			if ($expression) $memo[] = $this->createOperationTree($expression);
			else $memo[] = $val->getText();

			return $memo;
		}, []);

		return [
			'operation' => $operation,
			'arguments' => $arguments
		];
	}

	/**
	 * @throws InvalidFormulaException
	 */
	private function missing($operation, $arguments): ?InvalidFormulaException
	{
		if (empty($operation) || empty($arguments)) {
			throw new InvalidFormulaException();
		}
		return null;
	}

	/**
	 * @throws InvalidOperatorException
	 */
	private function invalid_operator($operation): ?InvalidOperatorException
	{
		if ($operation == '<missing OPERATION>') {
			throw new InvalidOperatorException();
		}
		return null;
	}

	/**
	 * @throws InvalidArgumentsException
	 */
	private function invalid_arguments($arguments): ?InvalidArgumentsException
	{
		if (array_filter($arguments, function ($val) {
			if ($val == 0) {
				return false;
			}
			return !$val;
		})) {
			throw new InvalidArgumentsException();
		}
		return null;
	}
}
