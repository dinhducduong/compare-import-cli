<?php

/**
 * TechDivision\Import\Dbal\Repositories\FinderAwareRepositoryInterface
 *
 * PHP version 7
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Dbal\Repositories;

use TechDivision\Import\Dbal\Repositories\Finders\FinderInterface;

/**
 * Interface for finder aware repository implementations.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */
interface FinderAwareRepositoryInterface extends RepositoryInterface
{

    /**
     * Return's the primary key name of the entity.
     *
     * @return string The name of the entity's primary key
     */
    public function getPrimaryKeyName();

    /**
     * Return's the finder's entity name.
     *
     * @return string The finder's entity name
     */
    public function getEntityName();

    /**
     * Add the initialize finder to the repository.
     *
     * @param \TechDivision\Import\Dbal\Repositories\Finders\FinderInterface $finder The finder instance to add
     *
     * @return void
     */
    public function addFinder(FinderInterface $finder);

    /**
     * Return's the finder instance with the passed key.
     *
     * @param string $key The key of the finder to return
     *
     * @return \TechDivision\Import\Dbal\Repositories\Finders\FinderInterface The finder instance
     * @throws \InvalidArgumentException Is thrown if the finder with the passed key is not available
     */
    public function getFinder($key);
}
