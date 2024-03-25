<?php

/**
 * TechDivision\Import\Configuration\Logger\FormatterConfigurationInterface
 *
 * PHP version 7
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2020 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Configuration\Logger;

use TechDivision\Import\Configuration\ParamsConfigurationInterface;

/**
 * The interface for a handler's formatter configuration.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2020 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */
interface FormatterConfigurationInterface extends ParamsConfigurationInterface
{

    /**
     * Return's the formatter's DI ID to use.
     *
     * @return string The type
     */
    public function getId();
}
