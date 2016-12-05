<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Group
 *
 * @ORM\Table(name="GROUPS")
 * @ORM\Entity
 */
class Group
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
     * @ORM\Column(name="NAME", type="text", length=65535, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="TEXT", type="text", length=65535, nullable=false)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="PIC", type="string", length=100, nullable=false)
     */
    private $pic;

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
     * @var integer
     *
     * @ORM\Column(name="CREATOR_ID", type="bigint", nullable=false)
     */
    private $creatorId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CREATOR_IP", type="string", length=50, nullable=false)
     */
    private $creatorIp = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_CREATION", type="datetime", nullable=false)
     */
    private $dateCreation = '0000-00-00 00:00:00';

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
     * Set name
     *
     * @param string $name
     *
     * @return Group
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
     * Set text
     *
     * @param string $text
     *
     * @return Group
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
     * @return Group
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
     * Set geoLat
     *
     * @param float $geoLat
     *
     * @return Group
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
     * @return Group
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
     * @return Group
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
     * Set creatorId
     *
     * @param integer $creatorId
     *
     * @return Group
     */
    public function setCreatorId($creatorId)
    {
        $this->creatorId = $creatorId;

        return $this;
    }

    /**
     * Get creatorId
     *
     * @return integer
     */
    public function getCreatorId()
    {
        return $this->creatorId;
    }

    /**
     * Set creatorIp
     *
     * @param string $creatorIp
     *
     * @return Group
     */
    public function setCreatorIp($creatorIp)
    {
        $this->creatorIp = $creatorIp;

        return $this;
    }

    /**
     * Get creatorIp
     *
     * @return string
     */
    public function getCreatorIp()
    {
        return $this->creatorIp;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Group
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set adminHidden
     *
     * @param boolean $adminHidden
     *
     * @return Group
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
