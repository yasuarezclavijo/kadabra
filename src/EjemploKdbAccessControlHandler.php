<?php

namespace Drupal\ejercicio_kdb;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Ejemplo kdb entity.
 *
 * @see \Drupal\ejercicio_kdb\Entity\EjemploKdb.
 */
class EjemploKdbAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\ejercicio_kdb\Entity\EjemploKdbInterface $entity */

    switch ($operation) {

      case 'view':

        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished ejemplo kdb entities');
        }


        return AccessResult::allowedIfHasPermission($account, 'view published ejemplo kdb entities');

      case 'update':

        return AccessResult::allowedIfHasPermission($account, 'edit ejemplo kdb entities');

      case 'delete':

        return AccessResult::allowedIfHasPermission($account, 'delete ejemplo kdb entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add ejemplo kdb entities');
  }


}
