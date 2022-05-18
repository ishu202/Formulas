<?php

/*
 * Generated from Formula.g4 by ANTLR 4.9.2
 */

namespace App\libraries\Formulas\Parser;

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see FormulaParser}.
 */
interface FormulaListener extends ParseTreeListener
{
	/**
	 * Enter a parse tree produced by {@see FormulaParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterExpression(Context\ExpressionContext $context): void;

	/**
	 * Exit a parse tree produced by {@see FormulaParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitExpression(Context\ExpressionContext $context): void;

	/**
	 * Enter a parse tree produced by {@see FormulaParser::argument()}.
	 * @param $context The parse tree.
	 */
	public function enterArgument(Context\ArgumentContext $context): void;

	/**
	 * Exit a parse tree produced by {@see FormulaParser::argument()}.
	 * @param $context The parse tree.
	 */
	public function exitArgument(Context\ArgumentContext $context): void;
}
