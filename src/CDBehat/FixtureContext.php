<?php

namespace CDBehat;

use CarpeDeumBundle\Entity\Place;
use CDBehat\Sylius\FixtureContext as DefaultFixtureContext;

class FixtureContext extends DefaultFixtureContext
{
    protected $applicationName = 'cd';

    /**
     * @Given there are a bunch of places
     */
    public function thereAreABunchOfPlaces()
    {
        $factory = $this->getFactory('place');
        $em = $this->getEntityManager();
        $nb = 100;
        $now = new \DateTime();

        /** @var Place $place */
        $place = $factory->createNew();
        $place->setCreatedAt($now);
        $place->setUpdatedAt($now);
        $place->setName('My test church');
        $place->setAddress1('High Street 1st');
        $place->setZipCode('100001');
        $place->setCity('New York');
        $place->setCountry('USA');
        $place->setLongitude($this->faker->longitude);
        $place->setLatitude($this->faker->latitude);

        $em->persist($place);

        for ($i = 0; $i < $nb; $i++) {
            /** @var Place $place */
            $place = $factory->createNew();
            $place->setCreatedAt($now);
            $place->setUpdatedAt($now);
            $place->setName($this->faker->name);
            $place->setAddress1($this->faker->address);
            $place->setZipCode($this->faker->postcode);
            $place->setCity($this->faker->city);
            $place->setCountry($this->faker->country);
            $place->setLongitude($this->faker->longitude);
            $place->setLatitude($this->faker->latitude);

            $em->persist($place);
        }

        $em->flush();
    }

    protected function getFactory($resourceName)
    {
        if ($this->getContainer()->has($this->applicationName.'.factory.'.$resourceName)) {
            return $this->getService($this->applicationName.'.factory.'.$resourceName);
        }

        return $this->getService('sylius.factory.'.$resourceName);
    }
}
