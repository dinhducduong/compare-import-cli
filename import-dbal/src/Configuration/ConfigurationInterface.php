<?php

/**
 * TechDivision\Import\Dbal\Configuration\ConfigurationInterface
 *
 * PHP version 7
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Dbal\Configuration;

/**
 * Interface for a configuration implementation of the DBAL implementation.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */
interface ConfigurationInterface
{

    /**
     * Set's the array with the finder mappings.
     *
     * @param array $finderMappings The finder mappings
     *
     * @return void
     */
    public function setFinderMappings(array $finderMappings);

    /**
     * Return's the array with the finder mappings.
     *
     * @return array The finder mappings
     */
    public function getFinderMappings();

    /**
     * Return's the mapped finder for the passed key.
     *
     * @param string $key The key of the finder to map
     *
     * @return string The mapped finder name
     * @throws \InvalidArgumentException Is thrown if the mapping with passed key can not be resolved
     */
    public function getFinderMappingByKey($key);

    /**
     * Return's the database configuration with the passed ID.
     *
     * @param string $id The ID of the database connection to return
     *
     * @return \TechDivision\Import\Dbal\Configuration\DatabaseConfigurationInterface The database configuration
     * @throws \Exception Is thrown, if no database configuration is available
     */
    public function getDatabaseById($id);

    /**
     * Return's the databases for the given type.
     *
     * @param string $type The database type to return the configurations for
     *
     * @return \Doctrine\Common\Collections\Collection The collection with the database configurations
     */
    public function getDatabasesByType($type);

    /**
     * Return's the database configuration.
     *
     * @return \TechDivision\Import\Dbal\Configuration\DatabaseConfigurationInterface The database configuration
     * @throws \Exception Is thrown, if no database configuration is available
     */
    public function getDatabase();

    /**
     * Return's the array with the black List.
     *
     * @return array The Black List
     */
    public function getBlackListings();
}
