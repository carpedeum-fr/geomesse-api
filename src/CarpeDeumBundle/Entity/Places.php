<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Places
 *
 * @ORM\Table(name="PLACES", indexes={@ORM\Index(name="GEO_LAT", columns={"GEO_LAT", "GEO_LNG"}), @ORM\Index(name="IMPORT_SOURCE", columns={"IMPORT_SOURCE", "IMPORT_ID"})})
 * @ORM\Entity
 */
class Places
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="bigint", options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="ancien_id", type="bigint", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="NUM_COMMENTS", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $numComments = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="NUM_LIKES", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $numLikes = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="NUM_CHECKINS", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $numCheckins = '0';

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getAncienType()
    {
        return $this->ancienType;
    }

    /**
     * @param string $ancienType
     */
    public function setAncienType($ancienType)
    {
        $this->ancienType = $ancienType;
    }

    /**
     * @return string
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * @param string $pic
     */
    public function setPic($pic)
    {
        $this->pic = $pic;
    }

    /**
     * @return string
     */
    public function getPicCredits()
    {
        return $this->picCredits;
    }

    /**
     * @param string $picCredits
     */
    public function setPicCredits($picCredits)
    {
        $this->picCredits = $picCredits;
    }

    /**
     * @return string
     */
    public function getPics()
    {
        return $this->pics;
    }

    /**
     * @param string $pics
     */
    public function setPics($pics)
    {
        $this->pics = $pics;
    }

    /**
     * @return string
     */
    public function getPicsList()
    {
        return $this->picsList;
    }

    /**
     * @param string $picsList
     */
    public function setPicsList($picsList)
    {
        $this->picsList = $picsList;
    }

    /**
     * @return string
     */
    public function getVids()
    {
        return $this->vids;
    }

    /**
     * @param string $vids
     */
    public function setVids($vids)
    {
        $this->vids = $vids;
    }

    /**
     * @return string
     */
    public function getVidsList()
    {
        return $this->vidsList;
    }

    /**
     * @param string $vidsList
     */
    public function setVidsList($vidsList)
    {
        $this->vidsList = $vidsList;
    }

    /**
     * @return float
     */
    public function getGeoLat()
    {
        return $this->geoLat;
    }

    /**
     * @param float $geoLat
     */
    public function setGeoLat($geoLat)
    {
        $this->geoLat = $geoLat;
    }

    /**
     * @return float
     */
    public function getGeoLng()
    {
        return $this->geoLng;
    }

    /**
     * @param float $geoLng
     */
    public function setGeoLng($geoLng)
    {
        $this->geoLng = $geoLng;
    }

    /**
     * @return string
     */
    public function getInfoAddress()
    {
        return $this->infoAddress;
    }

    /**
     * @param string $infoAddress
     */
    public function setInfoAddress($infoAddress)
    {
        $this->infoAddress = $infoAddress;
    }

    /**
     * @return string
     */
    public function getInfoAddress1()
    {
        return $this->infoAddress1;
    }

    /**
     * @param string $infoAddress1
     */
    public function setInfoAddress1($infoAddress1)
    {
        $this->infoAddress1 = $infoAddress1;
    }

    /**
     * @return string
     */
    public function getInfoAddress2()
    {
        return $this->infoAddress2;
    }

    /**
     * @param string $infoAddress2
     */
    public function setInfoAddress2($infoAddress2)
    {
        $this->infoAddress2 = $infoAddress2;
    }

    /**
     * @return string
     */
    public function getInfoAddressZip()
    {
        return $this->infoAddressZip;
    }

    /**
     * @param string $infoAddressZip
     */
    public function setInfoAddressZip($infoAddressZip)
    {
        $this->infoAddressZip = $infoAddressZip;
    }

    /**
     * @return string
     */
    public function getInfoAddressCity()
    {
        return $this->infoAddressCity;
    }

    /**
     * @param string $infoAddressCity
     */
    public function setInfoAddressCity($infoAddressCity)
    {
        $this->infoAddressCity = $infoAddressCity;
    }

    /**
     * @return string
     */
    public function getInfoAddressCountry()
    {
        return $this->infoAddressCountry;
    }

    /**
     * @param string $infoAddressCountry
     */
    public function setInfoAddressCountry($infoAddressCountry)
    {
        $this->infoAddressCountry = $infoAddressCountry;
    }

    /**
     * @return string
     */
    public function getInfoUrl()
    {
        return $this->infoUrl;
    }

    /**
     * @param string $infoUrl
     */
    public function setInfoUrl($infoUrl)
    {
        $this->infoUrl = $infoUrl;
    }

    /**
     * @return string
     */
    public function getInfoTel()
    {
        return $this->infoTel;
    }

    /**
     * @param string $infoTel
     */
    public function setInfoTel($infoTel)
    {
        $this->infoTel = $infoTel;
    }

    /**
     * @return string
     */
    public function getInfoHistory()
    {
        return $this->infoHistory;
    }

    /**
     * @param string $infoHistory
     */
    public function setInfoHistory($infoHistory)
    {
        $this->infoHistory = $infoHistory;
    }

    /**
     * @return string
     */
    public function getScheduleNotes()
    {
        return $this->scheduleNotes;
    }

    /**
     * @param string $scheduleNotes
     */
    public function setScheduleNotes($scheduleNotes)
    {
        $this->scheduleNotes = $scheduleNotes;
    }

    /**
     * @return string
     */
    public function getScheduleEucharist()
    {
        return $this->scheduleEucharist;
    }

    /**
     * @param string $scheduleEucharist
     */
    public function setScheduleEucharist($scheduleEucharist)
    {
        $this->scheduleEucharist = $scheduleEucharist;
    }

    /**
     * @return int
     */
    public function getAncienId()
    {
        return $this->ancienId;
    }

    /**
     * @param int $ancienId
     */
    public function setAncienId($ancienId)
    {
        $this->ancienId = $ancienId;
    }

    /**
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @param \DateTime $modified
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    }

    /**
     * @return string
     */
    public function getImportSource()
    {
        return $this->importSource;
    }

    /**
     * @param string $importSource
     */
    public function setImportSource($importSource)
    {
        $this->importSource = $importSource;
    }

    /**
     * @return string
     */
    public function getImportId()
    {
        return $this->importId;
    }

    /**
     * @param string $importId
     */
    public function setImportId($importId)
    {
        $this->importId = $importId;
    }

    /**
     * @return \DateTime
     */
    public function getImportModified()
    {
        return $this->importModified;
    }

    /**
     * @param \DateTime $importModified
     */
    public function setImportModified($importModified)
    {
        $this->importModified = $importModified;
    }

    /**
     * @return int
     */
    public function getNumComments()
    {
        return $this->numComments;
    }

    /**
     * @param int $numComments
     */
    public function setNumComments($numComments)
    {
        $this->numComments = $numComments;
    }

    /**
     * @return int
     */
    public function getNumLikes()
    {
        return $this->numLikes;
    }

    /**
     * @param int $numLikes
     */
    public function setNumLikes($numLikes)
    {
        $this->numLikes = $numLikes;
    }

    /**
     * @return int
     */
    public function getNumCheckins()
    {
        return $this->numCheckins;
    }

    /**
     * @param int $numCheckins
     */
    public function setNumCheckins($numCheckins)
    {
        $this->numCheckins = $numCheckins;
    }


}
