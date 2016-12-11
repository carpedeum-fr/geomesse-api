<?php

namespace CarpeDeumBundle\Entity\Traits;

use CarpeDeumBundle\Entity\GeolocalizableInterface;
use CarpeDeumBundle\Validator\Json;

trait GeolocalizableTrait
{

    /**
     * @var float $longitude
     *
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;

    /**
     * @var float $latitude
     *
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="geo_point", type="pointjson")
     *
     * @Json()
     */
    private $geoPoint = '{}';

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updateGeoPoint()
    {
        $this->geoPoint = '{ "type": "Point", "coordinates": ['.$this->longitude.', '.$this->latitude.'] }';
    }


    public function calculateDistance(GeolocalizableInterface $geolocalizable)
    {
        // We approximate that Earth is flat, sorry Galileo!
        return round(sqrt(pow($geolocalizable->getLatitude() - $this->getLatitude(), 2) + pow($geolocalizable->getLongitude() - $this->getLongitude(), 2)) * 111, 1);
    }

    /**
     * @return array
     */
    public function getPosition()
    {
        return array(
            $this->getLongitude(),
            $this->getLatitude(),
        );
    }

    /**
     * @param float $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param string $geoPoint
     */
    public function setGeoPoint($geoPoint)
    {
        $this->geoPoint = $geoPoint;
    }

    /**
     * @return string
     */
    public function getGeoPoint()
    {
        return $this->geoPoint;
    }
}
