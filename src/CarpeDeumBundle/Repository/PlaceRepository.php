<?php

namespace CarpeDeumBundle\Repository;

use Doctrine\ORM\QueryBuilder;

class PlaceRepository extends EntityRepository
{
    public function createPaginator(array $criteria = [], array $sorting = [])
    {
        $queryBuilder = $this->createQueryBuilder('p');

        $this->applyCriteria($queryBuilder, $criteria);
        $this->applySorting($queryBuilder, $sorting);

        return $this->getPaginator($queryBuilder);
    }

    protected function applyCriteria(QueryBuilder $queryBuilder, array $criteria = array())
    {
        if (isset($criteria['inside_json']))  {
            $queryBuilder
                ->andWhere('CONTAINS(GeomFromJson(:inside_json), p.geoPoint) > 0')
                ->setParameter('inside_json', $criteria['inside_json'])
            ;

            unset($criteria['inside_json']);
        }

        if (isset($criteria['near_json'])) {
            $queryBuilder
                ->addSelect('DISTANCE(p.geoPoint, GeomFromJson(:shape)) AS distance')
                ->andWhere('DISTANCE(p.geoPoint, GeomFromJson(:shape)) < :distance')
                ->setParameters([
                    'shape' => $criteria['near_json']['shape'],
                    'distance' => $criteria['near_json']['distance']
                ])
                ->orderBy('distance', 'ASC')
            ;

            unset($criteria['near_json']);
        }

        parent::applyCriteria($queryBuilder, $criteria);
    }

    public function getAlias()
    {
        return 'p';
    }
}
