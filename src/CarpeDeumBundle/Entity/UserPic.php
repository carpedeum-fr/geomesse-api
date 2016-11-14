<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserPic
 *
 * @ORM\Table(name="USERPICS", indexes={@ORM\Index(name="ACCOUNT_ID", columns={"ACCOUNT_ID"}), @ORM\Index(name="MODERATOR", columns={"MODERATOR", "SUBMODERATED", "SUBMODERATORS"})})
 * @ORM\Entity
 */
class UserPic
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
     * @ORM\Column(name="IP_ADDRESS", type="string", length=20, nullable=false)
     */
    private $ipAddress = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="IP_DATE", type="datetime", nullable=false)
     */
    private $ipDate = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="PATH", type="string", length=255, nullable=false)
     */
    private $path = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="WIDTH", type="integer", nullable=false)
     */
    private $width = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="HEIGHT", type="integer", nullable=false)
     */
    private $height = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="HIDDEN", type="boolean", nullable=false)
     */
    private $hidden = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_UPLOAD", type="datetime", nullable=false)
     */
    private $dateUpload = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_MODER", type="datetime", nullable=false)
     */
    private $dateModer = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="MODERATOR", type="bigint", nullable=false)
     */
    private $moderator = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="SUBMODERATED", type="boolean", nullable=false)
     */
    private $submoderated = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SUBMODERATORS", type="string", length=100, nullable=false)
     */
    private $submoderators = '';

    /**
     * @var string
     *
     * @ORM\Column(name="SUBMODERATORLOG", type="text", length=65535, nullable=false)
     */
    private $submoderatorlog;



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
     * @return UserPic
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
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return UserPic
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
     * Set ipDate
     *
     * @param \DateTime $ipDate
     *
     * @return UserPic
     */
    public function setIpDate($ipDate)
    {
        $this->ipDate = $ipDate;

        return $this;
    }

    /**
     * Get ipDate
     *
     * @return \DateTime
     */
    public function getIpDate()
    {
        return $this->ipDate;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return UserPic
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set width
     *
     * @param integer $width
     *
     * @return UserPic
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     *
     * @return UserPic
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set hidden
     *
     * @param boolean $hidden
     *
     * @return UserPic
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
     * Set dateUpload
     *
     * @param \DateTime $dateUpload
     *
     * @return UserPic
     */
    public function setDateUpload($dateUpload)
    {
        $this->dateUpload = $dateUpload;

        return $this;
    }

    /**
     * Get dateUpload
     *
     * @return \DateTime
     */
    public function getDateUpload()
    {
        return $this->dateUpload;
    }

    /**
     * Set dateModer
     *
     * @param \DateTime $dateModer
     *
     * @return UserPic
     */
    public function setDateModer($dateModer)
    {
        $this->dateModer = $dateModer;

        return $this;
    }

    /**
     * Get dateModer
     *
     * @return \DateTime
     */
    public function getDateModer()
    {
        return $this->dateModer;
    }

    /**
     * Set moderator
     *
     * @param integer $moderator
     *
     * @return UserPic
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
     * Set submoderated
     *
     * @param boolean $submoderated
     *
     * @return UserPic
     */
    public function setSubmoderated($submoderated)
    {
        $this->submoderated = $submoderated;

        return $this;
    }

    /**
     * Get submoderated
     *
     * @return boolean
     */
    public function getSubmoderated()
    {
        return $this->submoderated;
    }

    /**
     * Set submoderators
     *
     * @param string $submoderators
     *
     * @return UserPic
     */
    public function setSubmoderators($submoderators)
    {
        $this->submoderators = $submoderators;

        return $this;
    }

    /**
     * Get submoderators
     *
     * @return string
     */
    public function getSubmoderators()
    {
        return $this->submoderators;
    }

    /**
     * Set submoderatorlog
     *
     * @param string $submoderatorlog
     *
     * @return UserPic
     */
    public function setSubmoderatorlog($submoderatorlog)
    {
        $this->submoderatorlog = $submoderatorlog;

        return $this;
    }

    /**
     * Get submoderatorlog
     *
     * @return string
     */
    public function getSubmoderatorlog()
    {
        return $this->submoderatorlog;
    }
}
