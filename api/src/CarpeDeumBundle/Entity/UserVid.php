<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserVid
 *
 * @ORM\Table(name="USERVIDS", indexes={@ORM\Index(name="ACCOUNT_ID", columns={"ACCOUNT_ID"})})
 * @ORM\Entity
 */
class UserVid
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
     * @var string
     *
     * @ORM\Column(name="CAPTION", type="text", length=65535, nullable=false)
     */
    private $caption;

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
     * @return UserVid
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
     * @return UserVid
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
     * @return UserVid
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
     * @return UserVid
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
     * @return UserVid
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
     * @return UserVid
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
     * Set caption
     *
     * @param string $caption
     *
     * @return UserVid
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get caption
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Set hidden
     *
     * @param boolean $hidden
     *
     * @return UserVid
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
     * @return UserVid
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
     * @return UserVid
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
     * @return UserVid
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
