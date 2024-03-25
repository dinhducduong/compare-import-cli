<?php

/**
 * TechDivision\Import\Serializer\SerializerInterface
 *
 * PHP version 7
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-serializer
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Serializer;

/**
 * Interface for serializer implementations.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-serializer
 * @link      http://www.techdivision.com
 */
interface SerializerInterface
{

    /**
     * Extracts the elements of the passed value by exploding them
     * with the also passed delimiter.
     *
     * @param string|null $value     The value to extract
     * @param string|null $delimiter The delimiter used to extract the elements
     *
     * @return array|null The exploded values
     */
    public function explode($value = null, $delimiter = null);

    /**
     * Compacts the elements of the passed value by imploding them
     * with the also passed delimiter.
     *
     * @param array|null  $value     The values to compact
     * @param string|null $delimiter The delimiter used to implode the values
     *
     * @return string|null The compatected value
     */
    public function implode(array $value = null, $delimiter = null);

    /**
     * Serializes the elements of the passed array.
     *
     * @param array|null  $unserialized The serialized data
     * @param string|null $delimiter    The delimiter used to serialize the values
     *
     * @return string The serialized array
     */
    public function serialize(array $unserialized = null, $delimiter = null);

    /**
     * Unserializes the elements of the passed string.
     *
     * @param string|null $serialized The value to unserialize
     * @param string|null $delimiter  The delimiter used to unserialize the elements
     *
     * @return array The unserialized values
     */
    public function unserialize($serialized = null, $delimiter = null);
}
