<?php

namespace CarpeDeumBundle\Repository;

use Doctrine\ORM\QueryBuilder;
use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository as BaseEntityRepository;

/**
 * Doctrine ORM driver entity repository.
 *
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 */
class EntityRepository extends BaseEntityRepository
{
    /**
     * Overridden just because original implementation hardcode 'o' as the alias.
     *
     * {@inheritdoc}
     */
    public function createPaginator(array $criteria = [], array $sorting = [])
    {
        $queryBuilder = $this->getCollectionQueryBuilder();

        $this->applyCriteria($queryBuilder, $criteria);
        $this->applySorting($queryBuilder, $sorting);

        return $this->getPaginator($queryBuilder);
    }

    /**
     * @param mixed $id
     * @param null $lockMode
     * @param null $lockVersion
     *
     * @return mixed|null|object
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        return $this
            ->getQueryBuilder()
            ->andWhere($this->getAlias().'.id = '.intval($id))
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @return array
     */
    public function findAll()
    {
        return $this
            ->getCollectionQueryBuilder()
            ->getQuery()
            ->getResult();
    }

    /**
     * @param array $criteria
     * @param array|null $orderBy
     * @return mixed|null|object
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findOneBy(array $criteria, array $orderBy = null)
    {
        $queryBuilder = $this->getQueryBuilder();

        $this->applyCriteria($queryBuilder, $criteria);

        return $queryBuilder
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @param array $criteria
     * @param array $sorting
     * @param int   $limit
     * @param int   $offset
     *
     * @return array
     */
    public function findBy(array $criteria, array $sorting = [], $limit = null, $offset = null)
    {
        $queryBuilder = $this->getCollectionQueryBuilder();

        $this->applyCriteria($queryBuilder, $criteria);
        $this->applySorting($queryBuilder, $sorting);

        if (null !== $limit) {
            $queryBuilder->setMaxResults($limit);
        }

        if (null !== $offset) {
            $queryBuilder->setFirstResult($offset);
        }

        return $queryBuilder
            ->getQuery()
            ->getResult();
    }

    /**
     * @return QueryBuilder
     */
    protected function getQueryBuilder()
    {
        return $this->createQueryBuilder($this->getAlias());
    }

    /**
     * @return QueryBuilder
     */
    protected function getCollectionQueryBuilder()
    {
        return $this->createQueryBuilder($this->getAlias());
    }

    /**
     * @param string $name
     * @return string
     */
    protected function getPropertyName(string $name): string
    {
        if (false === strpos($name, '.')) {
            return $this->getAlias().'.'.$name;
        }

        return $name;
    }

    /**
     * @return string
     */
    protected function getAlias()
    {
        return 'o';
    }
}
