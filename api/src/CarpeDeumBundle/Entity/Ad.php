<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ad
 *
 * @ORM\Table(name="ADS")
 * @ORM\Entity
 */
class Ad
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
     * @ORM\Column(name="ACCESSKEY", type="string", length=50, nullable=false)
     */
    private $accesskey;

    /**
     * @var string
     *
     * @ORM\Column(name="TITLE", type="text", length=65535, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="URL", type="text", length=65535, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="IMAGE", type="text", length=65535, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="IMAGE_HD", type="text", length=65535, nullable=false)
     */
    private $imageHd;

    /**
     * @var integer
     *
     * @ORM\Column(name="IMAGE_WIDTH", type="integer", nullable=false)
     */
    private $imageWidth = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IMAGE_HEIGHT", type="integer", nullable=false)
     */
    private $imageHeight = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="BACKGROUND", type="text", length=65535, nullable=false)
     */
    private $background;

    /**
     * @var string
     *
     * @ORM\Column(name="BACKGROUND_HD", type="text", length=65535, nullable=false)
     */
    private $backgroundHd;



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
     * Set accesskey
     *
     * @param string $accesskey
     *
     * @return Ad
     */
    public function setAccesskey($accesskey)
    {
        $this->accesskey = $accesskey;

        return $this;
    }

    /**
     * Get accesskey
     *
     * @return string
     */
    public function getAccesskey()
    {
        return $this->accesskey;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Ad
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
     * Set url
     *
     * @param string $url
     *
     * @return Ad
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Ad
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
     * Set imageHd
     *
     * @param string $imageHd
     *
     * @return Ad
     */
    public function setImageHd($imageHd)
    {
        $this->imageHd = $imageHd;

        return $this;
    }

    /**
     * Get imageHd
     *
     * @return string
     */
    public function getImageHd()
    {
        return $this->imageHd;
    }

    /**
     * Set imageWidth
     *
     * @param integer $imageWidth
     *
     * @return Ad
     */
    public function setImageWidth($imageWidth)
    {
        $this->imageWidth = $imageWidth;

        return $this;
    }

    /**
     * Get imageWidth
     *
     * @return integer
     */
    public function getImageWidth()
    {
        return $this->imageWidth;
    }

    /**
     * Set imageHeight
     *
     * @param integer $imageHeight
     *
     * @return Ad
     */
    public function setImageHeight($imageHeight)
    {
        $this->imageHeight = $imageHeight;

        return $this;
    }

    /**
     * Get imageHeight
     *
     * @return integer
     */
    public function getImageHeight()
    {
        return $this->imageHeight;
    }

    /**
     * Set background
     *
     * @param string $background
     *
     * @return Ad
     */
    public function setBackground($background)
    {
        $this->background = $background;

        return $this;
    }

    /**
     * Get background
     *
     * @return string
     */
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * Set backgroundHd
     *
     * @param string $backgroundHd
     *
     * @return Ad
     */
    public function setBackgroundHd($backgroundHd)
    {
        $this->backgroundHd = $backgroundHd;

        return $this;
    }

    /**
     * Get backgroundHd
     *
     * @return string
     */
    public function getBackgroundHd()
    {
        return $this->backgroundHd;
    }
}
