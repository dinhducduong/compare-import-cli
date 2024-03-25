<?php

/**
 * TechDivision\Import\Dbal\Repositories\Finders\EntityFinderInterface
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
 * Interface for all entity finder implementations.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */
interface EntityFinderInterface extends FinderInterface
{

    /**
     * Return's the entity unique key name.
     *
     * @return string The name of the entity's unique key
     */
    public function getUniqueKeyName();
}
