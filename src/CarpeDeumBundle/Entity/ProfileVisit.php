<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfileVisit
 *
 * @ORM\Table(name="PROFILEVISITS")
 * @ORM\Entity
 */
class ProfileVisit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ACCOUNT_ID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $accountId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="VISITOR_ID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $visitorId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_INDEX", type="date")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dateIndex = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE", type="datetime", nullable=false)
     */
    private $date = '0000-00-00 00:00:00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="COUNTED", type="boolean", nullable=false)
     */
    private $counted = '0';



    /**
     * Set accountId
     *
     * @param integer $accountId
     *
     * @return ProfileVisit
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
     * Set visitorId
     *
     * @param integer $visitorId
     *
     * @return ProfileVisit
     */
    public function setVisitorId($visitorId)
    {
        $this->visitorId = $visitorId;

        return $this;
    }

    /**
     * Get visitorId
     *
     * @return integer
     */
    public function getVisitorId()
    {
        return $this->visitorId;
    }

    /**
     * Set dateIndex
     *
     * @param \DateTime $dateIndex
     *
     * @return ProfileVisit
     */
    public function setDateIndex($dateIndex)
    {
        $this->dateIndex = $dateIndex;

        return $this;
    }

    /**
     * Get dateIndex
     *
     * @return \DateTime
     */
    public function getDateIndex()
    {
        return $this->dateIndex;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return ProfileVisit
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

    /**
     * Set counted
     *
     * @param boolean $counted
     *
     * @return ProfileVisit
     */
    public function setCounted($counted)
    {
        $this->counted = $counted;

        return $this;
    }

    /**
     * Get counted
     *
     * @return boolean
     */
    public function getCounted()
    {
        return $this->counted;
    }
}
