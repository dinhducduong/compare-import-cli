<?php

/**
 * TechDivision\Import\Configuration\SwiftMailer\MessageConfigurationInterface
 *
 * PHP version 7
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2020 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Configuration\SwiftMailer;

/**
 * The swift mailer message configuration interface.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2020 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */
interface MessageConfigurationInterface
{

    /**
     * Return's the swift mailer message factory used to create he instance.
     *
     * @return string The swift mailer message factory
     */
    public function getMessageFactory();
}
