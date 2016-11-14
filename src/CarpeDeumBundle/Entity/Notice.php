<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notice
 *
 * @ORM\Table(name="NOTICES")
 * @ORM\Entity
 */
class Notice
{
    /**
     * @var integer
     *
     * @ORM\Column(name="FROM_ACCOUNT_ID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fromAccountId;

    /**
     * @var integer
     *
     * @ORM\Column(name="TO_ACCOUNT_ID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $toAccountId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NOTICE_ID", type="string", length=100)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $noticeId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NOTICE_DETAILS", type="text", length=65535, nullable=false)
     */
    private $noticeDetails;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE", type="datetime", nullable=false)
     */
    private $date = '0000-00-00 00:00:00';



    /**
     * Set fromAccountId
     *
     * @param integer $fromAccountId
     *
     * @return Notice
     */
    public function setFromAccountId($fromAccountId)
    {
        $this->fromAccountId = $fromAccountId;

        return $this;
    }

    /**
     * Get fromAccountId
     *
     * @return integer
     */
    public function getFromAccountId()
    {
        return $this->fromAccountId;
    }

    /**
     * Set toAccountId
     *
     * @param integer $toAccountId
     *
     * @return Notice
     */
    public function setToAccountId($toAccountId)
    {
        $this->toAccountId = $toAccountId;

        return $this;
    }

    /**
     * Get toAccountId
     *
     * @return integer
     */
    public function getToAccountId()
    {
        return $this->toAccountId;
    }

    /**
     * Set noticeId
     *
     * @param string $noticeId
     *
     * @return Notice
     */
    public function setNoticeId($noticeId)
    {
        $this->noticeId = $noticeId;

        return $this;
    }

    /**
     * Get noticeId
     *
     * @return string
     */
    public function getNoticeId()
    {
        return $this->noticeId;
    }

    /**
     * Set noticeDetails
     *
     * @param string $noticeDetails
     *
     * @return Notice
     */
    public function setNoticeDetails($noticeDetails)
    {
        $this->noticeDetails = $noticeDetails;

        return $this;
    }

    /**
     * Get noticeDetails
     *
     * @return string
     */
    public function getNoticeDetails()
    {
        return $this->noticeDetails;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Notice
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
}
