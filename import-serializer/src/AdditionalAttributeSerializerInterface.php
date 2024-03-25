<?php

/**
 * TechDivision\Import\Serializer\AdditionalAttributeSerializerInterface
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
 * Serializer implementation that un-/serializes the additional product attribues found in the CSV file
 * in the row 'additional_attributes'.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-serializer
 * @link      http://www.techdivision.com
 */
interface AdditionalAttributeSerializerInterface extends SerializerInterface
{

    /**
     * Create a CSV compatible string from the passed category path.
     *
     * @param string|null $value  The normalized category path (usually from the DB)
     * @param bool        $unpack TRUE if the option values has to be unpacked, in case of a multiselect attribute
     *
     * @return array The array with the denormalized attribute values
     */
    public function denormalize(string $value = null, bool $unpack = true) : array;

    /**
     * Normalizes the category path in a standard representation.
     *
     * For example this means, that a category  path `Default Category/Gear`
     * will be normalized into `"Default Category"/Gear`.
     *
     * @param array $values The category path that has to be normalized
     * @param bool  $pack   TRUE if the option values has to be packed, in case of a multiselect attribute
     *
     * @return string The normalized category path
     */
    public function normalize(array $values, bool $pack = true) : string;
}
