<?php


namespace App\libraries\Formulas\Traits;


use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;
use Antlr\Antlr4\Runtime\InputStream;
use App\libraries\Formulas\Parser\Context\ExpressionContext;
use App\libraries\Formulas\Parser\FormulaLexer;
use App\libraries\Formulas\Parser\FormulaParser;

trait Parser
{
	public function setExpression(string $opcode): ExpressionContext
	{
		$input = InputStream::fromString($opcode);
		$lexer = new FormulaLexer($input);
		$tokens = new CommonTokenStream($lexer);
		$parser = new FormulaParser($tokens);
		$parser->addErrorListener(new DiagnosticErrorListener());
		$parser->setBuildParseTree(true);
		return $parser->expression();
	}
}
