<?php

/**
 * TechDivision\Import\Configuration\VendorDirConfigurationInterface
 *
 * PHP version 7
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2020 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Configuration;

/**
 * The interface for the vendor directory configuration.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2020 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */
interface VendorDirConfigurationInterface
{

    /**
     * Return's the path to the additional vendor directory.
     *
     * @return string The path to the additional vendor directorie
     */
    public function getVendorDir();

    /**
     * Return's an array with the path to additional extension libraries.
     *
     * @return array The paths to additional extension libraries
     */
    public function getLibraries();

    /**
     * Query's whether or not the vendor directory is relative to the installation directory.
     *
     * @return boolean TRUE if the vendor dir is relative to the installation directory, else FALSE
     */
    public function isRelative();
}
