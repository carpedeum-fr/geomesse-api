<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClassifiedCandle
 *
 * @ORM\Table(name="CLASSIFIEDCANDLES", indexes={@ORM\Index(name="CLASSIFIED_ID", columns={"CLASSIFIED_ID"})})
 * @ORM\Entity
 */
class ClassifiedCandle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CLASSIFIED_ID", type="bigint", nullable=false)
     */
    private $classifiedId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ACCOUNT_ID", type="bigint", nullable=false)
     */
    private $accountId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE", type="datetime", nullable=false)
     */
    private $date;



    /**
     * Set classifiedId
     *
     * @param integer $classifiedId
     *
     * @return ClassifiedCandle
     */
    public function setClassifiedId($classifiedId)
    {
        $this->classifiedId = $classifiedId;

        return $this;
    }

    /**
     * Get classifiedId
     *
     * @return integer
     */
    public function getClassifiedId()
    {
        return $this->classifiedId;
    }

    /**
     * Set accountId
     *
     * @param integer $accountId
     *
     * @return ClassifiedCandle
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * Get accountId
     *
     * @return integer
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return ClassifiedCandle
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}
