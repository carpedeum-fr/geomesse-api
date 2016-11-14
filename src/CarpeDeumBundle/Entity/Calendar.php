<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendar
 *
 * @ORM\Table(name="CALENDAR", uniqueConstraints={@ORM\UniqueConstraint(name="LANG_DATE", columns={"LANG", "DATE"})})
 * @ORM\Entity
 */
class Calendar
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
     * @var \DateTime
     *
     * @ORM\Column(name="DATE", type="date", nullable=false)
     */
    private $date = '0000-00-00';

    /**
     * @var string
     *
     * @ORM\Column(name="LITUR_YEAR", type="string", nullable=false)
     */
    private $liturYear = 'A';

    /**
     * @var integer
     *
     * @ORM\Column(name="LITUR_DAY", type="integer", nullable=false)
     */
    private $liturDay = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="COLOR", type="string", nullable=false)
     */
    private $color = 'PURPLE';

    /**
     * @var string
     *
     * @ORM\Column(name="COLOR_INFO", type="text", length=65535, nullable=false)
     */
    private $colorInfo;

    /**
     * @var string
     *
     * @ORM\Column(name="CELEBRATION", type="text", length=65535, nullable=false)
     */
    private $celebration;

    /**
     * @var string
     *
     * @ORM\Column(name="CELEBRATION2", type="text", length=65535, nullable=false)
     */
    private $celebration2;

    /**
     * @var string
     *
     * @ORM\Column(name="HAPPY_NAME_DAY", type="text", length=65535, nullable=false)
     */
    private $happyNameDay;

    /**
     * @var integer
     *
     * @ORM\Column(name="THOUGHT_ID", type="bigint", nullable=false)
     */
    private $thoughtId;

    /**
     * @var string
     *
     * @ORM\Column(name="SAINT_TITLE", type="text", length=65535, nullable=false)
     */
    private $saintTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="SAINT_SUBTITLE", type="text", length=65535, nullable=false)
     */
    private $saintSubtitle;

    /**
     * @var boolean
     *
     * @ORM\Column(name="SAINT_OPTIONAL", type="boolean", nullable=false)
     */
    private $saintOptional = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SAINT_TEXT", type="text", length=65535, nullable=false)
     */
    private $saintText;

    /**
     * @var string
     *
     * @ORM\Column(name="SAINT_CREDITS", type="text", length=65535, nullable=false)
     */
    private $saintCredits;

    /**
     * @var string
     *
     * @ORM\Column(name="SAINT_INTERNAL_REF", type="text", length=65535, nullable=false)
     */
    private $saintInternalRef;

    /**
     * @var string
     *
     * @ORM\Column(name="SAINT_PIC", type="text", length=65535, nullable=false)
     */
    private $saintPic;

    /**
     * @var string
     *
     * @ORM\Column(name="SAINT_PIC_CREDITS", type="text", length=65535, nullable=false)
     */
    private $saintPicCredits;

    /**
     * @var string
     *
     * @ORM\Column(name="ORATION", type="text", length=65535, nullable=false)
     */
    private $oration;

    /**
     * @var string
     *
     * @ORM\Column(name="ORATION_SOURCE", type="text", length=65535, nullable=false)
     */
    private $orationSource;

    /**
     * @var string
     *
     * @ORM\Column(name="ORATION_CREDITS", type="text", length=65535, nullable=false)
     */
    private $orationCredits;

    /**
     * @var string
     *
     * @ORM\Column(name="ORATION_INTERNAL_REF", type="text", length=65535, nullable=false)
     */
    private $orationInternalRef;

    /**
     * @var string
     *
     * @ORM\Column(name="READING_TITLE", type="text", length=65535, nullable=false)
     */
    private $readingTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="READING_SUBTITLE", type="text", length=65535, nullable=false)
     */
    private $readingSubtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="READING", type="text", length=65535, nullable=false)
     */
    private $reading;

    /**
     * @var string
     *
     * @ORM\Column(name="READING_SOURCE", type="text", length=65535, nullable=false)
     */
    private $readingSource;

    /**
     * @var string
     *
     * @ORM\Column(name="READING_CREDITS", type="text", length=65535, nullable=false)
     */
    private $readingCredits;

    /**
     * @var string
     *
     * @ORM\Column(name="READING_INTERNAL_REF", type="text", length=65535, nullable=false)
     */
    private $readingInternalRef;

    /**
     * @var string
     *
     * @ORM\Column(name="READING2_TITLE", type="text", length=65535, nullable=false)
     */
    private $reading2Title;

    /**
     * @var string
     *
     * @ORM\Column(name="READING2_SUBTITLE", type="text", length=65535, nullable=false)
     */
    private $reading2Subtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="READING2", type="text", length=65535, nullable=false)
     */
    private $reading2;

    /**
     * @var string
     *
     * @ORM\Column(name="READING2_SOURCE", type="text", length=65535, nullable=false)
     */
    private $reading2Source;

    /**
     * @var string
     *
     * @ORM\Column(name="READING2_CREDITS", type="text", length=65535, nullable=false)
     */
    private $reading2Credits;

    /**
     * @var string
     *
     * @ORM\Column(name="READING2_INTERNAL_REF", type="text", length=65535, nullable=false)
     */
    private $reading2InternalRef;

    /**
     * @var string
     *
     * @ORM\Column(name="PSALM_TITLE", type="text", length=65535, nullable=false)
     */
    private $psalmTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="PSALM_SUBTITLE", type="text", length=65535, nullable=false)
     */
    private $psalmSubtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="PSALM", type="text", length=65535, nullable=false)
     */
    private $psalm;

    /**
     * @var string
     *
     * @ORM\Column(name="PSALM_SOURCE", type="text", length=65535, nullable=false)
     */
    private $psalmSource;

    /**
     * @var string
     *
     * @ORM\Column(name="PSALM_CREDITS", type="text", length=65535, nullable=false)
     */
    private $psalmCredits;

    /**
     * @var string
     *
     * @ORM\Column(name="PSALM_INTERNAL_REF", type="text", length=65535, nullable=false)
     */
    private $psalmInternalRef;

    /**
     * @var string
     *
     * @ORM\Column(name="GOSPEL", type="text", length=65535, nullable=false)
     */
    private $gospel;

    /**
     * @var string
     *
     * @ORM\Column(name="GOSPEL_SOURCE", type="text", length=65535, nullable=false)
     */
    private $gospelSource;

    /**
     * @var string
     *
     * @ORM\Column(name="GOSPEL_CREDITS", type="text", length=65535, nullable=false)
     */
    private $gospelCredits;

    /**
     * @var string
     *
     * @ORM\Column(name="GOSPEL_INTERNAL_REF", type="text", length=65535, nullable=false)
     */
    private $gospelInternalRef;

    /**
     * @var string
     *
     * @ORM\Column(name="GOSPEL_PIC", type="text", length=65535, nullable=false)
     */
    private $gospelPic;

    /**
     * @var string
     *
     * @ORM\Column(name="GOSPEL_PIC_CREDITS", type="text", length=65535, nullable=false)
     */
    private $gospelPicCredits;

    /**
     * @var string
     *
     * @ORM\Column(name="GOSPEL_AUDIO", type="text", length=65535, nullable=false)
     */
    private $gospelAudio;

    /**
     * @var string
     *
     * @ORM\Column(name="GOSPEL_AUDIO_CREDITS", type="text", length=65535, nullable=false)
     */
    private $gospelAudioCredits;

    /**
     * @var string
     *
     * @ORM\Column(name="GOSPELCOMMENTARY", type="text", length=65535, nullable=false)
     */
    private $gospelcommentary;

    /**
     * @var string
     *
     * @ORM\Column(name="GOSPELCOMMENTARY_SOURCE", type="text", length=65535, nullable=false)
     */
    private $gospelcommentarySource;

    /**
     * @var string
     *
     * @ORM\Column(name="GOSPELCOMMENTARY_CREDITS", type="text", length=65535, nullable=false)
     */
    private $gospelcommentaryCredits;

    /**
     * @var string
     *
     * @ORM\Column(name="GOSPELCOMMENTARY_INTERNAL_REF", type="text", length=65535, nullable=false)
     */
    private $gospelcommentaryInternalRef;

    /**
     * @var string
     *
     * @ORM\Column(name="GOSPELCOMMENTARY_AUDIO", type="text", length=65535, nullable=false)
     */
    private $gospelcommentaryAudio;

    /**
     * @var string
     *
     * @ORM\Column(name="GOSPELCOMMENTARY_AUDIO_CREDITS", type="text", length=65535, nullable=false)
     */
    private $gospelcommentaryAudioCredits;

    /**
     * @var integer
     *
     * @ORM\Column(name="GOSPELCOMMENTARY_NUM_LIKES", type="integer", nullable=false)
     */
    private $gospelcommentaryNumLikes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="GOSPELCOMMENTARY_NUM_COMMENTS", type="integer", nullable=false)
     */
    private $gospelcommentaryNumComments = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="THOUGHT_TITLE", type="text", length=65535, nullable=false)
     */
    private $thoughtTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="THOUGHT", type="text", length=65535, nullable=false)
     */
    private $thought;

    /**
     * @var string
     *
     * @ORM\Column(name="THOUGHT_CREDITS", type="text", length=65535, nullable=false)
     */
    private $thoughtCredits;

    /**
     * @var string
     *
     * @ORM\Column(name="THOUGHT_PIC", type="text", length=65535, nullable=false)
     */
    private $thoughtPic;

    /**
     * @var string
     *
     * @ORM\Column(name="THOUGHT_PIC_CREDITS", type="text", length=65535, nullable=false)
     */
    private $thoughtPicCredits;

    /**
     * @var string
     *
     * @ORM\Column(name="THOUGHT_INTERNAL_REF", type="text", length=65535, nullable=false)
     */
    private $thoughtInternalRef;

    /**
     * @var integer
     *
     * @ORM\Column(name="THOUGHT_NUM_LIKES", type="integer", nullable=false)
     */
    private $thoughtNumLikes;

    /**
     * @var integer
     *
     * @ORM\Column(name="THOUGHT_NUM_COMMENTS", type="integer", nullable=false)
     */
    private $thoughtNumComments;



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
     * @return Calendar
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Calendar
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
     * Set liturYear
     *
     * @param string $liturYear
     *
     * @return Calendar
     */
    public function setLiturYear($liturYear)
    {
        $this->liturYear = $liturYear;

        return $this;
    }

    /**
     * Get liturYear
     *
     * @return string
     */
    public function getLiturYear()
    {
        return $this->liturYear;
    }

    /**
     * Set liturDay
     *
     * @param integer $liturDay
     *
     * @return Calendar
     */
    public function setLiturDay($liturDay)
    {
        $this->liturDay = $liturDay;

        return $this;
    }

    /**
     * Get liturDay
     *
     * @return integer
     */
    public function getLiturDay()
    {
        return $this->liturDay;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Calendar
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set colorInfo
     *
     * @param string $colorInfo
     *
     * @return Calendar
     */
    public function setColorInfo($colorInfo)
    {
        $this->colorInfo = $colorInfo;

        return $this;
    }

    /**
     * Get colorInfo
     *
     * @return string
     */
    public function getColorInfo()
    {
        return $this->colorInfo;
    }

    /**
     * Set celebration
     *
     * @param string $celebration
     *
     * @return Calendar
     */
    public function setCelebration($celebration)
    {
        $this->celebration = $celebration;

        return $this;
    }

    /**
     * Get celebration
     *
     * @return string
     */
    public function getCelebration()
    {
        return $this->celebration;
    }

    /**
     * Set celebration2
     *
     * @param string $celebration2
     *
     * @return Calendar
     */
    public function setCelebration2($celebration2)
    {
        $this->celebration2 = $celebration2;

        return $this;
    }

    /**
     * Get celebration2
     *
     * @return string
     */
    public function getCelebration2()
    {
        return $this->celebration2;
    }

    /**
     * Set happyNameDay
     *
     * @param string $happyNameDay
     *
     * @return Calendar
     */
    public function setHappyNameDay($happyNameDay)
    {
        $this->happyNameDay = $happyNameDay;

        return $this;
    }

    /**
     * Get happyNameDay
     *
     * @return string
     */
    public function getHappyNameDay()
    {
        return $this->happyNameDay;
    }

    /**
     * Set thoughtId
     *
     * @param integer $thoughtId
     *
     * @return Calendar
     */
    public function setThoughtId($thoughtId)
    {
        $this->thoughtId = $thoughtId;

        return $this;
    }

    /**
     * Get thoughtId
     *
     * @return integer
     */
    public function getThoughtId()
    {
        return $this->thoughtId;
    }

    /**
     * Set saintTitle
     *
     * @param string $saintTitle
     *
     * @return Calendar
     */
    public function setSaintTitle($saintTitle)
    {
        $this->saintTitle = $saintTitle;

        return $this;
    }

    /**
     * Get saintTitle
     *
     * @return string
     */
    public function getSaintTitle()
    {
        return $this->saintTitle;
    }

    /**
     * Set saintSubtitle
     *
     * @param string $saintSubtitle
     *
     * @return Calendar
     */
    public function setSaintSubtitle($saintSubtitle)
    {
        $this->saintSubtitle = $saintSubtitle;

        return $this;
    }

    /**
     * Get saintSubtitle
     *
     * @return string
     */
    public function getSaintSubtitle()
    {
        return $this->saintSubtitle;
    }

    /**
     * Set saintOptional
     *
     * @param boolean $saintOptional
     *
     * @return Calendar
     */
    public function setSaintOptional($saintOptional)
    {
        $this->saintOptional = $saintOptional;

        return $this;
    }

    /**
     * Get saintOptional
     *
     * @return boolean
     */
    public function getSaintOptional()
    {
        return $this->saintOptional;
    }

    /**
     * Set saintText
     *
     * @param string $saintText
     *
     * @return Calendar
     */
    public function setSaintText($saintText)
    {
        $this->saintText = $saintText;

        return $this;
    }

    /**
     * Get saintText
     *
     * @return string
     */
    public function getSaintText()
    {
        return $this->saintText;
    }

    /**
     * Set saintCredits
     *
     * @param string $saintCredits
     *
     * @return Calendar
     */
    public function setSaintCredits($saintCredits)
    {
        $this->saintCredits = $saintCredits;

        return $this;
    }

    /**
     * Get saintCredits
     *
     * @return string
     */
    public function getSaintCredits()
    {
        return $this->saintCredits;
    }

    /**
     * Set saintInternalRef
     *
     * @param string $saintInternalRef
     *
     * @return Calendar
     */
    public function setSaintInternalRef($saintInternalRef)
    {
        $this->saintInternalRef = $saintInternalRef;

        return $this;
    }

    /**
     * Get saintInternalRef
     *
     * @return string
     */
    public function getSaintInternalRef()
    {
        return $this->saintInternalRef;
    }

    /**
     * Set saintPic
     *
     * @param string $saintPic
     *
     * @return Calendar
     */
    public function setSaintPic($saintPic)
    {
        $this->saintPic = $saintPic;

        return $this;
    }

    /**
     * Get saintPic
     *
     * @return string
     */
    public function getSaintPic()
    {
        return $this->saintPic;
    }

    /**
     * Set saintPicCredits
     *
     * @param string $saintPicCredits
     *
     * @return Calendar
     */
    public function setSaintPicCredits($saintPicCredits)
    {
        $this->saintPicCredits = $saintPicCredits;

        return $this;
    }

    /**
     * Get saintPicCredits
     *
     * @return string
     */
    public function getSaintPicCredits()
    {
        return $this->saintPicCredits;
    }

    /**
     * Set oration
     *
     * @param string $oration
     *
     * @return Calendar
     */
    public function setOration($oration)
    {
        $this->oration = $oration;

        return $this;
    }

    /**
     * Get oration
     *
     * @return string
     */
    public function getOration()
    {
        return $this->oration;
    }

    /**
     * Set orationSource
     *
     * @param string $orationSource
     *
     * @return Calendar
     */
    public function setOrationSource($orationSource)
    {
        $this->orationSource = $orationSource;

        return $this;
    }

    /**
     * Get orationSource
     *
     * @return string
     */
    public function getOrationSource()
    {
        return $this->orationSource;
    }

    /**
     * Set orationCredits
     *
     * @param string $orationCredits
     *
     * @return Calendar
     */
    public function setOrationCredits($orationCredits)
    {
        $this->orationCredits = $orationCredits;

        return $this;
    }

    /**
     * Get orationCredits
     *
     * @return string
     */
    public function getOrationCredits()
    {
        return $this->orationCredits;
    }

    /**
     * Set orationInternalRef
     *
     * @param string $orationInternalRef
     *
     * @return Calendar
     */
    public function setOrationInternalRef($orationInternalRef)
    {
        $this->orationInternalRef = $orationInternalRef;

        return $this;
    }

    /**
     * Get orationInternalRef
     *
     * @return string
     */
    public function getOrationInternalRef()
    {
        return $this->orationInternalRef;
    }

    /**
     * Set readingTitle
     *
     * @param string $readingTitle
     *
     * @return Calendar
     */
    public function setReadingTitle($readingTitle)
    {
        $this->readingTitle = $readingTitle;

        return $this;
    }

    /**
     * Get readingTitle
     *
     * @return string
     */
    public function getReadingTitle()
    {
        return $this->readingTitle;
    }

    /**
     * Set readingSubtitle
     *
     * @param string $readingSubtitle
     *
     * @return Calendar
     */
    public function setReadingSubtitle($readingSubtitle)
    {
        $this->readingSubtitle = $readingSubtitle;

        return $this;
    }

    /**
     * Get readingSubtitle
     *
     * @return string
     */
    public function getReadingSubtitle()
    {
        return $this->readingSubtitle;
    }

    /**
     * Set reading
     *
     * @param string $reading
     *
     * @return Calendar
     */
    public function setReading($reading)
    {
        $this->reading = $reading;

        return $this;
    }

    /**
     * Get reading
     *
     * @return string
     */
    public function getReading()
    {
        return $this->reading;
    }

    /**
     * Set readingSource
     *
     * @param string $readingSource
     *
     * @return Calendar
     */
    public function setReadingSource($readingSource)
    {
        $this->readingSource = $readingSource;

        return $this;
    }

    /**
     * Get readingSource
     *
     * @return string
     */
    public function getReadingSource()
    {
        return $this->readingSource;
    }

    /**
     * Set readingCredits
     *
     * @param string $readingCredits
     *
     * @return Calendar
     */
    public function setReadingCredits($readingCredits)
    {
        $this->readingCredits = $readingCredits;

        return $this;
    }

    /**
     * Get readingCredits
     *
     * @return string
     */
    public function getReadingCredits()
    {
        return $this->readingCredits;
    }

    /**
     * Set readingInternalRef
     *
     * @param string $readingInternalRef
     *
     * @return Calendar
     */
    public function setReadingInternalRef($readingInternalRef)
    {
        $this->readingInternalRef = $readingInternalRef;

        return $this;
    }

    /**
     * Get readingInternalRef
     *
     * @return string
     */
    public function getReadingInternalRef()
    {
        return $this->readingInternalRef;
    }

    /**
     * Set reading2Title
     *
     * @param string $reading2Title
     *
     * @return Calendar
     */
    public function setReading2Title($reading2Title)
    {
        $this->reading2Title = $reading2Title;

        return $this;
    }

    /**
     * Get reading2Title
     *
     * @return string
     */
    public function getReading2Title()
    {
        return $this->reading2Title;
    }

    /**
     * Set reading2Subtitle
     *
     * @param string $reading2Subtitle
     *
     * @return Calendar
     */
    public function setReading2Subtitle($reading2Subtitle)
    {
        $this->reading2Subtitle = $reading2Subtitle;

        return $this;
    }

    /**
     * Get reading2Subtitle
     *
     * @return string
     */
    public function getReading2Subtitle()
    {
        return $this->reading2Subtitle;
    }

    /**
     * Set reading2
     *
     * @param string $reading2
     *
     * @return Calendar
     */
    public function setReading2($reading2)
    {
        $this->reading2 = $reading2;

        return $this;
    }

    /**
     * Get reading2
     *
     * @return string
     */
    public function getReading2()
    {
        return $this->reading2;
    }

    /**
     * Set reading2Source
     *
     * @param string $reading2Source
     *
     * @return Calendar
     */
    public function setReading2Source($reading2Source)
    {
        $this->reading2Source = $reading2Source;

        return $this;
    }

    /**
     * Get reading2Source
     *
     * @return string
     */
    public function getReading2Source()
    {
        return $this->reading2Source;
    }

    /**
     * Set reading2Credits
     *
     * @param string $reading2Credits
     *
     * @return Calendar
     */
    public function setReading2Credits($reading2Credits)
    {
        $this->reading2Credits = $reading2Credits;

        return $this;
    }

    /**
     * Get reading2Credits
     *
     * @return string
     */
    public function getReading2Credits()
    {
        return $this->reading2Credits;
    }

    /**
     * Set reading2InternalRef
     *
     * @param string $reading2InternalRef
     *
     * @return Calendar
     */
    public function setReading2InternalRef($reading2InternalRef)
    {
        $this->reading2InternalRef = $reading2InternalRef;

        return $this;
    }

    /**
     * Get reading2InternalRef
     *
     * @return string
     */
    public function getReading2InternalRef()
    {
        return $this->reading2InternalRef;
    }

    /**
     * Set psalmTitle
     *
     * @param string $psalmTitle
     *
     * @return Calendar
     */
    public function setPsalmTitle($psalmTitle)
    {
        $this->psalmTitle = $psalmTitle;

        return $this;
    }

    /**
     * Get psalmTitle
     *
     * @return string
     */
    public function getPsalmTitle()
    {
        return $this->psalmTitle;
    }

    /**
     * Set psalmSubtitle
     *
     * @param string $psalmSubtitle
     *
     * @return Calendar
     */
    public function setPsalmSubtitle($psalmSubtitle)
    {
        $this->psalmSubtitle = $psalmSubtitle;

        return $this;
    }

    /**
     * Get psalmSubtitle
     *
     * @return string
     */
    public function getPsalmSubtitle()
    {
        return $this->psalmSubtitle;
    }

    /**
     * Set psalm
     *
     * @param string $psalm
     *
     * @return Calendar
     */
    public function setPsalm($psalm)
    {
        $this->psalm = $psalm;

        return $this;
    }

    /**
     * Get psalm
     *
     * @return string
     */
    public function getPsalm()
    {
        return $this->psalm;
    }

    /**
     * Set psalmSource
     *
     * @param string $psalmSource
     *
     * @return Calendar
     */
    public function setPsalmSource($psalmSource)
    {
        $this->psalmSource = $psalmSource;

        return $this;
    }

    /**
     * Get psalmSource
     *
     * @return string
     */
    public function getPsalmSource()
    {
        return $this->psalmSource;
    }

    /**
     * Set psalmCredits
     *
     * @param string $psalmCredits
     *
     * @return Calendar
     */
    public function setPsalmCredits($psalmCredits)
    {
        $this->psalmCredits = $psalmCredits;

        return $this;
    }

    /**
     * Get psalmCredits
     *
     * @return string
     */
    public function getPsalmCredits()
    {
        return $this->psalmCredits;
    }

    /**
     * Set psalmInternalRef
     *
     * @param string $psalmInternalRef
     *
     * @return Calendar
     */
    public function setPsalmInternalRef($psalmInternalRef)
    {
        $this->psalmInternalRef = $psalmInternalRef;

        return $this;
    }

    /**
     * Get psalmInternalRef
     *
     * @return string
     */
    public function getPsalmInternalRef()
    {
        return $this->psalmInternalRef;
    }

    /**
     * Set gospel
     *
     * @param string $gospel
     *
     * @return Calendar
     */
    public function setGospel($gospel)
    {
        $this->gospel = $gospel;

        return $this;
    }

    /**
     * Get gospel
     *
     * @return string
     */
    public function getGospel()
    {
        return $this->gospel;
    }

    /**
     * Set gospelSource
     *
     * @param string $gospelSource
     *
     * @return Calendar
     */
    public function setGospelSource($gospelSource)
    {
        $this->gospelSource = $gospelSource;

        return $this;
    }

    /**
     * Get gospelSource
     *
     * @return string
     */
    public function getGospelSource()
    {
        return $this->gospelSource;
    }

    /**
     * Set gospelCredits
     *
     * @param string $gospelCredits
     *
     * @return Calendar
     */
    public function setGospelCredits($gospelCredits)
    {
        $this->gospelCredits = $gospelCredits;

        return $this;
    }

    /**
     * Get gospelCredits
     *
     * @return string
     */
    public function getGospelCredits()
    {
        return $this->gospelCredits;
    }

    /**
     * Set gospelInternalRef
     *
     * @param string $gospelInternalRef
     *
     * @return Calendar
     */
    public function setGospelInternalRef($gospelInternalRef)
    {
        $this->gospelInternalRef = $gospelInternalRef;

        return $this;
    }

    /**
     * Get gospelInternalRef
     *
     * @return string
     */
    public function getGospelInternalRef()
    {
        return $this->gospelInternalRef;
    }

    /**
     * Set gospelPic
     *
     * @param string $gospelPic
     *
     * @return Calendar
     */
    public function setGospelPic($gospelPic)
    {
        $this->gospelPic = $gospelPic;

        return $this;
    }

    /**
     * Get gospelPic
     *
     * @return string
     */
    public function getGospelPic()
    {
        return $this->gospelPic;
    }

    /**
     * Set gospelPicCredits
     *
     * @param string $gospelPicCredits
     *
     * @return Calendar
     */
    public function setGospelPicCredits($gospelPicCredits)
    {
        $this->gospelPicCredits = $gospelPicCredits;

        return $this;
    }

    /**
     * Get gospelPicCredits
     *
     * @return string
     */
    public function getGospelPicCredits()
    {
        return $this->gospelPicCredits;
    }

    /**
     * Set gospelAudio
     *
     * @param string $gospelAudio
     *
     * @return Calendar
     */
    public function setGospelAudio($gospelAudio)
    {
        $this->gospelAudio = $gospelAudio;

        return $this;
    }

    /**
     * Get gospelAudio
     *
     * @return string
     */
    public function getGospelAudio()
    {
        return $this->gospelAudio;
    }

    /**
     * Set gospelAudioCredits
     *
     * @param string $gospelAudioCredits
     *
     * @return Calendar
     */
    public function setGospelAudioCredits($gospelAudioCredits)
    {
        $this->gospelAudioCredits = $gospelAudioCredits;

        return $this;
    }

    /**
     * Get gospelAudioCredits
     *
     * @return string
     */
    public function getGospelAudioCredits()
    {
        return $this->gospelAudioCredits;
    }

    /**
     * Set gospelcommentary
     *
     * @param string $gospelcommentary
     *
     * @return Calendar
     */
    public function setGospelcommentary($gospelcommentary)
    {
        $this->gospelcommentary = $gospelcommentary;

        return $this;
    }

    /**
     * Get gospelcommentary
     *
     * @return string
     */
    public function getGospelcommentary()
    {
        return $this->gospelcommentary;
    }

    /**
     * Set gospelcommentarySource
     *
     * @param string $gospelcommentarySource
     *
     * @return Calendar
     */
    public function setGospelcommentarySource($gospelcommentarySource)
    {
        $this->gospelcommentarySource = $gospelcommentarySource;

        return $this;
    }

    /**
     * Get gospelcommentarySource
     *
     * @return string
     */
    public function getGospelcommentarySource()
    {
        return $this->gospelcommentarySource;
    }

    /**
     * Set gospelcommentaryCredits
     *
     * @param string $gospelcommentaryCredits
     *
     * @return Calendar
     */
    public function setGospelcommentaryCredits($gospelcommentaryCredits)
    {
        $this->gospelcommentaryCredits = $gospelcommentaryCredits;

        return $this;
    }

    /**
     * Get gospelcommentaryCredits
     *
     * @return string
     */
    public function getGospelcommentaryCredits()
    {
        return $this->gospelcommentaryCredits;
    }

    /**
     * Set gospelcommentaryInternalRef
     *
     * @param string $gospelcommentaryInternalRef
     *
     * @return Calendar
     */
    public function setGospelcommentaryInternalRef($gospelcommentaryInternalRef)
    {
        $this->gospelcommentaryInternalRef = $gospelcommentaryInternalRef;

        return $this;
    }

    /**
     * Get gospelcommentaryInternalRef
     *
     * @return string
     */
    public function getGospelcommentaryInternalRef()
    {
        return $this->gospelcommentaryInternalRef;
    }

    /**
     * Set gospelcommentaryAudio
     *
     * @param string $gospelcommentaryAudio
     *
     * @return Calendar
     */
    public function setGospelcommentaryAudio($gospelcommentaryAudio)
    {
        $this->gospelcommentaryAudio = $gospelcommentaryAudio;

        return $this;
    }

    /**
     * Get gospelcommentaryAudio
     *
     * @return string
     */
    public function getGospelcommentaryAudio()
    {
        return $this->gospelcommentaryAudio;
    }

    /**
     * Set gospelcommentaryAudioCredits
     *
     * @param string $gospelcommentaryAudioCredits
     *
     * @return Calendar
     */
    public function setGospelcommentaryAudioCredits($gospelcommentaryAudioCredits)
    {
        $this->gospelcommentaryAudioCredits = $gospelcommentaryAudioCredits;

        return $this;
    }

    /**
     * Get gospelcommentaryAudioCredits
     *
     * @return string
     */
    public function getGospelcommentaryAudioCredits()
    {
        return $this->gospelcommentaryAudioCredits;
    }

    /**
     * Set gospelcommentaryNumLikes
     *
     * @param integer $gospelcommentaryNumLikes
     *
     * @return Calendar
     */
    public function setGospelcommentaryNumLikes($gospelcommentaryNumLikes)
    {
        $this->gospelcommentaryNumLikes = $gospelcommentaryNumLikes;

        return $this;
    }

    /**
     * Get gospelcommentaryNumLikes
     *
     * @return integer
     */
    public function getGospelcommentaryNumLikes()
    {
        return $this->gospelcommentaryNumLikes;
    }

    /**
     * Set gospelcommentaryNumComments
     *
     * @param integer $gospelcommentaryNumComments
     *
     * @return Calendar
     */
    public function setGospelcommentaryNumComments($gospelcommentaryNumComments)
    {
        $this->gospelcommentaryNumComments = $gospelcommentaryNumComments;

        return $this;
    }

    /**
     * Get gospelcommentaryNumComments
     *
     * @return integer
     */
    public function getGospelcommentaryNumComments()
    {
        return $this->gospelcommentaryNumComments;
    }

    /**
     * Set thoughtTitle
     *
     * @param string $thoughtTitle
     *
     * @return Calendar
     */
    public function setThoughtTitle($thoughtTitle)
    {
        $this->thoughtTitle = $thoughtTitle;

        return $this;
    }

    /**
     * Get thoughtTitle
     *
     * @return string
     */
    public function getThoughtTitle()
    {
        return $this->thoughtTitle;
    }

    /**
     * Set thought
     *
     * @param string $thought
     *
     * @return Calendar
     */
    public function setThought($thought)
    {
        $this->thought = $thought;

        return $this;
    }

    /**
     * Get thought
     *
     * @return string
     */
    public function getThought()
    {
        return $this->thought;
    }

    /**
     * Set thoughtCredits
     *
     * @param string $thoughtCredits
     *
     * @return Calendar
     */
    public function setThoughtCredits($thoughtCredits)
    {
        $this->thoughtCredits = $thoughtCredits;

        return $this;
    }

    /**
     * Get thoughtCredits
     *
     * @return string
     */
    public function getThoughtCredits()
    {
        return $this->thoughtCredits;
    }

    /**
     * Set thoughtPic
     *
     * @param string $thoughtPic
     *
     * @return Calendar
     */
    public function setThoughtPic($thoughtPic)
    {
        $this->thoughtPic = $thoughtPic;

        return $this;
    }

    /**
     * Get thoughtPic
     *
     * @return string
     */
    public function getThoughtPic()
    {
        return $this->thoughtPic;
    }

    /**
     * Set thoughtPicCredits
     *
     * @param string $thoughtPicCredits
     *
     * @return Calendar
     */
    public function setThoughtPicCredits($thoughtPicCredits)
    {
        $this->thoughtPicCredits = $thoughtPicCredits;

        return $this;
    }

    /**
     * Get thoughtPicCredits
     *
     * @return string
     */
    public function getThoughtPicCredits()
    {
        return $this->thoughtPicCredits;
    }

    /**
     * Set thoughtInternalRef
     *
     * @param string $thoughtInternalRef
     *
     * @return Calendar
     */
    public function setThoughtInternalRef($thoughtInternalRef)
    {
        $this->thoughtInternalRef = $thoughtInternalRef;

        return $this;
    }

    /**
     * Get thoughtInternalRef
     *
     * @return string
     */
    public function getThoughtInternalRef()
    {
        return $this->thoughtInternalRef;
    }

    /**
     * Set thoughtNumLikes
     *
     * @param integer $thoughtNumLikes
     *
     * @return Calendar
     */
    public function setThoughtNumLikes($thoughtNumLikes)
    {
        $this->thoughtNumLikes = $thoughtNumLikes;

        return $this;
    }

    /**
     * Get thoughtNumLikes
     *
     * @return integer
     */
    public function getThoughtNumLikes()
    {
        return $this->thoughtNumLikes;
    }

    /**
     * Set thoughtNumComments
     *
     * @param integer $thoughtNumComments
     *
     * @return Calendar
     */
    public function setThoughtNumComments($thoughtNumComments)
    {
        $this->thoughtNumComments = $thoughtNumComments;

        return $this;
    }

    /**
     * Get thoughtNumComments
     *
     * @return integer
     */
    public function getThoughtNumComments()
    {
        return $this->thoughtNumComments;
    }
}
