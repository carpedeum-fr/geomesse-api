<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupStatus
 *
 * @ORM\Table(name="GROUPSTATUS", indexes={@ORM\Index(name="GROUP_ID", columns={"GROUP_ID", "DATE"})})
 * @ORM\Entity
 */
class GroupStatus
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
     * @ORM\Column(name="GROUP_ID", type="bigint", nullable=false)
     */
    private $groupId = '0';

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
    private $accountName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNT_PIC", type="string", length=100, nullable=false)
     */
    private $accountPic = '';

    /**
     * @var string
     *
     * @ORM\Column(name="IP_ADDRESS", type="string", length=50, nullable=false)
     */
    private $ipAddress = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE", type="datetime", nullable=false)
     */
    private $date = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="TEXT", type="text", length=65535, nullable=false)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="MEDIA", type="text", length=65535, nullable=false)
     */
    private $media;

    /**
     * @var string
     *
     * @ORM\Column(name="oldMEDIATYPE", type="string", length=50, nullable=false)
     */
    private $oldmediatype = '';

    /**
     * @var string
     *
     * @ORM\Column(name="oldMEDIAPATH", type="string", length=100, nullable=false)
     */
    private $oldmediapath = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="oldMEDIAWIDTH", type="integer", nullable=false)
     */
    private $oldmediawidth;

    /**
     * @var integer
     *
     * @ORM\Column(name="oldMEDIAHEIGHT", type="integer", nullable=false)
     */
    private $oldmediaheight;

    /**
     * @var string
     *
     * @ORM\Column(name="oldCOMM_STATUS", type="string", nullable=false)
     */
    private $oldcommStatus = 'DEFAULT';

    /**
     * @var string
     *
     * @ORM\Column(name="oldCOMM_FROM_FRIENDS", type="string", nullable=false)
     */
    private $oldcommFromFriends = 'DEFAULT';

    /**
     * @var string
     *
     * @ORM\Column(name="oldCOMM_FROM_STRANGERS", type="string", nullable=false)
     */
    private $oldcommFromStrangers = 'DEFAULT';

    /**
     * @var string
     *
     * @ORM\Column(name="oldCOMM_FROM_VISITORS", type="string", nullable=false)
     */
    private $oldcommFromVisitors = 'DEFAULT';

    /**
     * @var integer
     *
     * @ORM\Column(name="oldCOMM_NUMBER", type="integer", nullable=false)
     */
    private $oldcommNumber = '0';

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
     * @var boolean
     *
     * @ORM\Column(name="PRIVATE", type="boolean", nullable=false)
     */
    private $private = '0';

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set groupId
     *
     * @param integer $groupId
     *
     * @return GroupStatus
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * Get groupId
     *
     * @return integer
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set accountId
     *
     * @param integer $accountId
     *
     * @return GroupStatus
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
     * @return GroupStatus
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
     * @return GroupStatus
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
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return GroupStatus
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return GroupStatus
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
     * Set text
     *
     * @param string $text
     *
     * @return GroupStatus
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
     * Set media
     *
     * @param string $media
     *
     * @return GroupStatus
     */
    public function setMedia($media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return string
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set oldmediatype
     *
     * @param string $oldmediatype
     *
     * @return GroupStatus
     */
    public function setOldmediatype($oldmediatype)
    {
        $this->oldmediatype = $oldmediatype;

        return $this;
    }

    /**
     * Get oldmediatype
     *
     * @return string
     */
    public function getOldmediatype()
    {
        return $this->oldmediatype;
    }

    /**
     * Set oldmediapath
     *
     * @param string $oldmediapath
     *
     * @return GroupStatus
     */
    public function setOldmediapath($oldmediapath)
    {
        $this->oldmediapath = $oldmediapath;

        return $this;
    }

    /**
     * Get oldmediapath
     *
     * @return string
     */
    public function getOldmediapath()
    {
        return $this->oldmediapath;
    }

    /**
     * Set oldmediawidth
     *
     * @param integer $oldmediawidth
     *
     * @return GroupStatus
     */
    public function setOldmediawidth($oldmediawidth)
    {
        $this->oldmediawidth = $oldmediawidth;

        return $this;
    }

    /**
     * Get oldmediawidth
     *
     * @return integer
     */
    public function getOldmediawidth()
    {
        return $this->oldmediawidth;
    }

    /**
     * Set oldmediaheight
     *
     * @param integer $oldmediaheight
     *
     * @return GroupStatus
     */
    public function setOldmediaheight($oldmediaheight)
    {
        $this->oldmediaheight = $oldmediaheight;

        return $this;
    }

    /**
     * Get oldmediaheight
     *
     * @return integer
     */
    public function getOldmediaheight()
    {
        return $this->oldmediaheight;
    }

    /**
     * Set oldcommStatus
     *
     * @param string $oldcommStatus
     *
     * @return GroupStatus
     */
    public function setOldcommStatus($oldcommStatus)
    {
        $this->oldcommStatus = $oldcommStatus;

        return $this;
    }

    /**
     * Get oldcommStatus
     *
     * @return string
     */
    public function getOldcommStatus()
    {
        return $this->oldcommStatus;
    }

    /**
     * Set oldcommFromFriends
     *
     * @param string $oldcommFromFriends
     *
     * @return GroupStatus
     */
    public function setOldcommFromFriends($oldcommFromFriends)
    {
        $this->oldcommFromFriends = $oldcommFromFriends;

        return $this;
    }

    /**
     * Get oldcommFromFriends
     *
     * @return string
     */
    public function getOldcommFromFriends()
    {
        return $this->oldcommFromFriends;
    }

    /**
     * Set oldcommFromStrangers
     *
     * @param string $oldcommFromStrangers
     *
     * @return GroupStatus
     */
    public function setOldcommFromStrangers($oldcommFromStrangers)
    {
        $this->oldcommFromStrangers = $oldcommFromStrangers;

        return $this;
    }

    /**
     * Get oldcommFromStrangers
     *
     * @return string
     */
    public function getOldcommFromStrangers()
    {
        return $this->oldcommFromStrangers;
    }

    /**
     * Set oldcommFromVisitors
     *
     * @param string $oldcommFromVisitors
     *
     * @return GroupStatus
     */
    public function setOldcommFromVisitors($oldcommFromVisitors)
    {
        $this->oldcommFromVisitors = $oldcommFromVisitors;

        return $this;
    }

    /**
     * Get oldcommFromVisitors
     *
     * @return string
     */
    public function getOldcommFromVisitors()
    {
        return $this->oldcommFromVisitors;
    }

    /**
     * Set oldcommNumber
     *
     * @param integer $oldcommNumber
     *
     * @return GroupStatus
     */
    public function setOldcommNumber($oldcommNumber)
    {
        $this->oldcommNumber = $oldcommNumber;

        return $this;
    }

    /**
     * Get oldcommNumber
     *
     * @return integer
     */
    public function getOldcommNumber()
    {
        return $this->oldcommNumber;
    }

    /**
     * Set numComments
     *
     * @param integer $numComments
     *
     * @return GroupStatus
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
     * @return GroupStatus
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

    /**
     * Set private
     *
     * @param boolean $private
     *
     * @return GroupStatus
     */
    public function setPrivate($private)
    {
        $this->private = $private;

        return $this;
    }

    /**
     * Get private
     *
     * @return boolean
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * Set hidden
     *
     * @param boolean $hidden
     *
     * @return GroupStatus
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
     * @return GroupStatus
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
}
