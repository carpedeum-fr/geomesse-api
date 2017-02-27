<?php

namespace CarpeDeumBundle\Doctrine\Functions;

use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\Lexer;
use Doctrine\ORM\Query\Parser;
use Doctrine\ORM\Query\SqlWalker;

class Contains extends FunctionNode
{
    protected $shape1;
    protected $shape2;

    public function parse(Parser $parser)
    {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);

        $this->shape1 = $parser->StringPrimary();

        $parser->match(Lexer::T_COMMA);

        $this->shape2 = $parser->StringPrimary();

        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }

    public function getSql(SqlWalker $sqlWalker)
    {
        return sprintf(
            'ST_CONTAINS(%1$s, %2$s)',
            $this->shape1->dispatch($sqlWalker),
            $this->shape2->dispatch($sqlWalker)
        );
    }
}
