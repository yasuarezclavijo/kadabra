<?php
namespace Drupal\ejercicio_kdb\Plugin\views\field;

use Drupal\views\Plugin\views\field\FieldPluginBase;
use Drupal\views\ResultRow;
use Drupal\user\Entity\User;

/**
 * Field handler to show result into dato 1 and dato 2.
 *
 * @ingroup views_field_handlers
 *
 * @ViewsField("ejemplo_kdb_result_field")
 */
class ResultField extends FieldPluginBase {

  /**
   * @{inheritdoc}
   */
  public function query() {
  }

  /**
   * @{inheritdoc}
   */
  public function render(ResultRow $values) {
    $d1 = $values->_entity->dato_1->value;
    $d2 = $values->_entity->dato_2->value;
    $result = ($d1 * 5) + ($d2 * 10);
    $output['#markup'] = $result;
    return $output;
  }
}