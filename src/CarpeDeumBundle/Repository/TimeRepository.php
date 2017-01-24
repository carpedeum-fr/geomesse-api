<?php

namespace CarpeDeumBundle\Repository;

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

        return $qb;
    }

    protected function applyCriteria(QueryBuilder $queryBuilder, array $criteria = [])
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

        parent::applyCriteria($queryBuilder, $criteria);
    }

    public function getAlias()
    {
        return 't';
    }
}
