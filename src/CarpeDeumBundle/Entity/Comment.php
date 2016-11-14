<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="COMMENTS", indexes={@ORM\Index(name="ITEM_TYPE", columns={"ITEM_TYPE_old", "ITEM_ID", "DATE"}), @ORM\Index(name="IN_REPLY_TO", columns={"IN_REPLY_TO", "DATE"})})
 * @ORM\Entity
 */
class Comment
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
     * @var string
     *
     * @ORM\Column(name="ITEM_TYPE", type="string", length=50, nullable=false)
     */
    private $itemType = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ITEM_TYPE_old", type="string", nullable=false)
     */
    private $itemTypeOld = 'PROFILE';

    /**
     * @var integer
     *
     * @ORM\Column(name="ITEM_ID", type="bigint", nullable=false)
     */
    private $itemId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IN_REPLY_TO", type="bigint", nullable=false)
     */
    private $inReplyTo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ACCOUNT_ID", type="bigint", nullable=false)
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
     * @var string
     *
     * @ORM\Column(name="TEXT", type="text", length=65535, nullable=false)
     */
    private $text;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE", type="datetime", nullable=false)
     */
    private $date = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="IP", type="string", length=50, nullable=false)
     */
    private $ip;

    /**
     * @var integer
     *
     * @ORM\Column(name="MODERATOR", type="bigint", nullable=false)
     */
    private $moderator = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="HIDDEN", type="boolean", nullable=false)
     */
    private $hidden = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ADMIN_HIDDEN", type="boolean", nullable=false)
     */
    private $adminHidden = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ADMIN_SILENCED", type="boolean", nullable=false)
     */
    private $adminSilenced;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUM_COMMENTS", type="bigint", nullable=false)
     */
    private $numComments = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NUM_LIKES", type="bigint", nullable=false)
     */
    private $numLikes = '0';



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
     * Set itemType
     *
     * @param string $itemType
     *
     * @return Comment
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
     * Set itemTypeOld
     *
     * @param string $itemTypeOld
     *
     * @return Comment
     */
    public function setItemTypeOld($itemTypeOld)
    {
        $this->itemTypeOld = $itemTypeOld;

        return $this;
    }

    /**
     * Get itemTypeOld
     *
     * @return string
     */
    public function getItemTypeOld()
    {
        return $this->itemTypeOld;
    }

    /**
     * Set itemId
     *
     * @param integer $itemId
     *
     * @return Comment
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
     * Set inReplyTo
     *
     * @param integer $inReplyTo
     *
     * @return Comment
     */
    public function setInReplyTo($inReplyTo)
    {
        $this->inReplyTo = $inReplyTo;

        return $this;
    }

    /**
     * Get inReplyTo
     *
     * @return integer
     */
    public function getInReplyTo()
    {
        return $this->inReplyTo;
    }

    /**
     * Set accountId
     *
     * @param integer $accountId
     *
     * @return Comment
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
     * @return Comment
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
     * @return Comment
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
     * Set text
     *
     * @param string $text
     *
     * @return Comment
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Comment
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
     * Set ip
     *
     * @param string $ip
     *
     * @return Comment
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set moderator
     *
     * @param integer $moderator
     *
     * @return Comment
     */
    public function setModerator($moderator)
    {
        $this->moderator = $moderator;

        return $this;
    }

    /**
     * Get moderator
     *
     * @return integer
     */
    public function getModerator()
    {
        return $this->moderator;
    }

    /**
     * Set hidden
     *
     * @param boolean $hidden
     *
     * @return Comment
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * Get hidden
     *
     * @return boolean
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Set adminHidden
     *
     * @param boolean $adminHidden
     *
     * @return Comment
     */
    public function setAdminHidden($adminHidden)
    {
        $this->adminHidden = $adminHidden;

        return $this;
    }

    /**
     * Get adminHidden
     *
     * @return boolean
     */
    public function getAdminHidden()
    {
        return $this->adminHidden;
    }

    /**
     * Set adminSilenced
     *
     * @param boolean $adminSilenced
     *
     * @return Comment
     */
    public function setAdminSilenced($adminSilenced)
    {
        $this->adminSilenced = $adminSilenced;

        return $this;
    }

    /**
     * Get adminSilenced
     *
     * @return boolean
     */
    public function getAdminSilenced()
    {
        return $this->adminSilenced;
    }

    /**
     * Set numComments
     *
     * @param integer $numComments
     *
     * @return Comment
     */
    public function setNumComments($numComments)
    {
        $this->numComments = $numComments;

        return $this;
    }

    /**
     * Get numComments
     *
     * @return integer
     */
    public function getNumComments()
    {
        return $this->numComments;
    }

    /**
     * Set numLikes
     *
     * @param integer $numLikes
     *
     * @return Comment
     */
    public function setNumLikes($numLikes)
    {
        $this->numLikes = $numLikes;

        return $this;
    }

    /**
     * Get numLikes
     *
     * @return integer
     */
    public function getNumLikes()
    {
        return $this->numLikes;
    }
}
