<?php

/**
 * TechDivision\Import\Configuration\Logger\HandlerConfigurationInterface
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
 * The interface for a logger's handler configuration.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2020 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */
interface HandlerConfigurationInterface extends ParamsConfigurationInterface
{

    /**
     * Return's the handler's DI ID to use.
     *
     * @return string The DI ID
     */
    public function getId();

    /**
     * Return's the handler's formtter to use.
     *
     * @return \TechDivision\Import\Configuration\Logger\FormatterConfigurationInterface
     */
    public function getFormatter();

    /**
     * Return's the swift mailer configuration to use.
     *
     * @return \TechDivision\Import\Configuration\SwiftMailerConfigurationInterface The swift mailer configuration to use
     */
    public function getSwiftMailer();
}
