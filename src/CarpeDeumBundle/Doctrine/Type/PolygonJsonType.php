<?php

namespace CarpeDeumBundle\Doctrine\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

class PolygonJsonType extends Type
{
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'POLYGON';
    }

    public function canRequireSQLConversion()
    {
        return true;
    }

    public function convertToPHPValueSQL($sqlExpr, $platform)
    {
        // Need to cast as CHAR because of a PHP bug cf. https://bugs.php.net/bug.php?id=70384
        return sprintf('CAST(ST_AsGeoJSON(%s) AS CHAR)', $sqlExpr);
    }

    public function convertToDatabaseValueSQL($sqlExpr, AbstractPlatform $platform)
    {
        return sprintf('ST_GeomFromGeoJSON(%s)', $sqlExpr);
    }

    public function getName()
    {
        return 'polygonjson';
    }
}
