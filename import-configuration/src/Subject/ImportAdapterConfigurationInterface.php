<?php

/**
 * TechDivision\Import\Configuration\Subject\ImportAdapterConfigurationInterface
 *
 * PHP version 7
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2020 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Configuration\Subject;

use TechDivision\Import\Configuration\CsvConfigurationInterface;

/**
 * The interface for an import adapter's configuration.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2020 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */
interface ImportAdapterConfigurationInterface extends CsvConfigurationInterface
{

    /**
     * Return's the import adapter's unique DI identifier
     *
     * @return string The import adapter's unique DI identifier
     */
    public function getId();

    /**
     * Returns the import adapter's serializer configuration.
     *
     * @return \TechDivision\Import\Configuration\Subject\SerializerConfigurationInterface
     */
    public function getSerializer();
}
