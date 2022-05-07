<?php

namespace Drupal\ejercicio_kdb\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityPublishedInterface;

/**
 * Provides an interface for defining Ejemplo kdb entities.
 *
 * @ingroup ejercicio_kdb
 */
interface EjemploKdbInterface extends ContentEntityInterface, EntityChangedInterface, EntityPublishedInterface {

  /**
   * Add get/set methods for your configuration properties here.
   */

  /**
   * Gets the Ejemplo kdb label.
   *
   * @return string
   *   Label return.
   */
  public function getLabel();

  /**
   * Sets the Ejemplo kdb name.
   *
   * @param string $label
   *   The Ejemplo kdb name.
   *
   * @return \Drupal\ejercicio_kdb\Entity\EjemploKdbInterface
   *   The called Ejemplo kdb entity.
   */
  public function setLabel($label);

  /**
   * Gets the Ejemplo kdb label.
   *
   * @return string
   *   Dato 1 return.
   */
  public function getDato1();

  /**
   * Sets the Ejemplo kdb Dato 1.
   *
   * @param string $label
   *   The Ejemplo kdb dato1.
   *
   * @return \Drupal\ejercicio_kdb\Entity\EjemploKdbInterface
   *   The called Ejemplo kdb entity.
   */
  public function setDato1($value);

  /**
   * Gets the Ejemplo kdb label.
   *
   * @return string
   *   Dato 1 return.
   */
  public function getDato2();

  /**
   * Sets the Ejemplo kdb Dato 2.
   *
   * @param string $value
   *   The Ejemplo kdb dato2.
   *
   * @return \Drupal\ejercicio_kdb\Entity\EjemploKdbInterface
   *   The called Ejemplo kdb entity.
   */
  public function setDato2($value);

}
