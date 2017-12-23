<?php

namespace CarpeDeumBundle\Entity;

interface GeolocalizableInterface
{
    /**
     * @param GeolocalizableInterface $geolocalizable
     *
     * @return float
     */
    public function calculateDistance(self $geolocalizable);

    /**
     * @return array
     */
    public function getPosition();

    /**
     * @return float
     */
    public function getLongitude();

    /**
     * @return float
     */
    public function getLatitude();

    /**
     * @return string
     */
    public function getGeoPoint();
}
