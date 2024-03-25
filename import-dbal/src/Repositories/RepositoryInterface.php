<?php

/**
 * TechDivision\Import\Dbal\Repositories\RepositoryInterface
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

/**
 * The respository interface.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */
interface RepositoryInterface
{

    /**
     * Initializes the repository's prepared statements.
     *
     * @return void
     */
    public function init();

    /**
     * Return's the connection to use.
     *
     * @return \TechDivision\Import\Dbal\Connection\ConnectionInterface The connection instance
     */
    public function getConnection();

    /**
     * Set's the repository instance with the SQL statements to use.
     *
     * @param \TechDivision\Import\Dbal\Repositories\SqlStatementRepositoryInterface $sqlStatementRepository The repository instance
     *
     * @return void
     */
    public function setSqlStatementRepository(SqlStatementRepositoryInterface $sqlStatementRepository);

    /**
     * Return's the repository instance with the SQL statements to use.
     *
     * @return \TechDivision\Import\Dbal\Repositories\SqlStatementRepositoryInterface The repository instance
     */
    public function getSqlStatementRepository();

    /**
     * Load's the SQL statement with the passed ID from the SQL repository.
     *
     * @param string $id The ID of the SQL statement to load
     *
     * @return string The SQL statement with the passed ID
     */
    public function loadStatement($id);
}
