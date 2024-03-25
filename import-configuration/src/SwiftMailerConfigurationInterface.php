<?php

/**
 * TechDivision\Import\Configuration\SwiftMailerConfigurationInterface
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
 * The swift mailer configuration interface.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2020 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */
interface SwiftMailerConfigurationInterface extends ParamsConfigurationInterface
{

    /**
     * Return's the DI ID used to create the swift mailer instance.
     *
     * @return string The DI ID
     */
    public function getId();

    /**
     * Return's the swift mailer transport configuration to use.
     *
     * @return \TechDivision\Import\Configuration\SwiftMailer\TransportConfigurationInterface The transport configuration to use
     */
    public function getTransport();
}
