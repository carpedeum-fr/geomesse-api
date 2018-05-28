<?php

namespace CarpeDeumBundle\Repository;

use CarpeDeumBundle\Entity\Place;
use Doctrine\ORM\QueryBuilder;

class TimeRepository extends EntityRepository
{
    public function getTimes(Place $place, $typeOfDay)
    {
        $qb = $this->getCollectionQueryBuilder();

        $this->applyCriteria($qb, [
            'place'     => $place,
            'typeOfDay' => $typeOfDay,
        ]);

        return $qb->getQuery()->getResult();
    }

    /**
     * @param QueryBuilder $queryBuilder
     * @param array        $criteria
     */
    protected function applyCriteria(QueryBuilder $queryBuilder, array $criteria = []): void
    {
        if (isset($criteria['place'])) {
            $queryBuilder
                ->andWhere('t.place = :place')
                ->setParameter('place', $criteria['place']);

            unset($criteria['place']);
        }

        if (isset($criteria['typeOfDay'])) {
            if ('weekday' === $criteria['typeOfDay']) {
                $condition = '< 6';
            } else {
                $condition = '> 5';
            }
            $queryBuilder
                ->andWhere('t.dayOfWeek '.$condition)
            ;

            unset($criteria['typeOfDay']);
        }

        $queryBuilder->addOrderBy('t.dayOfWeek');
        $queryBuilder->addOrderBy('t.time');

        parent::applyCriteria($queryBuilder, $criteria);
    }

    public function getAlias()
    {
        return 't';
    }
}
