<?php

namespace Drupal\ejercicio_kdb\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Ejemplo kdb entities.
 */
class EjemploKdbViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.
    return $data;
  }

}
