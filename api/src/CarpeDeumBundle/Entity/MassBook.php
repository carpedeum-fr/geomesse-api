<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MassBook
 *
 * @ORM\Table(name="MASSBOOK")
 * @ORM\Entity
 */
class MassBook
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
     * @var string
     *
     * @ORM\Column(name="LANG", type="string", length=5, nullable=false)
     */
    private $lang;

    /**
     * @var integer
     *
     * @ORM\Column(name="PARENT", type="bigint", nullable=false)
     */
    private $parent;

    /**
     * @var integer
     *
     * @ORM\Column(name="SORTORDER", type="bigint", nullable=false)
     */
    private $sortorder;

    /**
     * @var string
     *
     * @ORM\Column(name="TITLE", type="text", length=65535, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="TEXT", type="text", length=65535, nullable=false)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="CREDITS", type="text", length=65535, nullable=false)
     */
    private $credits;

    /**
     * @var string
     *
     * @ORM\Column(name="IMAGE", type="text", length=65535, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="IMAGE_CREDITS", type="text", length=65535, nullable=false)
     */
    private $imageCredits;

    /**
     * @var string
     *
     * @ORM\Column(name="AUDIO", type="text", length=65535, nullable=false)
     */
    private $audio;

    /**
     * @var string
     *
     * @ORM\Column(name="AUDIO_CREDITS", type="text", length=65535, nullable=false)
     */
    private $audioCredits;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AUDIO_ONLY", type="boolean", nullable=false)
     */
    private $audioOnly;



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
     * Set lang
     *
     * @param string $lang
     *
     * @return MassBook
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     *
     * @return MassBook
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return integer
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set sortorder
     *
     * @param integer $sortorder
     *
     * @return MassBook
     */
    public function setSortorder($sortorder)
    {
        $this->sortorder = $sortorder;

        return $this;
    }

    /**
     * Get sortorder
     *
     * @return integer
     */
    public function getSortorder()
    {
        return $this->sortorder;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return MassBook
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return MassBook
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set credits
     *
     * @param string $credits
     *
     * @return MassBook
     */
    public function setCredits($credits)
    {
        $this->credits = $credits;

        return $this;
    }

    /**
     * Get credits
     *
     * @return string
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return MassBook
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set imageCredits
     *
     * @param string $imageCredits
     *
     * @return MassBook
     */
    public function setImageCredits($imageCredits)
    {
        $this->imageCredits = $imageCredits;

        return $this;
    }

    /**
     * Get imageCredits
     *
     * @return string
     */
    public function getImageCredits()
    {
        return $this->imageCredits;
    }

    /**
     * Set audio
     *
     * @param string $audio
     *
     * @return MassBook
     */
    public function setAudio($audio)
    {
        $this->audio = $audio;

        return $this;
    }

    /**
     * Get audio
     *
     * @return string
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * Set audioCredits
     *
     * @param string $audioCredits
     *
     * @return MassBook
     */
    public function setAudioCredits($audioCredits)
    {
        $this->audioCredits = $audioCredits;

        return $this;
    }

    /**
     * Get audioCredits
     *
     * @return string
     */
    public function getAudioCredits()
    {
        return $this->audioCredits;
    }

    /**
     * Set audioOnly
     *
     * @param boolean $audioOnly
     *
     * @return MassBook
     */
    public function setAudioOnly($audioOnly)
    {
        $this->audioOnly = $audioOnly;

        return $this;
    }

    /**
     * Get audioOnly
     *
     * @return boolean
     */
    public function getAudioOnly()
    {
        return $this->audioOnly;
    }
}
