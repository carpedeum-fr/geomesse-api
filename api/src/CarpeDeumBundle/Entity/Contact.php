<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="CONTACTS", indexes={@ORM\Index(name="ACCOUNT_ID2", columns={"ACCOUNT_ID2", "ACCOUNT_ID1"})})
 * @ORM\Entity
 */
class Contact
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ACCOUNT_ID1", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $accountId1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ACCOUNT_ID2", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $accountId2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="BOOKMARK1", type="boolean", nullable=false)
     */
    private $bookmark1 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="BOOKMARK2", type="boolean", nullable=false)
     */
    private $bookmark2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="FRIEND1", type="boolean", nullable=false)
     */
    private $friend1 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="FRIEND2", type="boolean", nullable=false)
     */
    private $friend2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="BLOCK1", type="boolean", nullable=false)
     */
    private $block1 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="BLOCK2", type="boolean", nullable=false)
     */
    private $block2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES1", type="text", length=65535, nullable=false)
     */
    private $notes1;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES2", type="text", length=65535, nullable=false)
     */
    private $notes2;



    /**
     * Set accountId1
     *
     * @param integer $accountId1
     *
     * @return Contact
     */
    public function setAccountId1($accountId1)
    {
        $this->accountId1 = $accountId1;

        return $this;
    }

    /**
     * Get accountId1
     *
     * @return integer
     */
    public function getAccountId1()
    {
        return $this->accountId1;
    }

    /**
     * Set accountId2
     *
     * @param integer $accountId2
     *
     * @return Contact
     */
    public function setAccountId2($accountId2)
    {
        $this->accountId2 = $accountId2;

        return $this;
    }

    /**
     * Get accountId2
     *
     * @return integer
     */
    public function getAccountId2()
    {
        return $this->accountId2;
    }

    /**
     * Set bookmark1
     *
     * @param boolean $bookmark1
     *
     * @return Contact
     */
    public function setBookmark1($bookmark1)
    {
        $this->bookmark1 = $bookmark1;

        return $this;
    }

    /**
     * Get bookmark1
     *
     * @return boolean
     */
    public function getBookmark1()
    {
        return $this->bookmark1;
    }

    /**
     * Set bookmark2
     *
     * @param boolean $bookmark2
     *
     * @return Contact
     */
    public function setBookmark2($bookmark2)
    {
        $this->bookmark2 = $bookmark2;

        return $this;
    }

    /**
     * Get bookmark2
     *
     * @return boolean
     */
    public function getBookmark2()
    {
        return $this->bookmark2;
    }

    /**
     * Set friend1
     *
     * @param boolean $friend1
     *
     * @return Contact
     */
    public function setFriend1($friend1)
    {
        $this->friend1 = $friend1;

        return $this;
    }

    /**
     * Get friend1
     *
     * @return boolean
     */
    public function getFriend1()
    {
        return $this->friend1;
    }

    /**
     * Set friend2
     *
     * @param boolean $friend2
     *
     * @return Contact
     */
    public function setFriend2($friend2)
    {
        $this->friend2 = $friend2;

        return $this;
    }

    /**
     * Get friend2
     *
     * @return boolean
     */
    public function getFriend2()
    {
        return $this->friend2;
    }

    /**
     * Set block1
     *
     * @param boolean $block1
     *
     * @return Contact
     */
    public function setBlock1($block1)
    {
        $this->block1 = $block1;

        return $this;
    }

    /**
     * Get block1
     *
     * @return boolean
     */
    public function getBlock1()
    {
        return $this->block1;
    }

    /**
     * Set block2
     *
     * @param boolean $block2
     *
     * @return Contact
     */
    public function setBlock2($block2)
    {
        $this->block2 = $block2;

        return $this;
    }

    /**
     * Get block2
     *
     * @return boolean
     */
    public function getBlock2()
    {
        return $this->block2;
    }

    /**
     * Set notes1
     *
     * @param string $notes1
     *
     * @return Contact
     */
    public function setNotes1($notes1)
    {
        $this->notes1 = $notes1;

        return $this;
    }

    /**
     * Get notes1
     *
     * @return string
     */
    public function getNotes1()
    {
        return $this->notes1;
    }

    /**
     * Set notes2
     *
     * @param string $notes2
     *
     * @return Contact
     */
    public function setNotes2($notes2)
    {
        $this->notes2 = $notes2;

        return $this;
    }

    /**
     * Get notes2
     *
     * @return string
     */
    public function getNotes2()
    {
        return $this->notes2;
    }
}
