<?php

/**
 * TechDivision\Import\Configuration\LoggerConfigurationInterface
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
 * The interface for a logger configuration.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2020 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */
interface LoggerConfigurationInterface extends ParamsConfigurationInterface
{

    /**
     * Return's the logger's channel name to use.
     *
     * @return string The channel name
     */
    public function getChannelName();

    /**
     * Return's the logger's unique name to use.
     *
     * @return string The unique name
     */
    public function getName();

    /**
     * Return's the DI name of the factory used to create the logger instance.
     *
     * @return string The DI name of the factory to use
     */
    public function getId();

    /**
     * Return's the logger's type to use.
     *
     * @return string The type
     */
    public function getType();

    /**
     * Return's the array with the logger's handlers.
     *
     * @return \Doctrine\Common\Collections\Collection The ArrayCollection with the handlers
     */
    public function getHandlers();
}
