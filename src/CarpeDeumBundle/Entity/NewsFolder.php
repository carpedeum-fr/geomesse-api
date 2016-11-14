<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsFolder
 *
 * @ORM\Table(name="NEWSFOLDERS", indexes={@ORM\Index(name="LANG", columns={"LANG", "ONHOME"})})
 * @ORM\Entity
 */
class NewsFolder
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
     * @ORM\Column(name="ONHOME", type="boolean", nullable=false)
     */
    private $onhome;

    /**
     * @var string
     *
     * @ORM\Column(name="TITLE", type="text", length=65535, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="IMAGE", type="string", length=50, nullable=false)
     */
    private $image;



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
     * @return NewsFolder
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
     * Set onhome
     *
     * @param boolean $onhome
     *
     * @return NewsFolder
     */
    public function setOnhome($onhome)
    {
        $this->onhome = $onhome;

        return $this;
    }

    /**
     * Get onhome
     *
     * @return boolean
     */
    public function getOnhome()
    {
        return $this->onhome;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return NewsFolder
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
     * Set image
     *
     * @param string $image
     *
     * @return NewsFolder
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
}
