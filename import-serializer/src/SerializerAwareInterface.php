<?php

/**
 * TechDivision\Import\Serializer\SerializerAwareInterface
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
 * The interface for all instances that provides serializer functionality.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-serializer
 * @link      http://www.techdivision.com
 */
interface SerializerAwareInterface
{

    /**
     * Sets the serializer instance.
     *
     * @param \TechDivision\Import\Serializer\SerializerInterface $serializer The serializer instance
     *
     * @return void
     */
    public function setSerializer(SerializerInterface $serializer);

    /**
     * Returns the serializer instance.
     *
     * @return \TechDivision\Import\Serializer\SerializerInterface The serializer instance
     */
    public function getSerializer();
}
