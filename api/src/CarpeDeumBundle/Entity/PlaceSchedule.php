<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlaceSchedule
 *
 * @ORM\Table(name="PLACESCHEDULE", indexes={@ORM\Index(name="PLACE_ID", columns={"PLACE_ID"})})
 * @ORM\Entity
 */
class PlaceSchedule
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
     * @var integer
     *
     * @ORM\Column(name="PLACE_ID", type="bigint", nullable=false)
     */
    private $placeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KIND", type="string", nullable=false)
     */
    private $kind = 'WEEKDAY';

    /**
     * @var string
     *
     * @ORM\Column(name="DAYOFWEEK", type="string", nullable=false)
     */
    private $dayofweek;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TIME", type="time", nullable=false)
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="text", length=65535, nullable=false)
     */
    private $notes;



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
     * Set placeId
     *
     * @param integer $placeId
     *
     * @return PlaceSchedule
     */
    public function setPlaceId($placeId)
    {
        $this->placeId = $placeId;

        return $this;
    }

    /**
     * Get placeId
     *
     * @return integer
     */
    public function getPlaceId()
    {
        return $this->placeId;
    }

    /**
     * Set kind
     *
     * @param string $kind
     *
     * @return PlaceSchedule
     */
    public function setKind($kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Get kind
     *
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Set dayofweek
     *
     * @param string $dayofweek
     *
     * @return PlaceSchedule
     */
    public function setDayofweek($dayofweek)
    {
        $this->dayofweek = $dayofweek;

        return $this;
    }

    /**
     * Get dayofweek
     *
     * @return string
     */
    public function getDayofweek()
    {
        return $this->dayofweek;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     *
     * @return PlaceSchedule
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return PlaceSchedule
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
