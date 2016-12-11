<?php

namespace CarpeDeumBundle\Entity;

use CarpeDeumBundle\Entity\Traits\TimestampableTrait;
use CarpeDeumBundle\Entity\Traits\GeolocalizableTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * Place
 *
 * @ORM\Table(name="place")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Place implements GeolocalizableInterface
{
    use TimestampableTrait;
    use GeolocalizableTrait;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string")
     */
    private $type = 'CHURCH';

    /**
     * @var string
     *
     * @ORM\Column(name="pic", type="string", length=200)
     */
    private $pic = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pic_credits", type="text")
     */
    private $picCredits;

    /**
     * @var string
     *
     * @ORM\Column(name="pics", type="text")
     */
    private $pics;

    /**
     * @var string
     *
     * @ORM\Column(name="pics_list", type="text")
     */
    private $picsList;

    /**
     * @var string
     *
     * @ORM\Column(name="vids", type="text")
     */
    private $vids;

    /**
     * @var string
     *
     * @ORM\Column(name="vids_list", type="text")
     */
    private $vidsList;

    /**
     * @var string
     *
     * @ORM\Column(name="info_address", type="text")
     */
    private $infoAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="info_address_1", type="text")
     */
    private $infoAddress1;

    /**
     * @var string
     *
     * @ORM\Column(name="info_address_2", type="text")
     */
    private $infoAddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_code", type="text")
     */
    private $infoAddressZip;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="text")
     */
    private $infoAddressCity;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="text")
     */
    private $infoAddressCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text")
     */
    private $infoUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="text")
     */
    private $infoTel;

    /**
     * @var string
     *
     * @ORM\Column(name="history", type="text")
     */
    private $infoHistory;

    /**
     * @ORM\OneToMany(targetEntity="\CarpeDeumBundle\Entity\Time", mappedBy="place")
     */
    private $timetable;

    /**
     * @var string
     *
     * @ORM\Column(name="schedule_notes", type="text")
     */
    private $scheduleNotes;

    /**
     * @var string
     *
     * @ORM\Column(name="schedule_eucharist", type="text")
     */
    private $scheduleEucharist;

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
}
