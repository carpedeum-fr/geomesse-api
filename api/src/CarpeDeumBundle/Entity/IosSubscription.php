<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IosSubscription
 *
 * @ORM\Table(name="IOS_SUBSCRIPTIONS")
 * @ORM\Entity
 */
class IosSubscription
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ACCOUNT_ID", type="bigint", nullable=false)
     */
    private $accountId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="RECEIPT", type="text", length=65535, nullable=false)
     */
    private $receipt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="EXPIRES", type="datetime", nullable=false)
     */
    private $expires;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE", type="datetime", nullable=false)
     */
    private $date;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set accountId
     *
     * @param integer $accountId
     *
     * @return IosSubscription
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
     * Set receipt
     *
     * @param string $receipt
     *
     * @return IosSubscription
     */
    public function setReceipt($receipt)
    {
        $this->receipt = $receipt;

        return $this;
    }

    /**
     * Get receipt
     *
     * @return string
     */
    public function getReceipt()
    {
        return $this->receipt;
    }

    /**
     * Set expires
     *
     * @param \DateTime $expires
     *
     * @return IosSubscription
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;

        return $this;
    }

    /**
     * Get expires
     *
     * @return \DateTime
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return IosSubscription
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
