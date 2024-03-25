<?php

/**
 * TechDivision\Import\Configuration\Subject\FilesystemAdapterConfigurationInterface
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

/**
 * The interface for a filesystem adapter's configuration.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2020 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */
interface FilesystemAdapterConfigurationInterface
{

    /**
     * Return's the filesystem adapter's unique DI identifier.
     *
     * @return string The filesystem adapter's unique DI identifier
     */
    public function getId();

    /**
     * Return's the filesystem specific adapter configuration.
     *
     * @return \TechDivision\Import\Configuration\Subject\FilesystemAdapter\AdapterConfigurationInterface The filesystem specific adapter configuration
     */
    public function getAdapter();
}
