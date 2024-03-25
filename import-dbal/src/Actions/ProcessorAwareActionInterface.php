<?php

/**
 * TechDivision\Import\Dbal\Actions\ProcessorAwareActionInterface
 *
 * PHP version 7
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Dbal\Actions;

/**
 * The interface for all processor aware action implementations.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */
interface ProcessorAwareActionInterface extends ActionInterface
{

    /**
     * Return's the create processor instance.
     *
     * @return \TechDivision\Import\Dbal\Actions\Processors\ProcessorInterface The create processor instance
     */
    public function getCreateProcessor();

    /**
     * Return's the delete processor instance.
     *
     * @return \TechDivision\Import\Dbal\Actions\Processors\ProcessorInterface The delete processor instance
     */
    public function getDeleteProcessor();

    /**
     * Return's the update processor instance.
     *
     * @return \TechDivision\Import\Dbal\Actions\Processors\ProcessorInterface The update processor instance
     */
    public function getUpdateProcessor();
}
