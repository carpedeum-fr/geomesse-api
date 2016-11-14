<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 *
 * @ORM\Table(name="SESSIONS", indexes={@ORM\Index(name="ACCOUNT_ID", columns={"ACCOUNT_ID", "SESSION_ID"})})
 * @ORM\Entity
 */
class Session
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
     * @ORM\Column(name="SESSION_ID", type="string", length=100, nullable=false)
     */
    private $sessionId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="SESSION_TYPE", type="string", length=100, nullable=false)
     */
    private $sessionType = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LATEST_IP_ADDRESS", type="string", length=50, nullable=false)
     */
    private $latestIpAddress = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LATEST_IP_DATE", type="datetime", nullable=false)
     */
    private $latestIpDate = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="LATEST_USERAGENT", type="text", length=65535, nullable=false)
     */
    private $latestUseragent;

    /**
     * @var string
     *
     * @ORM\Column(name="LATEST_LANG", type="string", length=100, nullable=false)
     */
    private $latestLang = '';



    /**
     * Set accountId
     *
     * @param integer $accountId
     *
     * @return Session
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
     * Set sessionId
     *
     * @param string $sessionId
     *
     * @return Session
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get sessionId
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set sessionType
     *
     * @param string $sessionType
     *
     * @return Session
     */
    public function setSessionType($sessionType)
    {
        $this->sessionType = $sessionType;

        return $this;
    }

    /**
     * Get sessionType
     *
     * @return string
     */
    public function getSessionType()
    {
        return $this->sessionType;
    }

    /**
     * Set latestIpAddress
     *
     * @param string $latestIpAddress
     *
     * @return Session
     */
    public function setLatestIpAddress($latestIpAddress)
    {
        $this->latestIpAddress = $latestIpAddress;

        return $this;
    }

    /**
     * Get latestIpAddress
     *
     * @return string
     */
    public function getLatestIpAddress()
    {
        return $this->latestIpAddress;
    }

    /**
     * Set latestIpDate
     *
     * @param \DateTime $latestIpDate
     *
     * @return Session
     */
    public function setLatestIpDate($latestIpDate)
    {
        $this->latestIpDate = $latestIpDate;

        return $this;
    }

    /**
     * Get latestIpDate
     *
     * @return \DateTime
     */
    public function getLatestIpDate()
    {
        return $this->latestIpDate;
    }

    /**
     * Set latestUseragent
     *
     * @param string $latestUseragent
     *
     * @return Session
     */
    public function setLatestUseragent($latestUseragent)
    {
        $this->latestUseragent = $latestUseragent;

        return $this;
    }

    /**
     * Get latestUseragent
     *
     * @return string
     */
    public function getLatestUseragent()
    {
        return $this->latestUseragent;
    }

    /**
     * Set latestLang
     *
     * @param string $latestLang
     *
     * @return Session
     */
    public function setLatestLang($latestLang)
    {
        $this->latestLang = $latestLang;

        return $this;
    }

    /**
     * Get latestLang
     *
     * @return string
     */
    public function getLatestLang()
    {
        return $this->latestLang;
    }
}
