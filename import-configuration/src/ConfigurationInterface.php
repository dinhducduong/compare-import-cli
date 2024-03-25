<?php

/**
 * TechDivision\Import\Configuration\ConfigurationInterface
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
 * The interface for the import configuration.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2020 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */
interface ConfigurationInterface extends CsvConfigurationInterface, ParamsConfigurationInterface
{

    /**
     * Return's the application's unique DI identifier.
     *
     * @return string The application's unique DI identifier
     */
    public function getId();

    /**
     * Return's the systemm name to be used.
     *
     * @return string The system name to be used
     */
    public function getSystemName();

    /**
     * Return's the entity type code to be used.
     *
     * @return string The entity type code to be used
     */
    public function getEntityTypeCode();

    /**
     * Add's the operation with the passed name ot the operations that has to be executed.
     *
     * If the operation name has already been added, it'll not be added again.
     *
     * @param string  $operationName The operation to be executed
     * @param boolean $prepend       TRUE if the operation name should be prepended, else FALSE
     *
     * @return void
     */
    public function addOperationName($operationName, $prepend = false);

    /**
     * Return's the operation names that has to be used.
     *
     * @return array The operation names that has to be used
     */
    public function getOperationNames();

    /**
     * Return's the TRUE if the import artefacts have to be archived.
     *
     * @return boolean TRUE if the import artefacts have to be archived
     */
    public function haveArchiveArtefacts();

    /**
     * Return's the TRUE if the import artefacts have to be cleared after the import process.
     *
     * @return boolean TRUE if the import artefacts have to be cleared
     */
    public function haveClearArtefacts();

    /**
     * The directory where the archives will be stored.
     *
     * @return string The archive directory
     */
    public function getArchiveDir();

    /**
     * Return's the database configuration with the passed ID.
     *
     * @param string $id The ID of the database connection to return
     *
     * @return \TechDivision\Import\Configuration\DatabaseConfigurationInterface The database configuration
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
     * @return \TechDivision\Import\Configuration\DatabaseConfigurationInterface The database configuration
     * @throws \Exception Is thrown, if no database configuration is available
     */
    public function getDatabase();

    /**
     * Return's the ArrayCollection with the configured shortcuts.
     *
     * @return \Doctrine\Common\Collections\ArrayCollection The ArrayCollection with the shortcuts
     */
    public function getShortcuts();

    /**
     * Return's the ArrayCollection with the configured operations.
     *
     * @return \Doctrine\Common\Collections\ArrayCollection The ArrayCollection with the operations
     */
    public function getOperations();

    /**
     * Return's the Magento installation directory.
     *
     * @return string The Magento installation directory
     */
    public function getInstallationDir();

    /**
     * Return's the source directory that has to be watched for new files.
     *
     * @return string The source directory
     */
    public function getSourceDir();

    /**
     * Return's the target directory with the files that has been imported.
     *
     * @return string The target dir
     */
    public function getTargetDir();

    /**
     * Return's the Magento edition, EE or CE.
     *
     * @return string The Magento edition
     */
    public function getMagentoEdition();

    /**
     * Return's the Magento version, e. g. 2.1.0.
     *
     * @return string The Magento version
     */
    public function getMagentoVersion();

    /**
     * Return's the multiple field delimiter character to use, default value is comma (,).
     *
     * @return string The multiple field delimiter character
     */
    public function getMultipleFieldDelimiter();

    /**
     * Return's the multiple value delimiter character to use, default value is comma (|).
     *
     * @return string The multiple value delimiter character
     */
    public function getMultipleValueDelimiter();

    /**
     * Return's the delimiter character for categories, default value is comma (/).
     *
     * @return string The delimiter character for categories
     */
    public function getCategoryDelimiter();

    /**
     * Queries whether or not strict mode is enabled or not, default is TRUE.
     *
     * @return boolean TRUE if strict mode is enabled, else FALSE
     */
    public function isStrictMode();

    /**
     * Queries whether or not debug mode is enabled or not, default is TRUE.
     *
     * @return boolean TRUE if debug mode is enabled, else FALSE
     */
    public function isDebugMode();

    /**
     * Return's the log level to use.
     *
     * @return string The log level to use
     */
    public function getLogLevel();

    /**
     * Remove's all configured database configuration.
     *
     * @return void
     */
    public function clearDatabases();

    /**
     * Return's the number database configurations.
     *
     * @return integer The number of database configurations
     */
    public function countDatabases();

    /**
     * Add's the passed database configuration.
     *
     * @param \TechDivision\Import\Configuration\DatabaseConfigurationInterface $database The database configuration
     *
     * @return void
     */
    public function addDatabase(DatabaseConfigurationInterface $database);

    /**
     * Return's the explicit DB ID to use.
     *
     * @return string The explicit DB ID to use
     */
    public function getUseDbId();

    /**
     * Return's the PID filename to use.
     *
     * @return string The PID filename to use
     */
    public function getPidFilename();

    /**
     * Return's a collection with the path to additional vendor directories.
     *
     * @return \Doctrine\Common\Collections\ArrayCollection The paths to additional vendor directories
     */
    public function getAdditionalVendorDirs();

