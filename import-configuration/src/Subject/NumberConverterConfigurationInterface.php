<?php

/**
 * TechDivision\Import\Configuration\Subject\NumberConverterConfigurationInterface
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
 * The interface for a number converter configuration.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2020 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */
interface NumberConverterConfigurationInterface
{

    /**
     * Returns the file resolver's unique DI identifier.
     *
     * @return string The file resolverss unique DI identifier
     */
    public function getId();

    /**
     * Returns the locale found in the source file.
     *
     * @return string The source locale
     */
    public function getLocale();
}
