<?php

namespace CarpeDeumBundle\Doctrine\Functions;

use Doctrine\ORM\Query\SqlWalker;

class Equals extends Contains
{
    public function getSql(SqlWalker $sqlWalker)
    {
        return sprintf(
            'ST_EQUALS(%1$s, %2$s)',
            $this->shape1->dispatch($sqlWalker),
            $this->shape2->dispatch($sqlWalker)
        );
    }
}
