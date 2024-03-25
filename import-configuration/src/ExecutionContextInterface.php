<?php

/**
 * TechDivision\Import\Configuration\ExecutionContextInterface
 *
 * PHP version 7
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Configuration;

/**
 * Interface for implementations that contains data about the actual execution context.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */
interface ExecutionContextInterface
{

    /**
     * Return's the Magento Edition to use in the actual execution context.
     *
     * @return string The Magento Edition
     */
    public function getMagentoEdition();

    /**
     * Return's the Entity Type Code to use in the actual execution context.
     *
     * @return string The Entity Type
     */
    public function getEntityTypeCode();
}
