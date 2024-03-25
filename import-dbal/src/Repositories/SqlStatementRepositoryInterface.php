<?php

/**
 * TechDivision\Import\Dbal\Repositories\SqlStatementRepositoryInterface
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
 * Interface for the SQL repository classes, containing the SQL statements to use.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */
interface SqlStatementRepositoryInterface
{

    /**
     * The variable name for the PK.
     *
     * @var string
     */
    public const PK_MEMBER_NAME = 'pk_member_name';

    /**
     * Returns the SQL statement with the passed ID.
     *
     * @param string $id The ID of the SQL statement to return
     *
     * @return string The SQL statement
     * @throws \Exception Is thrown, if the SQL statement with the passed key cannot be found
     */
    public function load($id);
}
