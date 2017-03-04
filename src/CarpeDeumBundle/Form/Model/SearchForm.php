<?php

namespace CarpeDeumBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;

class SearchForm
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     */
    private $location;

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }
}
