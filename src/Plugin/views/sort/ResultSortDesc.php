<?php

namespace Drupal\ejercicio_kdb\Plugin\views\sort;

use Drupal\views\Plugin\views\sort\SortPluginBase;

/**
 * Basic sort handler for result.
 *
 * @ingroup views_sort_handlers
 * @ViewsSort("ejemplo_kdb_result_sort_desc")
 */
class ResultSortDesc extends SortPluginBase {
    /**
     * Called to add the sort to a query.
     */
    public function query() {
        $this->ensureMyTable();
        $this->query->addOrderBy(NULL, "(({$this->tableAlias}.dato_1 * 5) + ({$this->tableAlias}.dato_2 * 10))", $this->options['order'], $this->tableAlias . '_' . $this->field);
    }
}