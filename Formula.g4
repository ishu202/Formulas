// Derived from http://json.org
grammar Formula;
// ============================================================================
// PARSER RULES
// ============================================================================
expression: OPERATION ARG_LIST_START argument ( ARGUMENT_SEPARATOR argument )* ARG_LIST_END;
argument: NUMBER | expression;
// ============================================================================
// LEXER RULES
// ============================================================================
OPERATION : ('DIV') | ('MUL') | ('SUM') | ('SUB');
ARGUMENT_SEPARATOR: ',';
ARG_LIST_START: '(';
ARG_LIST_END: ')';
NUMBER     : [0-9]+;
WHITESPACE : ' ' -> skip;
