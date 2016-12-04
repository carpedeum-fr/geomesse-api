<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarpeBlog
 *
 * @ORM\Table(name="CARPEBLOG", indexes={@ORM\Index(name="FOLDER_ID", columns={"DRAFT", "DATE"}), @ORM\Index(name="HOME", columns={"LANG", "DRAFT", "DATE"})})
 * @ORM\Entity
 */
class CarpeBlog
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
     * @var boolean
     *
     * @ORM\Column(name="DRAFT", type="boolean", nullable=false)
     */
    private $draft = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE", type="datetime", nullable=false)
     */
    private $date = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="PRETITLE", type="text", length=65535, nullable=false)
     */
    private $pretitle;

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
     * @ORM\Column(name="HTML", type="text", length=65535, nullable=false)
     */
    private $html;

    /**
     * @var string
     *
     * @ORM\Column(name="IMAGE", type="string", length=50, nullable=false)
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
     * @ORM\Column(name="IMAGES", type="text", length=65535, nullable=false)
     */
    private $images;

    /**
     * @var string
     *
     * @ORM\Column(name="VIDEO", type="string", length=100, nullable=false)
     */
    private $video;

    /**
     * @var string
     *
     * @ORM\Column(name="BYLINE", type="text", length=65535, nullable=false)
     */
    private $byline;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUM_COMMENTS", type="bigint", nullable=false)
     */
    private $numComments = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NUM_LIKES", type="bigint", nullable=false)
     */
    private $numLikes = '0';



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
     * @return CarpeBlog
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
     * Set draft
     *
     * @param boolean $draft
     *
     * @return CarpeBlog
     */
    public function setDraft($draft)
    {
        $this->draft = $draft;

        return $this;
    }

    /**
     * Get draft
     *
     * @return boolean
     */
    public function getDraft()
    {
        return $this->draft;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return CarpeBlog
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
     * Set pretitle
     *
     * @param string $pretitle
     *
     * @return CarpeBlog
     */
    public function setPretitle($pretitle)
    {
        $this->pretitle = $pretitle;

        return $this;
    }

    /**
     * Get pretitle
     *
     * @return string
     */
    public function getPretitle()
    {
        return $this->pretitle;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return CarpeBlog
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
     * @return CarpeBlog
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
     * @return CarpeBlog
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
     * Set html
     *
     * @param string $html
     *
     * @return CarpeBlog
     */
    public function setHtml($html)
    {
        $this->html = $html;

        return $this;
    }

    /**
     * Get html
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return CarpeBlog
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
     * @return CarpeBlog
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
     * Set images
     *
     * @param string $images
     *
     * @return CarpeBlog
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return string
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set video
     *
     * @param string $video
     *
     * @return CarpeBlog
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set byline
     *
     * @param string $byline
     *
     * @return CarpeBlog
     */
    public function setByline($byline)
    {
        $this->byline = $byline;

        return $this;
    }

    /**
     * Get byline
     *
     * @return string
     */
    public function getByline()
    {
        return $this->byline;
    }

    /**
     * Set numComments
     *
     * @param integer $numComments
     *
     * @return CarpeBlog
     */
    public function setNumComments($numComments)
    {
        $this->numComments = $numComments;

        return $this;
    }

    /**
     * Get numComments
     *
     * @return integer
     */
    public function getNumComments()
    {
        return $this->numComments;
    }

    /**
     * Set numLikes
     *
     * @param integer $numLikes
     *
     * @return CarpeBlog
     */
    public function setNumLikes($numLikes)
    {
        $this->numLikes = $numLikes;

        return $this;
    }

    /**
     * Get numLikes
     *
     * @return integer
     */
    public function getNumLikes()
    {
        return $this->numLikes;
    }
}
