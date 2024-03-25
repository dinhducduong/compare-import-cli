<?php

/**
 * TechDivision\Import\Configuration\AliasConfigurationInterface
 *
 * PHP version 7
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2019 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Configuration;

/**
 * Interface for the alias configuration implementation.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2019 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */
interface AliasConfigurationInterface
{

    /**
     * Return's the alias unique DI identifier
     *
     * @return string The alias unique DI identifier
     */
    public function getId();

    /**
     * Return's the alias target DI identifier.
     *
     * @return string The alias target ID identifier
     */
    public function getTarget();
}
