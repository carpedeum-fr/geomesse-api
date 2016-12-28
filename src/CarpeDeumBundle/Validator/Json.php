<?php

namespace CarpeDeumBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Json extends Constraint
{
    public $message = "This field must be a valid JSON string.";

    public function validatedBy()
    {
        return 'common_json';
    }
}
