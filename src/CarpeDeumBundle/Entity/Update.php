<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Update
 *
 * @ORM\Table(name="UPDATES", indexes={@ORM\Index(name="ACCOUNT_ID", columns={"ACCOUNT_ID", "DATE", "UPDATE_ID"})})
 * @ORM\Entity
 */
class Update
{
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
     * @ORM\Column(name="UPDATE_ID", type="string", length=100, nullable=false)
     */
    private $updateId = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="UPDATE_DAY", type="date", nullable=false)
     */
    private $updateDay = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="UPDATE_HOUR", type="datetime", nullable=false)
     */
    private $updateHour = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="UPDATE_DETAILS", type="text", length=65535, nullable=false)
     */
    private $updateDetails;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PRIVATE", type="boolean", nullable=false)
     */
    private $private = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE", type="datetime", nullable=false)
     */
    private $date = '0000-00-00 00:00:00';

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
     * Set accountId
     *
     * @param integer $accountId
     *
     * @return Update
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
     * @return Update
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
     * @return Update
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
     * Set updateId
     *
     * @param string $updateId
     *
     * @return Update
     */
    public function setUpdateId($updateId)
    {
        $this->updateId = $updateId;

        return $this;
    }

    /**
     * Get updateId
     *
     * @return string
     */
    public function getUpdateId()
    {
        return $this->updateId;
    }

    /**
     * Set updateDay
     *
     * @param \DateTime $updateDay
     *
     * @return Update
     */
    public function setUpdateDay($updateDay)
    {
        $this->updateDay = $updateDay;

        return $this;
    }

    /**
     * Get updateDay
     *
     * @return \DateTime
     */
    public function getUpdateDay()
    {
        return $this->updateDay;
    }

    /**
     * Set updateHour
     *
     * @param \DateTime $updateHour
     *
     * @return Update
     */
    public function setUpdateHour($updateHour)
    {
        $this->updateHour = $updateHour;

        return $this;
    }

    /**
     * Get updateHour
     *
     * @return \DateTime
     */
    public function getUpdateHour()
    {
        return $this->updateHour;
    }

    /**
     * Set updateDetails
     *
     * @param string $updateDetails
     *
     * @return Update
     */
    public function setUpdateDetails($updateDetails)
    {
        $this->updateDetails = $updateDetails;

        return $this;
    }

    /**
     * Get updateDetails
     *
     * @return string
     */
    public function getUpdateDetails()
    {
        return $this->updateDetails;
    }

    /**
     * Set private
     *
     * @param boolean $private
     *
     * @return Update
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Update
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
     * Set numComments
     *
     * @param integer $numComments
     *
     * @return Update
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
     * @return Update
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
}
