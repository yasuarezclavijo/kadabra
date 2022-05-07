<?php

namespace Drupal\ejercicio_kdb\Entity;

use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityChangedTrait;
use Drupal\Core\Entity\EntityPublishedTrait;
use Drupal\Core\Entity\EntityTypeInterface;

/**
 * Defines the Ejemplo kdb entity.
 *
 * @ingroup ejercicio_kdb
 *
 * @ContentEntityType(
 *   id = "ejemplo_kdb",
 *   label = @Translation("Ejemplo kdb"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\ejercicio_kdb\EjemploKdbListBuilder",
 *     "views_data" = "Drupal\ejercicio_kdb\Entity\EjemploKdbViewsData",
 *
 *     "form" = {
 *       "default" = "Drupal\ejercicio_kdb\Form\EjemploKdbForm",
 *       "add" = "Drupal\ejercicio_kdb\Form\EjemploKdbForm",
 *       "edit" = "Drupal\ejercicio_kdb\Form\EjemploKdbForm",
 *       "delete" = "Drupal\ejercicio_kdb\Form\EjemploKdbDeleteForm",
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\ejercicio_kdb\EjemploKdbHtmlRouteProvider",
 *     },
 *     "access" = "Drupal\ejercicio_kdb\EjemploKdbAccessControlHandler",
 *   },
 *   base_table = "ejemplo_kdb",
 *   translatable = FALSE,
 *   admin_permission = "administer ejemplo kdb entities",
 *   entity_keys = {
 *     "id" = "id",
 *     "dato_1" = "dato_1",
 *     "dato_2" = "dato_2",
 *     "label" = "label",
 *     "uuid" = "uuid",
 *     "published" = "status",
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/ejemplo_kdb/{ejemplo_kdb}",
 *     "add-form" = "/admin/structure/ejemplo_kdb/add",
 *     "edit-form" = "/admin/structure/ejemplo_kdb/{ejemplo_kdb}/edit",
 *     "delete-form" = "/admin/structure/ejemplo_kdb/{ejemplo_kdb}/delete",
 *     "collection" = "/admin/structure/ejemplo_kdb",
 *   },
 *   constraints = {
 *     "Unique" = {}
 *   },
 *   field_ui_base_route = "ejemplo_kdb.settings"
 * )
 */
class EjemploKdb extends ContentEntityBase implements EjemploKdbInterface {

  use EntityChangedTrait;
  use EntityPublishedTrait;

  /**
   * {@inheritdoc}
   */
  public function getLabel() {
    return $this->get('label')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setLabel($label) {
    $this->set('label', $label);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getDato1() {
    return $this->get('dato_1')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setDato1($value) {
    $this->set('dato_1', $value);
    return $this;
  }
  
  /**
   * {@inheritdoc}
   */
  public function getDato2() {
    return $this->get('dato_2')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setDato2($value) {
    $this->set('dato_2', $value);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields = parent::baseFieldDefinitions($entity_type);

    // Add the published field.
    $fields += static::publishedBaseFieldDefinitions($entity_type);

    $fields['label'] = BaseFieldDefinition::create('entity_reference')
      ->setLabel(t('Label'))
      ->setSetting('target_type', 'taxonomy_term')
      ->setSetting('handler', 'default:taxonomy_term')
      ->setSetting('handler_settings', 
          [
            'target_bundles' => [
              'tags' => 'tags'
            ]    
          ]
      )
      ->setDescription(t('The label / tag of the Ejemplo kdb entity.'))
      ->setDefaultValue('')
      ->setDisplayOptions('view', [
        'label' => 'above',
        'type' => 'string',
        'weight' => -4,
      ])
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => -4,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE)
      ->setRequired(TRUE);

    $fields['dato_1'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('Dato 1'))
      ->setSetting('unsigned', TRUE)
      ->setDescription(t('Value 1 integer.'))
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => -4,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE)
      ->setRequired(TRUE);

    $fields['dato_2'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('Dato 2'))
      ->setSetting('unsigned', TRUE)
      ->setDescription(t('Value 2 integer.'))
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => -4,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE)
      ->setRequired(TRUE);
  
    $fields['status'] = BaseFieldDefinition::create('boolean')
      ->setLabel(t('Publishing status'))
      ->setDescription(t('A boolean indicating whether the Message is published.'))
      ->setDefaultValue(TRUE);
    
    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t('Created'))
      ->setDescription(t('The time that the entity was created.'));

    $fields['changed'] = BaseFieldDefinition::create('changed')
      ->setLabel(t('Changed'))
      ->setDescription(t('The time that the entity was last edited.'));

    return $fields;
  }

}
