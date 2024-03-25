<?php

/**
 * TechDivision\Import\Configuration\ConfigurationFactoryInterface
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
 * The interface for the configuration factory implementations.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2020 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */
interface ConfigurationFactoryInterface
{

    /**
     * Factory implementation to create a new initialized configuration instance.
     *
     * @param string $filename The configuration filename
     * @param string $type     The format of the configuration file, either one of json, yaml or xml
     *
     * @return \TechDivision\Import\Configuration\ConfigurationInterface The configuration instance
     * @throws \Exception Is thrown, if the specified configuration file doesn't exist
     */
    public function factory($filename, $type = 'json');

    /**
     * Factory implementation to create a new initialized configuration instance from a file
     * with configurations that'll be parsed and merged.
     *
     * @param string $installationDir         The assumed Magento installation directory
     * @param string $defaultConfigurationDir The default configuration directory
     * @param array  $directories             An array with diretories to parse and merge
     * @param string $format                  The format of the configuration file, either one of json, yaml or xml
     * @param string $params                  A serialized string with additional params that'll be passed to the configuration
     * @param string $paramsFile              A filename that contains serialized data with additional params that'll be passed to the configuration
     *
     * @return void
     */
    public function factoryFromDirectories($installationDir, $defaultConfigurationDir = 'etc', array $directories = array(), $format = 'json', $params = null, $paramsFile = null);

    /**
     * @param array  $directories An array with diretories to parse and merge
     * @param string $format      The format of the configuration file, either one of json, yaml or xml
     * @return array
     */
    public function getConfigurationFiles(array $directories = array(), $format = 'json');

    /**
     * Factory implementation to create a new initialized configuration instance.
     *
     * @param string $data       The configuration data
     * @param string $format     The format of the configuration data, either one of json, yaml or xml
     * @param string $params     A serialized string with additional params that'll be passed to the configuration
     * @param string $paramsFile A filename that contains serialized data with additional params that'll be passed to the configuration
     *
     * @return \TechDivision\Import\Configuration\ConfigurationInterface The configuration instance
     */
    public function factoryFromString($data, $format = 'json', $params = null, $paramsFile = null);
}
