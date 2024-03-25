<?php

/**
 * TechDivision\Import\Dbal\Actions\Processors\ProcessorInterface
 *
 * PHP version 7
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Dbal\Actions\Processors;

use TechDivision\Import\Dbal\Repositories\SqlStatementRepositoryInterface;

/**
 * The interface for all CRUD processor implementations.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */
interface ProcessorInterface
{

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
     * Return's the class name of the SQL repository instance with the SQL statements to use.
     *
     * @return string The SQL repository instance class name
     */
    public function getSqlStatementRepositoryClassName();

    /**
     * Load's the SQL statement with the passed ID from the SQL repository.
     *
     * @param string $id The ID of the SQL statement to load
     *
     * @return string The SQL statement with the passed ID
     */
    public function loadStatement($id);

    /**
     * Initializes the proceessor with the prepared statements.
     *
     * @return void
     */
    public function init();

    /**
     * Return's the name of the processor's default statement.
     *
     * @return string The statement name
     */
    public function getDefaultStatementName();

    /**
     * Persist's the passed row.
     *
     * @param array       $row                  The row to persist
     * @param string|null $name                 The name of the prepared statement that has to be executed
     * @param string|null $primaryKeyMemberName The primary key member name of the entity to use
     *
     * @return void
     */
    public function execute($row, $name = null, $primaryKeyMemberName = null);
}
