<?php

namespace CarpeDeumBundle\Entity;

use CarpeDeumBundle\Entity\Traits\TimestampableTrait;
use CarpeDeumBundle\Entity\Traits\GeolocalizableTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Resource\Model\ResourceInterface;

/**
 * Place
 *
 * @ORM\Table(name="place")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Place implements GeolocalizableInterface, ResourceInterface
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
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="info_address_1", type="text")
     */
    private $address1;

    /**
     * @var string
     *
     * @ORM\Column(name="info_address_2", type="text")
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_code", type="text")
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="text")
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="text")
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text")
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="text")
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="history", type="text")
     */
    private $history;

    /**
     * @var string
     *
     * @ORM\Column(name="schedule_notes", type="text")
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="schedule_eucharist", type="text")
     */
    private $eucharist;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="\CarpeDeumBundle\Entity\Time", mappedBy="place")
     */
    private $timetable;

    public function __construct()
    {
        $this->timetable = new ArrayCollection();
    }

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
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param string $address1
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * @param string $history
     */
    public function setHistory($history)
    {
        $this->history = $history;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * @return string
     */
    public function getEucharist()
    {
        return $this->eucharist;
    }

    /**
     * @param string $eucharist
     */
    public function setEucharist($eucharist)
    {
        $this->eucharist = $eucharist;
    }

    /**
     * @return ArrayCollection
     */
    public function getTimetable()
    {
        return $this->timetable;
    }

    /**
     * @param Time $time
     */
    public function addTimetable(Time $time)
    {
        $this->timetable[] = $time;

        return $this;
    }

    /**
     * @param Time $time
     */
    public function removeFolder(Time $time)
    {
        $this->timetable->removeElement($time);
    }
}
