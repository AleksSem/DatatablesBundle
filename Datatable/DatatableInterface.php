<?php

/**
 * This file is part of the SgDatatablesBundle package.
 *
 * (c) stwe <https://github.com/stwe/DatatablesBundle>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sg\DatatablesBundle\Datatable;

use Doctrine\ORM\EntityManagerInterface;

/**
 * Interface DatatableInterface
 *
 * @package Sg\DatatablesBundle\Datatable
 */
interface DatatableInterface
{
    const NAME_REGEX = '/[a-zA-Z0-9\-\_]+/';

    /**
     * Builds the datatable.
     *
     * @param array $options
     */
    public function buildDatatable(array $options = array());

    /**
     * Returns a callable that modify the data row.
     *
     * @return callable
     */
    public function getLineFormatter();

    /**
     * Get all generated Columns.
     *
     * @return array
     */
    public function getColumns();

    /**
     * Get an array of Column names as keys and Column ids as values.
     *
     * @return array
     */
    public function getColumnNames();

    /**
     * Get Ajax instance.
     *
     * @return Ajax
     */
    public function getAjax();

    /**
     * Get Options instance.
     *
     * @return Options
     */
    public function getOptions();

    /**
     * Get the EntityManager.
     *
     * @return EntityManagerInterface
     */
    public function getEntityManager();

    /**
     * Returns the name of the entity.
     *
     * @return string
     */
    public function getEntity();

    /**
     * Returns the name of this datatable view.
     *
     * @return string
     */
    public function getName();
}
