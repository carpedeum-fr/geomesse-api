<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TempFailedLogin
 *
 * @ORM\Table(name="TEMP_FAILEDLOGINS")
 * @ORM\Entity
 */
class TempFailedLogin
{
    /**
     * @var string
     *
     * @ORM\Column(name="LOGIN", type="string", length=100, nullable=false)
     */
    private $login = '';

    /**
     * @var string
     *
     * @ORM\Column(name="IP", type="string", length=50, nullable=false)
     */
    private $ip = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE", type="datetime", nullable=false)
     */
    private $date = '0000-00-00 00:00:00';



    /**
     * Set login
     *
     * @param string $login
     *
     * @return TempFailedLogin
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return TempFailedLogin
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return TempFailedLogin
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
