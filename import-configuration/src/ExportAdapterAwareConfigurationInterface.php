<?php

/**
 * TechDivision\Import\Configuration\ExportAdapterAwareConfigurationInterface
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
 * The interface for the all configurations that are export adapter aware.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2020 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */
interface ExportAdapterAwareConfigurationInterface
{

    /**
     * Return's the export adapter configuration instance.
     *
     * @return \TechDivision\Import\Configuration\Subject\ExportAdapterConfigurationInterface The export adapter configuration instance
     */
    public function getExportAdapter();
}
