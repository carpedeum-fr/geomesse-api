<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalendarText
 *
 * @ORM\Table(name="CALENDARTEXT", uniqueConstraints={@ORM\UniqueConstraint(name="LANG", columns={"LANG", "TYPE", "INTERNAL_REF"})})
 * @ORM\Entity
 */
class CalendarText
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
     * @ORM\Column(name="LANG", type="string", length=10, nullable=false)
     */
    private $lang = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", nullable=false)
     */
    private $type = '';

    /**
     * @var string
     *
     * @ORM\Column(name="INTERNAL_REF", type="string", length=100, nullable=false)
     */
    private $internalRef = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TITLE", type="text", length=65535, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBTITLE", type="text", length=65535, nullable=false)
     */
    private $subtitle;

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
     * @return CalendarText
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
     * Set type
     *
     * @param string $type
     *
     * @return CalendarText
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set internalRef
     *
     * @param string $internalRef
     *
     * @return CalendarText
     */
    public function setInternalRef($internalRef)
    {
        $this->internalRef = $internalRef;

        return $this;
    }

    /**
     * Get internalRef
     *
     * @return string
     */
    public function getInternalRef()
    {
        return $this->internalRef;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return CalendarText
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
     * Set subtitle
     *
     * @param string $subtitle
     *
     * @return CalendarText
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get subtitle
     *
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return CalendarText
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
     * @return CalendarText
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
     * @return CalendarText
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
     * @return CalendarText
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
     * @return CalendarText
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
     * @return CalendarText
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
}
