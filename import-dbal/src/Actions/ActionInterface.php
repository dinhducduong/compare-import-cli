<?php

/**
 * TechDivision\Import\Dbal\Actions\ActionInterface
 *
 * PHP version 7
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Dbal\Actions;

/**
 * The interface for all action implementations.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */
interface ActionInterface
{

    /**
     * Helper method that create/update the passed entity, depending on
     * the entity's status.
     *
     * @param array $row The entity data to create/update
     *
     * @return void
     */
    public function persist(array $row);

    /**
     * Creates's the entity with the passed attributes.
     *
     * @param array $row The attributes of the entity to create
     *
     * @return void
     */
    public function create(array $row);

    /**
     * Delete's the entity with the passed attributes.
     *
     * @param array $row The attributes of the entity to delete
     *
     * @return void
     */
    public function delete(array $row);

    /**
     * Update's the entity with the passed attributes.
     *
     * @param array $row The attributes of the entity to update
     *
     * @return void
     */
    public function update(array $row);
}
