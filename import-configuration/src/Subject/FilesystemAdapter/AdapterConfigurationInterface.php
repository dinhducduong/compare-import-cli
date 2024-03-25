<?php

/**
 * TechDivision\Import\Configuration\Subject\FilesystemAdapter\AdapterConfigurationInterface
 *
 * PHP version 7
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2020 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Configuration\Subject\FilesystemAdapter;

use TechDivision\Import\Configuration\ParamsConfigurationInterface;

/**
 * The interface for a filesystem adapter's configuration.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2020 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */
interface AdapterConfigurationInterface extends ParamsConfigurationInterface
{

    /**
     * Return's the adapter's class name.
     *
     * @return string The adapter's class name
     */
    public function getType();
}
