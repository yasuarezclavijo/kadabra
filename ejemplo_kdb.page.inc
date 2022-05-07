<?php

/**
 * @file
 * Contains ejemplo_kdb.page.inc.
 *
 * Page callback for Ejemplo kdb entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Ejemplo kdb templates.
 *
 * Default template: ejemplo_kdb.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_ejemplo_kdb(array &$variables) {
  // Fetch EjemploKdb Entity Object.
  $ejemplo_kdb = $variables['elements']['#ejemplo_kdb'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
