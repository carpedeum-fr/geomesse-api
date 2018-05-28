<?php

namespace CarpeDeumBundle\Repository;

use Doctrine\ORM\QueryBuilder;

class PlaceRepository extends EntityRepository
{
    public function getPaginatorNear($lng, $lat, $distance = .1)
    {
        return $this->getPaginator($this->getNear($lng, $lat, $distance));
    }

    public function getResultsNear($lng, $lat, $distance = .1, $max)
    {
        $qb = $this->getNear($lng, $lat, $distance)
            ->setMaxResults($max)
        ;

        return $qb->getQuery()->getResult();
    }

    /**
     * @param $lng
     * @param $lat
     * @param float $distance
     *
     * @return QueryBuilder
     */
    public function getNear($lng, $lat, $distance = .1)
    {
        $qb = $this->getCollectionQueryBuilder();

        $this->applyCriteria($qb,
            [
                'near_json' => [
                    'shape' => json_encode([
                        'type'        => 'Point',
                        'coordinates' => [(float) $lng, (float) $lat],
                    ]),
                    'distance' => $distance,
                ],
            ]
        );

        return $qb;
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

    /**
     * @param array $criteria
     * @param array $sorting
     * @return iterable
     */
    public function createPaginator(array $criteria = [], array $sorting = []): iterable
    {
        $queryBuilder = $this->createQueryBuilder('p');

        $this->applyCriteria($queryBuilder, $criteria);
        $this->applySorting($queryBuilder, $sorting);

        return $this->getPaginator($queryBuilder);
    }

    /**
     * @param QueryBuilder $queryBuilder
     * @param array $criteria
     */
    protected function applyCriteria(QueryBuilder $queryBuilder, array $criteria = []): void
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
