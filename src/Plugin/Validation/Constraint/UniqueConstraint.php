<?php

namespace Drupal\ejercicio_kdb\Plugin\Validation\Constraint;
use Symfony\Component\Validator\Constraint;

/**
* @Constraint(
*   id = "Unique",
*   label = @Translation("Unique", context = "Validation"),
*   type = "entity:entity_name"
* )
*/

class UniqueConstraint extends Constraint {
    public $message= 'This entity exists already.';
}
