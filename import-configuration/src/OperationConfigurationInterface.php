<?php

/**
 * TechDivision\Import\Configuration\OperationConfigurationInterface
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
 * Interface for the operation configuration implementation.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2020 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */
interface OperationConfigurationInterface
{

    /**
     * Query's whether or not the passed operation equals this instance.
     *
     * @param \TechDivision\Import\Configuration\OperationConfigurationInterface $operation The operation to query
     *
     * @return boolean TRUE if the operations are equal, else FALSE
     */
    public function equals(OperationConfigurationInterface $operation);

    /**
     * Set's the operation's name.
     *
     * @param string $name The operation's name
     *
     * @return void
     */
    public function setName($name);

    /**
     * Return's the operation's name.
     *
     * @return string The operation's name
     */
    public function getName();

    /**
     * Return's the array with the configured listeners.
     *
     * @return array The array with the listeners
     */
    public function getListeners();

    /**
     * Return's the ArrayCollection with the operation's plugins.
     *
     * @return \Doctrine\Common\Collections\ArrayCollection The ArrayCollection with the operation's plugins
     */
    public function getPlugins();

    /**
     * String representation of the operation (the name).
     *
     * @return string The operation name
     */
    public function __toString();

    /**
     * Set's the execution context configuration for the actualy plugin configuration.
     *
     * @param \TechDivision\Import\Configuration\ExecutionContextInterface $executionContext The execution context to use
     *
     * @return void
     */
    public function setExecutionContext(ExecutionContextInterface $executionContext);

    /**
     * Return's the execution context configuration for the actualy plugin configuration.
     *
     * @return \TechDivision\Import\Configuration\ExecutionContextInterface The execution context to use
     */
    public function getExecutionContext();

    /**
     * Return's the full opration name, which consists of the Magento edition, the entity type code and the operation name.
     *
     * @param string $separator The separator used to seperate the elements
     *
     * @return string The full operation name
     */
    public function getFullName($separator = '/');
}
