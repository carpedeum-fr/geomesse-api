<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Like
 *
 * @ORM\Table(name="LIKES")
 * @ORM\Entity
 */
class Like
{
    /**
     * @var string
     *
     * @ORM\Column(name="ITEM_TYPE", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $itemType = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="ITEM_ID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $itemId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ACCOUNT_ID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $accountId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNT_NAME", type="string", length=100, nullable=false)
     */
    private $accountName;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNT_PIC", type="string", length=100, nullable=false)
     */
    private $accountPic;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE", type="datetime", nullable=false)
     */
    private $date = '0000-00-00 00:00:00';



    /**
     * Set itemType
     *
     * @param string $itemType
     *
     * @return Like
     */
    public function setItemType($itemType)
    {
        $this->itemType = $itemType;

        return $this;
    }

    /**
     * Get itemType
     *
     * @return string
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * Set itemId
     *
     * @param integer $itemId
     *
     * @return Like
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * Get itemId
     *
     * @return integer
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set accountId
     *
     * @param integer $accountId
     *
     * @return Like
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
     * Set accountName
     *
     * @param string $accountName
     *
     * @return Like
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * Get accountName
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Set accountPic
     *
     * @param string $accountPic
     *
     * @return Like
     */
    public function setAccountPic($accountPic)
    {
        $this->accountPic = $accountPic;

        return $this;
    }

    /**
     * Get accountPic
     *
     * @return string
     */
    public function getAccountPic()
    {
        return $this->accountPic;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Like
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
