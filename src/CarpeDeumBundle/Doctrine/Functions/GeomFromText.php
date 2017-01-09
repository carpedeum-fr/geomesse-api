<?php

namespace CarpeDeumBundle\Doctrine\Functions;

use Doctrine\ORM\Query\SqlWalker;

class GeomFromText extends GeomFromJson
{
    public function getSql(SqlWalker $sqlWalker)
    {
        return sprintf(
            'ST_GeomFromText(%1$s, 4326)',
            $this->field->dispatch($sqlWalker)
        );
    }
}
