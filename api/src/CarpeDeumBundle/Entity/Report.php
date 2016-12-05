<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Report
 *
 * @ORM\Table(name="REPORTS", indexes={@ORM\Index(name="SEEN", columns={"MODERATOR", "DATE"})})
 * @ORM\Entity
 */
class Report
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
     * @ORM\Column(name="FROM_ACCOUNT_ID", type="bigint", nullable=false)
     */
    private $fromAccountId;

    /**
     * @var string
     *
     * @ORM\Column(name="ITEM_TYPE", type="string", length=50, nullable=false)
     */
    private $itemType = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ITEM_ID", type="string", length=100, nullable=false)
     */
    private $itemId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENT", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE", type="datetime", nullable=false)
     */
    private $date = '0000-00-00 00:00:00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="MODERATOR", type="boolean", nullable=false)
     */
    private $moderator = '0';



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
     * Set fromAccountId
     *
     * @param integer $fromAccountId
     *
     * @return Report
     */
    public function setFromAccountId($fromAccountId)
    {
        $this->fromAccountId = $fromAccountId;

        return $this;
    }

    /**
     * Get fromAccountId
     *
     * @return integer
     */
    public function getFromAccountId()
    {
        return $this->fromAccountId;
    }

    /**
     * Set itemType
     *
     * @param string $itemType
     *
     * @return Report
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
     * @param string $itemId
     *
     * @return Report
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * Get itemId
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Report
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Report
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
     * Set moderator
     *
     * @param boolean $moderator
     *
     * @return Report
     */
    public function setModerator($moderator)
    {
        $this->moderator = $moderator;

        return $this;
    }

    /**
     * Get moderator
     *
     * @return boolean
     */
    public function getModerator()
    {
        return $this->moderator;
    }
}
