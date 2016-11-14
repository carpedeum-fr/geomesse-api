<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactTag
 *
 * @ORM\Table(name="CONTACTTAGS")
 * @ORM\Entity
 */
class ContactTag
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
    private $toAccountId;

    /**
     * @var string
     *
     * @ORM\Column(name="TAG", type="string", length=100)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tag;



    /**
     * Set fromAccountId
     *
     * @param integer $fromAccountId
     *
     * @return ContactTag
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
     * @return ContactTag
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
     * Set tag
     *
     * @param string $tag
     *
     * @return ContactTag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }
}
