<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classified
 *
 * @ORM\Table(name="CLASSIFIEDS", indexes={@ORM\Index(name="ACCOUNT_ID", columns={"ACCOUNT_ID", "DATE"})})
 * @ORM\Entity
 */
class Classified
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
     * @ORM\Column(name="TYPE", type="string", nullable=false)
     */
    private $type = 'TIP';

    /**
     * @var string
     *
     * @ORM\Column(name="TITLE", type="text", length=65535, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="TEXT", type="text", length=65535, nullable=false)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="PIC", type="text", length=65535, nullable=false)
     */
    private $pic;

    /**
     * @var string
     *
     * @ORM\Column(name="MEDIA", type="text", length=65535, nullable=false)
     */
    private $media;

    /**
     * @var float
     *
     * @ORM\Column(name="GEO_LAT", type="float", precision=10, scale=0, nullable=false)
     */
    private $geoLat = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="GEO_LNG", type="float", precision=10, scale=0, nullable=false)
     */
    private $geoLng = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="PRIVATE", type="boolean", nullable=false)
     */
    private $private = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ALLOW_COMMENTS", type="boolean", nullable=false)
     */
    private $allowComments = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="NUM_COMMENTS", type="bigint", nullable=false)
     */
    private $numComments = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NUM_PINGS", type="bigint", nullable=false)
     */
    private $numPings = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NUM_LIKES", type="bigint", nullable=false)
     */
    private $numLikes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NUM_PRAYED", type="bigint", nullable=false)
     */
    private $numPrayed = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NUM_CANDLES", type="bigint", nullable=false)
     */
    private $numCandles = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LATEST_CANDLE", type="datetime", nullable=false)
     */
    private $latestCandle = '0000-00-00 00:00:00';

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
     * @ORM\Column(name="MODERATOR", type="bigint", nullable=false)
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
     * Set accountId
     *
     * @param integer $accountId
     *
     * @return Classified
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
     * @return Classified
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
     * @return Classified
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
     * @return Classified
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
     * @return Classified
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
     * Set type
     *
     * @param string $type
     *
     * @return Classified
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Classified
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Classified
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
     * Set pic
     *
     * @param string $pic
     *
     * @return Classified
     */
    public function setPic($pic)
    {
        $this->pic = $pic;

        return $this;
    }

    /**
     * Get pic
     *
     * @return string
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * Set media
     *
     * @param string $media
     *
     * @return Classified
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
     * Set geoLat
     *
     * @param float $geoLat
     *
     * @return Classified
     */
    public function setGeoLat($geoLat)
    {
        $this->geoLat = $geoLat;

        return $this;
    }

    /**
     * Get geoLat
     *
     * @return float
     */
    public function getGeoLat()
    {
        return $this->geoLat;
    }

    /**
     * Set geoLng
     *
     * @param float $geoLng
     *
     * @return Classified
     */
    public function setGeoLng($geoLng)
    {
        $this->geoLng = $geoLng;

        return $this;
    }

    /**
     * Get geoLng
     *
     * @return float
     */
    public function getGeoLng()
    {
        return $this->geoLng;
    }

    /**
     * Set private
     *
     * @param boolean $private
     *
     * @return Classified
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
     * Set allowComments
     *
     * @param boolean $allowComments
     *
     * @return Classified
     */
    public function setAllowComments($allowComments)
    {
        $this->allowComments = $allowComments;

        return $this;
    }

    /**
     * Get allowComments
     *
     * @return boolean
     */
    public function getAllowComments()
    {
        return $this->allowComments;
    }

    /**
     * Set numComments
     *
     * @param integer $numComments
     *
     * @return Classified
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
     * Set numPings
     *
     * @param integer $numPings
     *
     * @return Classified
     */
    public function setNumPings($numPings)
    {
        $this->numPings = $numPings;

        return $this;
    }

    /**
     * Get numPings
     *
     * @return integer
     */
    public function getNumPings()
    {
        return $this->numPings;
    }

    /**
     * Set numLikes
     *
     * @param integer $numLikes
     *
     * @return Classified
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
     * Set numPrayed
     *
     * @param integer $numPrayed
     *
     * @return Classified
     */
    public function setNumPrayed($numPrayed)
    {
        $this->numPrayed = $numPrayed;

        return $this;
    }

    /**
     * Get numPrayed
     *
     * @return integer
     */
    public function getNumPrayed()
    {
        return $this->numPrayed;
    }

    /**
     * Set numCandles
     *
     * @param integer $numCandles
     *
     * @return Classified
     */
    public function setNumCandles($numCandles)
    {
        $this->numCandles = $numCandles;

        return $this;
    }

    /**
     * Get numCandles
     *
     * @return integer
     */
    public function getNumCandles()
    {
        return $this->numCandles;
    }

    /**
     * Set latestCandle
     *
     * @param \DateTime $latestCandle
     *
     * @return Classified
     */
    public function setLatestCandle($latestCandle)
    {
        $this->latestCandle = $latestCandle;

        return $this;
    }

    /**
     * Get latestCandle
     *
     * @return \DateTime
     */
    public function getLatestCandle()
    {
        return $this->latestCandle;
    }

    /**
     * Set oldcommStatus
     *
     * @param string $oldcommStatus
     *
     * @return Classified
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
     * @return Classified
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
     * @return Classified
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
     * @return Classified
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
     * @return Classified
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
     * Set hidden
     *
     * @param boolean $hidden
     *
     * @return Classified
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
     * @return Classified
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
     * @return Classified
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
     * Set moderator
     *
     * @param integer $moderator
     *
     * @return Classified
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
}
