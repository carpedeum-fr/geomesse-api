<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Place
 *
 * @ORM\Table(name="PLACES", indexes={@ORM\Index(name="GEO_LAT", columns={"GEO_LAT", "GEO_LNG"}), @ORM\Index(name="IMPORT_SOURCE", columns={"IMPORT_SOURCE", "IMPORT_ID"})})
 * @ORM\Entity
 */
class Place
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
     * @ORM\Column(name="NAME", type="string", length=100, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", nullable=false)
     */
    private $type = 'CHURCH';

    /**
     * @var string
     *
     * @ORM\Column(name="ancien_type", type="string", length=100, nullable=false)
     */
    private $ancienType = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PIC", type="string", length=200, nullable=false)
     */
    private $pic = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PIC_CREDITS", type="text", length=65535, nullable=false)
     */
    private $picCredits;

    /**
     * @var string
     *
     * @ORM\Column(name="PICS", type="text", length=65535, nullable=false)
     */
    private $pics;

    /**
     * @var string
     *
     * @ORM\Column(name="PICS_LIST", type="text", length=65535, nullable=false)
     */
    private $picsList;

    /**
     * @var string
     *
     * @ORM\Column(name="VIDS", type="text", length=65535, nullable=false)
     */
    private $vids;

    /**
     * @var string
     *
     * @ORM\Column(name="VIDS_LIST", type="text", length=65535, nullable=false)
     */
    private $vidsList;

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
     * @var string
     *
     * @ORM\Column(name="INFO_ADDRESS", type="text", length=65535, nullable=false)
     */
    private $infoAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="INFO_ADDRESS_1", type="text", length=65535, nullable=false)
     */
    private $infoAddress1;

    /**
     * @var string
     *
     * @ORM\Column(name="INFO_ADDRESS_2", type="text", length=65535, nullable=false)
     */
    private $infoAddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="INFO_ADDRESS_ZIP", type="text", length=65535, nullable=false)
     */
    private $infoAddressZip;

    /**
     * @var string
     *
     * @ORM\Column(name="INFO_ADDRESS_CITY", type="text", length=65535, nullable=false)
     */
    private $infoAddressCity;

    /**
     * @var string
     *
     * @ORM\Column(name="INFO_ADDRESS_COUNTRY", type="text", length=65535, nullable=false)
     */
    private $infoAddressCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="INFO_URL", type="text", length=65535, nullable=false)
     */
    private $infoUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="INFO_TEL", type="text", length=65535, nullable=false)
     */
    private $infoTel;

    /**
     * @var string
     *
     * @ORM\Column(name="INFO_HISTORY", type="text", length=65535, nullable=false)
     */
    private $infoHistory;

    /**
     * @var string
     *
     * @ORM\Column(name="SCHEDULE_NOTES", type="text", length=65535, nullable=false)
     */
    private $scheduleNotes;

    /**
     * @var string
     *
     * @ORM\Column(name="SCHEDULE_EUCHARIST", type="text", length=65535, nullable=false)
     */
    private $scheduleEucharist;

    /**
     * @var integer
     *
     * @ORM\Column(name="ancien_id", type="bigint", nullable=false)
     */
    private $ancienId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFIED", type="datetime", nullable=false)
     */
    private $modified = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="IMPORT_SOURCE", type="string", length=100, nullable=false)
     */
    private $importSource = '';

    /**
     * @var string
     *
     * @ORM\Column(name="IMPORT_ID", type="string", length=100, nullable=false)
     */
    private $importId = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="IMPORT_MODIFIED", type="datetime", nullable=false)
     */
    private $importModified = '0000-00-00 00:00:00';

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
     * @var integer
     *
     * @ORM\Column(name="NUM_CHECKINS", type="bigint", nullable=false)
     */
    private $numCheckins = '0';



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
     * Set name
     *
     * @param string $name
     *
     * @return Place
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Place
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
     * Set ancienType
     *
     * @param string $ancienType
     *
     * @return Place
     */
    public function setAncienType($ancienType)
    {
        $this->ancienType = $ancienType;

        return $this;
    }

    /**
     * Get ancienType
     *
     * @return string
     */
    public function getAncienType()
    {
        return $this->ancienType;
    }

    /**
     * Set pic
     *
     * @param string $pic
     *
     * @return Place
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
     * Set picCredits
     *
     * @param string $picCredits
     *
     * @return Place
     */
    public function setPicCredits($picCredits)
    {
        $this->picCredits = $picCredits;

        return $this;
    }

    /**
     * Get picCredits
     *
     * @return string
     */
    public function getPicCredits()
    {
        return $this->picCredits;
    }

    /**
     * Set pics
     *
     * @param string $pics
     *
     * @return Place
     */
    public function setPics($pics)
    {
        $this->pics = $pics;

        return $this;
    }

    /**
     * Get pics
     *
     * @return string
     */
    public function getPics()
    {
        return $this->pics;
    }

    /**
     * Set picsList
     *
     * @param string $picsList
     *
     * @return Place
     */
    public function setPicsList($picsList)
    {
        $this->picsList = $picsList;

        return $this;
    }

    /**
     * Get picsList
     *
     * @return string
     */
    public function getPicsList()
    {
        return $this->picsList;
    }

    /**
     * Set vids
     *
     * @param string $vids
     *
     * @return Place
     */
    public function setVids($vids)
    {
        $this->vids = $vids;

        return $this;
    }

    /**
     * Get vids
     *
     * @return string
     */
    public function getVids()
    {
        return $this->vids;
    }

    /**
     * Set vidsList
     *
     * @param string $vidsList
     *
     * @return Place
     */
    public function setVidsList($vidsList)
    {
        $this->vidsList = $vidsList;

        return $this;
    }

    /**
     * Get vidsList
     *
     * @return string
     */
    public function getVidsList()
    {
        return $this->vidsList;
    }

    /**
     * Set geoLat
     *
     * @param float $geoLat
     *
     * @return Place
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
     * @return Place
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
     * Set infoAddress
     *
     * @param string $infoAddress
     *
     * @return Place
     */
    public function setInfoAddress($infoAddress)
    {
        $this->infoAddress = $infoAddress;

        return $this;
    }

    /**
     * Get infoAddress
     *
     * @return string
     */
    public function getInfoAddress()
    {
        return $this->infoAddress;
    }

    /**
     * Set infoAddress1
     *
     * @param string $infoAddress1
     *
     * @return Place
     */
    public function setInfoAddress1($infoAddress1)
    {
        $this->infoAddress1 = $infoAddress1;

        return $this;
    }

    /**
     * Get infoAddress1
     *
     * @return string
     */
    public function getInfoAddress1()
    {
        return $this->infoAddress1;
    }

    /**
     * Set infoAddress2
     *
     * @param string $infoAddress2
     *
     * @return Place
     */
    public function setInfoAddress2($infoAddress2)
    {
        $this->infoAddress2 = $infoAddress2;

        return $this;
    }

    /**
     * Get infoAddress2
     *
     * @return string
     */
    public function getInfoAddress2()
    {
        return $this->infoAddress2;
    }

    /**
     * Set infoAddressZip
     *
     * @param string $infoAddressZip
     *
     * @return Place
     */
    public function setInfoAddressZip($infoAddressZip)
    {
        $this->infoAddressZip = $infoAddressZip;

        return $this;
    }

    /**
     * Get infoAddressZip
     *
     * @return string
     */
    public function getInfoAddressZip()
    {
        return $this->infoAddressZip;
    }

    /**
     * Set infoAddressCity
     *
     * @param string $infoAddressCity
     *
     * @return Place
     */
    public function setInfoAddressCity($infoAddressCity)
    {
        $this->infoAddressCity = $infoAddressCity;

        return $this;
    }

    /**
     * Get infoAddressCity
     *
     * @return string
     */
    public function getInfoAddressCity()
    {
        return $this->infoAddressCity;
    }

    /**
     * Set infoAddressCountry
     *
     * @param string $infoAddressCountry
     *
     * @return Place
     */
    public function setInfoAddressCountry($infoAddressCountry)
    {
        $this->infoAddressCountry = $infoAddressCountry;

        return $this;
    }

    /**
     * Get infoAddressCountry
     *
     * @return string
     */
    public function getInfoAddressCountry()
    {
        return $this->infoAddressCountry;
    }

    /**
     * Set infoUrl
     *
     * @param string $infoUrl
     *
     * @return Place
     */
    public function setInfoUrl($infoUrl)
    {
        $this->infoUrl = $infoUrl;

        return $this;
    }

    /**
     * Get infoUrl
     *
     * @return string
     */
    public function getInfoUrl()
    {
        return $this->infoUrl;
    }

    /**
     * Set infoTel
     *
     * @param string $infoTel
     *
     * @return Place
     */
    public function setInfoTel($infoTel)
    {
        $this->infoTel = $infoTel;

        return $this;
    }

    /**
     * Get infoTel
     *
     * @return string
     */
    public function getInfoTel()
    {
        return $this->infoTel;
    }

    /**
     * Set infoHistory
     *
     * @param string $infoHistory
     *
     * @return Place
     */
    public function setInfoHistory($infoHistory)
    {
        $this->infoHistory = $infoHistory;

        return $this;
    }

    /**
     * Get infoHistory
     *
     * @return string
     */
    public function getInfoHistory()
    {
        return $this->infoHistory;
    }

    /**
     * Set scheduleNotes
     *
     * @param string $scheduleNotes
     *
     * @return Place
     */
    public function setScheduleNotes($scheduleNotes)
    {
        $this->scheduleNotes = $scheduleNotes;

        return $this;
    }

    /**
     * Get scheduleNotes
     *
     * @return string
     */
    public function getScheduleNotes()
    {
        return $this->scheduleNotes;
    }

    /**
     * Set scheduleEucharist
     *
     * @param string $scheduleEucharist
     *
     * @return Place
     */
    public function setScheduleEucharist($scheduleEucharist)
    {
        $this->scheduleEucharist = $scheduleEucharist;

        return $this;
    }

    /**
     * Get scheduleEucharist
     *
     * @return string
     */
    public function getScheduleEucharist()
    {
        return $this->scheduleEucharist;
    }

    /**
     * Set ancienId
     *
     * @param integer $ancienId
     *
     * @return Place
     */
    public function setAncienId($ancienId)
    {
        $this->ancienId = $ancienId;

        return $this;
    }

    /**
     * Get ancienId
     *
     * @return integer
     */
    public function getAncienId()
    {
        return $this->ancienId;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     *
     * @return Place
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set importSource
     *
     * @param string $importSource
     *
     * @return Place
     */
    public function setImportSource($importSource)
    {
        $this->importSource = $importSource;

        return $this;
    }

    /**
     * Get importSource
     *
     * @return string
     */
    public function getImportSource()
    {
        return $this->importSource;
    }

    /**
     * Set importId
     *
     * @param string $importId
     *
     * @return Place
     */
    public function setImportId($importId)
    {
        $this->importId = $importId;

        return $this;
    }

    /**
     * Get importId
     *
     * @return string
     */
    public function getImportId()
    {
        return $this->importId;
    }

    /**
     * Set importModified
     *
     * @param \DateTime $importModified
     *
     * @return Place
     */
    public function setImportModified($importModified)
    {
        $this->importModified = $importModified;

        return $this;
    }

    /**
     * Get importModified
     *
     * @return \DateTime
     */
    public function getImportModified()
    {
        return $this->importModified;
    }

    /**
     * Set numComments
     *
     * @param integer $numComments
     *
     * @return Place
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
     * @return Place
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
     * Set numCheckins
     *
     * @param integer $numCheckins
     *
     * @return Place
     */
    public function setNumCheckins($numCheckins)
    {
        $this->numCheckins = $numCheckins;

        return $this;
    }

    /**
     * Get numCheckins
     *
     * @return integer
     */
    public function getNumCheckins()
    {
        return $this->numCheckins;
    }
}
