<?php

/**
 * TechDivision\Import\Dbal\Utils\TablePrefixUtilInterface
 *
 * PHP version 7
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Dbal\Utils;

use TechDivision\Import\Configuration\ConfigurationInterface;
use TechDivision\Import\Services\RegistryProcessorInterface;

/**
 * Interface for table prefix utility implementations.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */
interface TablePrefixUtilInterface extends SqlCompilerInterface
{

    /**
     * The token used to identifiy a primary key column.
     *
     * @var string
     */
    const TOKEN = 'table';

    /**
     * Returns the prefixed table name.
     *
     * @param string $tableName The table name to prefix
     *
     * @return string The prefixed table name
     * @throws \Exception Is thrown if the table name can't be prefixed
     */
    public function getPrefixedTableName($tableName);

    /**
     * @return ConfigurationInterface
     */
    public function getConfiguration(): ConfigurationInterface;

    /**
     * @return RegistryProcessorInterface
     */
    public function getRegistryProcessor() : RegistryProcessorInterface;
}
