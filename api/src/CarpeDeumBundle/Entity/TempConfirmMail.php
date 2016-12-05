<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TempConfirmMail
 *
 * @ORM\Table(name="TEMP_CONFIRMEMAIL")
 * @ORM\Entity
 */
class TempConfirmMail
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=100)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '';

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=100, nullable=false)
     */
    private $email = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="ACCOUNT_ID", type="bigint", nullable=false)
     */
    private $accountId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE", type="datetime", nullable=false)
     */
    private $date = '0000-00-00 00:00:00';



    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return TempConfirmMail
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set accountId
     *
     * @param integer $accountId
     *
     * @return TempConfirmMail
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
     * @return TempConfirmMail
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
