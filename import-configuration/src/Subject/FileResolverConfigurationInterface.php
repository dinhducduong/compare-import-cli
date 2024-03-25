<?php

/**
 * TechDivision\Import\Configuration\Subject\FileResolverConfigurationInterface
 *
 * PHP version 7
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Configuration\Subject;

/**
 * The interface for a file resolver's configuration.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */
interface FileResolverConfigurationInterface
{

   /**
    * The default prefix sequence of the import files.
    *
    * @var string
    */
    const DEFAULT_PREFIX = '.*';

    /**
     * The default filename sequence of the import files.
     *
     * @var string
     */
    const DEFAULT_FILENAME = '.*';

    /**
     * The counter sequence of the import files.
     *
     * @var string
     */
    const DEFAULT_COUNTER = '\d+';

    /**
     * The file suffix for import files.
     *
     * @var string
     */
    const DEFAULT_SUFFIX = 'csv';

    /**
     * The file suffix for OK file.
     *
     * @var string
     */
    const DEFAULT_OK_FILE_SUFFIX = 'ok';

    /**
     * The separator char for the elements of the file.
     *
     * @var string
     */
    const DEFAULT_ELEMENT_SEPARATOR = '_';

    /**
     * Returns the file resolver's unique DI identifier.
     *
     * @return string The file resolver's unique DI identifier
     */
    public function getId() : string;

    /**
     * Returns the prefix/meta sequence for the import files.
     *
     * @return string The prefix
     */
    public function getPrefix() : string;

    /**
     * Query's whether or not a custom prefix has been configured for the
     * file resolver.
     *
     * @param string $defaultPrefix The default prefix to match against
     *
     * @return boolean TRUE if the file resolver has a custom prefix, else FALSE
     */
    public function hasPrefix($defaultPrefix = FileResolverConfigurationInterface::DEFAULT_PREFIX) : bool;

    /**
     * Returns the filename/meta sequence of the import files.
     *
     * @return string The suffix
     */
    public function getFilename() : string;

    /**
     * Query's whether or not a custom filename has been configured for the
     * file resolver.
     *
     * @param string $defaultFilename The default filename to match against
     *
     * @return boolean TRUE if the file resolver has a custom filename, else FALSE
     */
    public function hasFilename($defaultFilename = FileResolverConfigurationInterface::DEFAULT_FILENAME);

    /**
     * Returns the counter/meta sequence of the import files.
     *
     * @return string The suffix
     */
    public function getCounter();

    /**
     * Query's whether or not a custom counter has been configured for the
     * file resolver.
     *
     * @param string $defaultCounter The default counter to match against
     *
     * @return boolean TRUE if the file resolver has a custom counter, else FALSE
     */
    public function hasCounter($defaultCounter = FileResolverConfigurationInterface::DEFAULT_COUNTER);

    /**
     * Returns the suffix for the import files.
     *
     * @return string The suffix
     */
    public function getSuffix() : string;

    /**
     * Return's the suffix for the OK file.
     *
     * @return string The OK file suffix
     */
    public function getOkFileSuffix() : string;

    /**
     * Returns the delement separator char.
     *
     *  @return string The element separator char
     */
    public function getElementSeparator() : string;

    /**
     * Returns the elements the filenames consists of.
     *
     * @return array The array with the filename elements
     */
    public function getPatternElements() : array;

    /**
     * Set's the the elements the filenames consists of.
     *
     * @param array $patternElements The array with the filename elements
     *
     * @return void
     */
    public function setPatternElements(array $patternElements) : void;
}
