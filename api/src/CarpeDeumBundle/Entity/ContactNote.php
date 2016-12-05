<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactNote
 *
 * @ORM\Table(name="CONTACTNOTES")
 * @ORM\Entity
 */
class ContactNote
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
     * @var boolean
     *
     * @ORM\Column(name="BOOKMARK", type="boolean", nullable=false)
     */
    private $bookmark;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="text", length=65535, nullable=false)
     */
    private $notes;



    /**
     * Set fromAccountId
     *
     * @param integer $fromAccountId
     *
     * @return ContactNote
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
     * @return ContactNote
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
     * Set bookmark
     *
     * @param boolean $bookmark
     *
     * @return ContactNote
     */
    public function setBookmark($bookmark)
    {
        $this->bookmark = $bookmark;

        return $this;
    }

    /**
     * Get bookmark
     *
     * @return boolean
     */
    public function getBookmark()
    {
        return $this->bookmark;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return ContactNote
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }
}
