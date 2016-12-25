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

        for ($i=0; $i<$nb; $i++) {
            /** @var Place $place */
            $place = $factory->createNew();
            $place->setName($this->faker->name);
            $place->setAddress1($this->faker->address);
            $place->setZipCode($this->faker->postcode);
            $place->setCity($this->faker->city);
            $place->setCountry($this->faker->country);

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
