<?php

namespace Drupal\ejercicio_kdb\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\ejercicio_kdb\Plugin\Validation\Constraint\UniqueConstraint;
use Drupal\ejercicio_kdb\Plugin\Validation\Constraint\UniqueConstraintValidator;

/**
 * Form controller for Ejemplo kdb edit forms.
 *
 * @ingroup ejercicio_kdb
 */
class EjemploKdbForm extends ContentEntityForm {

  /**
   * The current user account.
   *
   * @var \Drupal\Core\Session\AccountProxyInterface
   */
  protected $account;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    // Instantiates this form class.
    $instance = parent::create($container);
    $instance->account = $container->get('current_user');
    return $instance;
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var \Drupal\ejercicio_kdb\Entity\EjemploKdb $entity */
    $form = parent::buildForm($form, $form_state);

    return $form;
  }
  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = $this->entity;

    $status = parent::save($form, $form_state);

    switch ($status) {
      case SAVED_NEW:
        $this->messenger()->addMessage($this->t('Created the %label Ejemplo kdb.', [
          '%label' => $entity->label(),
        ]));
        break;

      default:
        $this->messenger()->addMessage($this->t('Saved the %label Ejemplo kdb.', [
          '%label' => $entity->label(),
        ]));
    }
    $form_state->setRedirect('entity.ejemplo_kdb.canonical', ['ejemplo_kdb' => $entity->id()]);
  }

}
