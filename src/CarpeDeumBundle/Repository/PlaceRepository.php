<?php

namespace CarpeDeumBundle\Repository;

use Doctrine\ORM\QueryBuilder;

class PlaceRepository extends EntityRepository
{
    public function getNear($lat, $lng)
    {
        $qb = $this->getCollectionQueryBuilder();
        $this->applyCriteria($qb, ['near_json' => [
            'shape' => json_encode([
                'type'        => 'Point',
                'coordinates' => [(float) $lng, (float) $lat],
            ]),
            'distance' => 0.1,
        ]]);

        return $this->getPaginator($qb);
    }

    public function getBound($lat1, $lng1, $lat2, $lng2)
    {
        $qb = $this->getCollectionQueryBuilder();
        $this->applyCriteria($qb, [
            'inside_json' => json_encode([
                'type'        => 'Polygon',
                'coordinates' => [[
                    [$lng1, $lat1],
                    [$lng1, $lat2],
                    [$lng2, $lat2],
                    [$lng2, $lat1],
                    [$lng1, $lat1],
                ]],
            ]),
        ]);

        return $qb->getQuery()->getResult();
    }

    public function createPaginator(array $criteria = [], array $sorting = [])
    {
        $queryBuilder = $this->createQueryBuilder('p');

        $this->applyCriteria($queryBuilder, $criteria);
        $this->applySorting($queryBuilder, $sorting);

        return $this->getPaginator($queryBuilder);
    }

    protected function applyCriteria(QueryBuilder $queryBuilder, array $criteria = [])
    {
        if (isset($criteria['inside_json'])) {
            $queryBuilder
                ->andWhere('CONTAINS(GeomFromJson(:inside_json), p.geoPoint) > 0')
                ->setParameter('inside_json', $criteria['inside_json']);

            unset($criteria['inside_json']);
        }

        if (isset($criteria['near_json'])) {
            $queryBuilder
                ->andWhere('DISTANCE(p.geoPoint, GeomFromJson(:shape)) < :distance')
                ->setParameters([
                    'shape'    => $criteria['near_json']['shape'],
                    'distance' => $criteria['near_json']['distance'],
                ])
                ->orderBy('DISTANCE(p.geoPoint, GeomFromJson(:shape))', 'ASC');

            unset($criteria['near_json']);
        }

        parent::applyCriteria($queryBuilder, $criteria);
    }

    public function getAlias()
    {
        return 'p';
    }
}