    /**
     * Return's an array with the path of the Magento Edition specific extension libraries.
     *
     * @return array The paths of the Magento Edition specific extension libraries
     */
    public function getExtensionLibraries();

    /**
     * The array with the subject's custom header mappings.
     *
     * @return array The custom header mappings
     */
    public function getHeaderMappings();

    /**
     * The array with the subject's custom image types.
     *
     * @return array The custom image types
     */
    public function getImageTypes();

    /**
     * Return's the array with the configured listeners.
     *
     * @return array The array with the listeners
     */
    public function getListeners();

    /**
     * Whether or not the import should be wrapped within a single transation.
     *
     * @return boolean TRUE if the import should be wrapped in a single transation, else FALSE
     */
    public function isSingleTransaction();

    /**
     * Whether or not the cache functionality should be enabled.
     *
     * @return boolean TRUE if the cache has to be enabled, else FALSE
     */
    public function isCacheEnabled();

    /**
     * Return's the serial from the commandline.
     *
     * @return string The serial
     */
    public function getSerial();

    /**
     * Return's the configuration for the caches.
     *
     * @return \Doctrine\Common\Collections\ArrayCollection The cache configurations
     */
    public function getCaches();

    /**
     * Return's the cache configuration for the passed type.
     *
     * @param string $type The cache type to return the configuation for
     *
     * @return \TechDivision\Import\Configuration\CacheConfigurationInterface The cache configuration
     */
    public function getCacheByType($type);

    /**
     * Return's the alias configuration.
     *
     * @return \Doctrine\Common\Collections\ArrayCollection The alias configuration
     */
    public function getAliases();

    /**
     * Set's the shortcut that maps the operation names that has to be executed.
     *
     * @param string $shortcut The shortcut
     *
     * @return void
     */
    public function setShortcut($shortcut);

    /**
     * Return's the shortcut that maps the operation names that has to be executed.
     *
     * @return string The shortcut
     */
    public function getShortcut();

    /**
     * Set's the name of the command that has been invoked.
     *
     * @param string $commandName The command name
     *
     * @return void
     */
    public function setCommandName($commandName);

    /**
     * Return's the name of the command that has been invoked.
     *
     * @return string The command name
     */
    public function getCommandName();

    /**
     * Set's the username to save the import history with.
     *
     * @param string $username The username
     *
     * @return void
     */
    public function setUsername($username);

    /**
     * Return's the username to save the import history with.
     *
     * @return string The username
     */
    public function getUsername();

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
     * Load the default values from the configuration.
     *
     * @return array The array with the default values
     */
    public function getDefaultValues();

    /**
     * Return's an unique array with the prefixes of all configured subjects.
     *
     * @param array $ignore An array with prefixes that has to be ignored
     *
     * @return array An array with the available prefixes
     */
    public function getPrefixes($ignore = array('.*'));

    /**
     * Return's an array with the subjects which prefix is NOT in the passed
     * array of blacklisted prefixes and that matches the filters.
     *
     * @param callable[] $filters An array with filters to filter the subjects that has to be returned
     *
     * @return array An array with the matching subjects
     */
    public function getSubjects(array $filters = array());

    /**
     * Return's the prefix for the move files subject.
     *
     * @return string The prefix for the move files subject
     */
    public function getMoveFilesPrefix();

    /**
     * Set's the first subject of the actual import with a prefix defined.
     *
     * @param \TechDivision\Import\Configuration\SubjectConfigurationInterface $firstPrefixedSubject The subject configuration
     *
     * @return void
     */
    public function setFirstPrefixedSubject(SubjectConfigurationInterface $firstPrefixedSubject);

    /**
     * Return's the first subject of the actual import with a prefix defined.
     *
     * @return \TechDivision\Import\Configuration\SubjectConfigurationInterface|null The subject configuration
     */
    public function getFirstPrefixedSubject();

    /**
     * Get the definition from an empty value
     *
     * @return string A string with constant for empty attribute value
     */
    public function getEmptyAttributeValueConstant();

    /**
     * Sets the explict name of a file that has to be imported.
     *
     * @param string $filename The explicit filename
     *
     * @return void
     */
    public function setFilename($filename);

    /**
     * Load the explicit name of the file that has to be imported.
     *
     * @return string The explicit filename
     */
    public function getFilename();

    /**
     * Set's the array with the black List.
     *
     * @param array $blackListings The Black Listing
     *
     * @return void
     */
    public function setBlackListings(array $blackListings);

    /**
     * Return's the array with the black List.
     *
     * @return array The Black List
     */
    public function getBlackListings();

    /**
     * Get the api Data from Config
     *
     * @return array
     */
    public function getApiData();

    /**
     * Set the api Data from Config
     *
     * @param array $apiData apidata
     *
     * @return void
     */
    public function setApiData($apiData);

    /**
     * @return bool
     */
    public function isConfigOutput();

    /**
     * @param bool $configOutput the configuration files
     *
     * @return void
     */
    public function setConfigOutput(bool $configOutput);

    /**
     * @param array $configurationFiles The configuration files
     *
     * @return void
     */
    public function setConfigurationFiles(array $configurationFiles);

    /**
     * @return array
     */
    public function getConfigurationFiles();
}
