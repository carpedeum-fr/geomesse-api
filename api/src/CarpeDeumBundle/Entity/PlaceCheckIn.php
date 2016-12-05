<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlaceCheckIn
 *
 * @ORM\Table(name="PLACECHECKINS", indexes={@ORM\Index(name="PLACE_ID", columns={"PLACE_ID", "DATE"})})
 * @ORM\Entity
 */
class PlaceCheckIn
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ACCOUNT_ID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $accountId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE", type="datetime")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $date = '0000-00-00 00:00:00';

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
     * @var integer
     *
     * @ORM\Column(name="PLACE_ID", type="bigint", nullable=false)
     */
    private $placeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENT", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var boolean
     *
     * @ORM\Column(name="HIDDEN", type="boolean", nullable=false)
     */
    private $hidden;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ADMIN_HIDDEN", type="boolean", nullable=false)
     */
    private $adminHidden;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ADMIN_SILENCED", type="boolean", nullable=false)
     */
    private $adminSilenced;



    /**
     * Set accountId
     *
     * @param integer $accountId
     *
     * @return PlaceCheckIn
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return PlaceCheckIn
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
     * Set accountName
     *
     * @param string $accountName
     *
     * @return PlaceCheckIn
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
     * @return PlaceCheckIn
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
     * Set placeId
     *
     * @param integer $placeId
     *
     * @return PlaceCheckIn
     */
    public function setPlaceId($placeId)
    {
        $this->placeId = $placeId;

        return $this;
    }

    /**
     * Get placeId
     *
     * @return integer
     */
    public function getPlaceId()
    {
        return $this->placeId;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return PlaceCheckIn
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set hidden
     *
     * @param boolean $hidden
     *
     * @return PlaceCheckIn
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
     * @return PlaceCheckIn
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
     * @return PlaceCheckIn
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
}
