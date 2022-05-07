<?php

namespace Drupal\ejercicio_kdb\Plugin\Validation\Constraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class UniqueConstraintValidator extends ConstraintValidator {
    /**
    * {@inheritdoc}
    */
    public function validate($entity, Constraint $constraint) {
        $entity_type_id = $entity->getEntityTypeId();
        $entity_id = $entity->id();
        $query = \Drupal::entityQuery($entity_type_id)
            ->condition('dato_1', $entity->dato_1->value)
            ->condition('dato_2', $entity->dato_2->value)
            ->range(0, 1)
            ->count();
        if ($entity_id != NULL) {
            $query->condition('id', $entity_id, "!=");
        }
        $value_taken = $query->execute();
        if ($value_taken) {
            $this->context->addViolation($constraint->message);
        }
    }
}