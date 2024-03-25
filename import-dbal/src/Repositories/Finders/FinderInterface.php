<?php

/**
 * TechDivision\Import\Dbal\Repositories\Finders\FinderInterface
 *
 * PHP version 7
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Dbal\Repositories\Finders;

/**
 * Interface for all cache warmer implementations.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */
interface FinderInterface
{

    /**
     * Return's the finder's unique key.
     *
     * @return string The unique key
     */
    public function getKey();

    /**
     * Return's the entity's primary key name.
     *
     * @return string The entity's primary key name
     */
    public function getPrimaryKeyName();

    /**
     * Return's the finder's entity name.
     *
     * @return string The finder's entity name
     */
    public function getEntityName();

    /**
     * Executes the finder with the passed parameters.
     *
     * @param array $params The finder params
     *
     * @return array The finder result
     */
    public function find(array $params = array());
}
