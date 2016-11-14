<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClassifiedPrayed
 *
 * @ORM\Table(name="CLASSIFIEDPRAYED", indexes={@ORM\Index(name="CLASSIFIED_ID", columns={"CLASSIFIED_ID"})})
 * @ORM\Entity
 */
class ClassifiedPrayed
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
     * @ORM\Column(name="DAY", type="date", nullable=false)
     */
    private $day = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE", type="datetime", nullable=false)
     */
    private $date = '0000-00-00 00:00:00';



    /**
     * Set classifiedId
     *
     * @param integer $classifiedId
     *
     * @return ClassifiedPrayed
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
     * @return ClassifiedPrayed
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
     * Set day
     *
     * @param \DateTime $day
     *
     * @return ClassifiedPrayed
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return \DateTime
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return ClassifiedPrayed
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
