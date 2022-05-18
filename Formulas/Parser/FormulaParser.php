<?php

/*
 * Generated from Formula.g4 by ANTLR 4.9.2
 */

namespace App\libraries\Formulas\Parser {

	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class FormulaParser extends Parser
	{
		public const OPERATION = 1, ARGUMENT_SEPARATOR = 2, ARG_LIST_START = 3,
			ARG_LIST_END = 4, NUMBER = 5, WHITESPACE = 6;

		public const RULE_expression = 0, RULE_argument = 1;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'expression', 'argument'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
			null, null, "','", "'('", "')'", null, "' '"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
			null, "OPERATION", "ARGUMENT_SEPARATOR", "ARG_LIST_START", "ARG_LIST_END",
			"NUMBER", "WHITESPACE"
		];

		/**
		 * @var string
		 */
		private const SERIALIZED_ATN =
			"\u{3}\u{608B}\u{A72A}\u{8133}\u{B9ED}\u{417C}\u{3BE7}\u{7786}\u{5964}" .
			"\u{3}\u{8}\u{17}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}\u{3}\u{2}" .
			"\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{7}\u{2}\u{C}\u{A}\u{2}" .
			"\u{C}\u{2}\u{E}\u{2}\u{F}\u{B}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{3}" .
			"\u{3}\u{3}\u{5}\u{3}\u{15}\u{A}\u{3}\u{3}\u{3}\u{2}\u{2}\u{4}\u{2}" .
			"\u{4}\u{2}\u{2}\u{2}\u{16}\u{2}\u{6}\u{3}\u{2}\u{2}\u{2}\u{4}\u{14}" .
			"\u{3}\u{2}\u{2}\u{2}\u{6}\u{7}\u{7}\u{3}\u{2}\u{2}\u{7}\u{8}\u{7}" .
			"\u{5}\u{2}\u{2}\u{8}\u{D}\u{5}\u{4}\u{3}\u{2}\u{9}\u{A}\u{7}\u{4}" .
			"\u{2}\u{2}\u{A}\u{C}\u{5}\u{4}\u{3}\u{2}\u{B}\u{9}\u{3}\u{2}\u{2}" .
			"\u{2}\u{C}\u{F}\u{3}\u{2}\u{2}\u{2}\u{D}\u{B}\u{3}\u{2}\u{2}\u{2}" .
			"\u{D}\u{E}\u{3}\u{2}\u{2}\u{2}\u{E}\u{10}\u{3}\u{2}\u{2}\u{2}\u{F}" .
			"\u{D}\u{3}\u{2}\u{2}\u{2}\u{10}\u{11}\u{7}\u{6}\u{2}\u{2}\u{11}\u{3}" .
			"\u{3}\u{2}\u{2}\u{2}\u{12}\u{15}\u{7}\u{7}\u{2}\u{2}\u{13}\u{15}\u{5}" .
			"\u{2}\u{2}\u{2}\u{14}\u{12}\u{3}\u{2}\u{2}\u{2}\u{14}\u{13}\u{3}\u{2}" .
			"\u{2}\u{2}\u{15}\u{5}\u{3}\u{2}\u{2}\u{2}\u{4}\u{D}\u{14}";

		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.9.2', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName(): string
		{
			return "Formula.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): string
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
		{
			static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
		}

		/**
		 * @throws RecognitionException
		 */
		public function expression(): Context\ExpressionContext
		{
			$localContext = new Context\ExpressionContext($this->ctx, $this->getState());

			$this->enterRule($localContext, 0, self::RULE_expression);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(4);
				$this->match(self::OPERATION);
				$this->setState(5);
				$this->match(self::ARG_LIST_START);
				$this->setState(6);
				$this->argument();
				$this->setState(11);
				$this->errorHandler->sync($this);

				$_la = $this->input->LA(1);
				while ($_la === self::ARGUMENT_SEPARATOR) {
					$this->setState(7);
					$this->match(self::ARGUMENT_SEPARATOR);
					$this->setState(8);
					$this->argument();
					$this->setState(13);
					$this->errorHandler->sync($this);
					$_la = $this->input->LA(1);
				}
				$this->setState(14);
				$this->match(self::ARG_LIST_END);
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->exitRule();
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function argument(): Context\ArgumentContext
		{
			$localContext = new Context\ArgumentContext($this->ctx, $this->getState());

			$this->enterRule($localContext, 2, self::RULE_argument);

			try {
				$this->setState(18);
				$this->errorHandler->sync($this);

				switch ($this->input->LA(1)) {
					case self::NUMBER:
						$this->enterOuterAlt($localContext, 1);
						$this->setState(16);
						$this->match(self::NUMBER);
						break;

					case self::OPERATION:
						$this->enterOuterAlt($localContext, 2);
						$this->setState(17);
						$this->expression();
						break;

					default:
						throw new NoViableAltException($this);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->exitRule();
			}

			return $localContext;
		}
	}
}

namespace App\libraries\Formulas\Parser\Context {

	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use App\libraries\Formulas\Parser\FormulaParser;
	use App\libraries\Formulas\Parser\FormulaListener;

	class ExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
			return FormulaParser::RULE_expression;
		}

		public function OPERATION(): ?TerminalNode
		{
			return $this->getToken(FormulaParser::OPERATION, 0);
		}

		public function ARG_LIST_START(): ?TerminalNode
		{
			return $this->getToken(FormulaParser::ARG_LIST_START, 0);
		}

		/**
		 * @return array<ArgumentContext>|ArgumentContext|null
		 */
		public function argument(?int $index = null)
		{
			if ($index === null) {
				return $this->getTypedRuleContexts(ArgumentContext::class);
			}

			return $this->getTypedRuleContext(ArgumentContext::class, $index);
		}

		public function ARG_LIST_END(): ?TerminalNode
		{
			return $this->getToken(FormulaParser::ARG_LIST_END, 0);
		}

		/**
		 * @return array<TerminalNode>|TerminalNode|null
		 */
		public function ARGUMENT_SEPARATOR(?int $index = null)
		{
			if ($index === null) {
				return $this->getTokens(FormulaParser::ARGUMENT_SEPARATOR);
			}

			return $this->getToken(FormulaParser::ARGUMENT_SEPARATOR, $index);
		}

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FormulaListener) {
				$listener->enterExpression($this);
			}
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FormulaListener) {
				$listener->exitExpression($this);
			}
		}
	}

	class ArgumentContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
			return FormulaParser::RULE_argument;
		}

		public function NUMBER(): ?TerminalNode
		{
			return $this->getToken(FormulaParser::NUMBER, 0);
		}

		public function expression(): ?ExpressionContext
		{
			return $this->getTypedRuleContext(ExpressionContext::class, 0);
		}

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FormulaListener) {
				$listener->enterArgument($this);
			}
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof FormulaListener) {
				$listener->exitArgument($this);
			}
		}
	}
}
