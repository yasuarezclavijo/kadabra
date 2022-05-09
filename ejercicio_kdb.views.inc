<?php
  
/**
 * @file
 * Provide views data for ejercicio_kdb.module.
 */

/**
 * Implements hook_views_data().
 */
function ejercicio_kdb_views_data() {
    $data['ejemplo_kdb']['result_ejemplo_kdb'] = [
        'title' => t('Result'),
        'field' => [
            'title' => t('Result'),
            'help' => t('Calculate to result dato 1 and dato 2'),
            'id' => 'ejemplo_kdb_result_field',
        ],
        'sort' => [
            'id' => 'ejemplo_kdb_result_sort_desc',
        ],
    ];
    return $data;
}
