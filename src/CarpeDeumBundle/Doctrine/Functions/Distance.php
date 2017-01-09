<?php

namespace CarpeDeumBundle\Doctrine\Functions;

use Doctrine\ORM\Query\SqlWalker;

class Distance extends Contains
{
    public function getSql(SqlWalker $sqlWalker)
    {
        return sprintf(
            'ST_DISTANCE(%1$s, %2$s)',
            $this->shape1->dispatch($sqlWalker),
            $this->shape2->dispatch($sqlWalker)
        );
    }
}
