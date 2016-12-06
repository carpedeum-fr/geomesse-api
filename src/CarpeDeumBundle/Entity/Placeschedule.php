<?php

namespace CarpeDeumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Placeschedule
 *
 * @ORM\Table(name="PLACESCHEDULE", indexes={@ORM\Index(name="PLACE_ID", columns={"PLACE_ID"})})
 * @ORM\Entity
 */
class Placeschedule
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="PLACE_ID", type="bigint", nullable=false, options={"unsigned"=true})
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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getPlaceId()
    {
        return $this->placeId;
    }

    /**
     * @param int $placeId
     */
    public function setPlaceId($placeId)
    {
        $this->placeId = $placeId;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param string $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    /**
     * @return string
     */
    public function getDayofweek()
    {
        return $this->dayofweek;
    }

    /**
     * @param string $dayofweek
     */
    public function setDayofweek($dayofweek)
    {
        $this->dayofweek = $dayofweek;
    }

    /**
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param \DateTime $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }
}
