<?php

/**
 * TechDivision\Import\Dbal\Repositories\Finders\FinderFactoryInterface
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

use TechDivision\Import\Dbal\Repositories\FinderAwareRepositoryInterface;

/**
 * Interface for finder factory implementations.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */
interface FinderFactoryInterface
{

    /**
     * Initialize's and return's a new finder instance.
     *
     * @param \TechDivision\Import\Dbal\Repositories\FinderAwareRepositoryInterface $repository The repository instance to create the finder for
     * @param string                                                                $key        The key of the prepared statement
     *
     * @return \TechDivision\Import\Dbal\Repositories\Finders\FinderInterface The finder instance
     */
    public function createFinder(FinderAwareRepositoryInterface $repository, $key);
}
