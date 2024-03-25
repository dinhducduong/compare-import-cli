<?php

/**
 * TechDivision\Import\Serializer\SerializerFactoryInterface
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

use TechDivision\Import\Serializer\Configuration\SerializerConfigurationInterface;

/**
 * The factory implementation for serializer instances.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-serializer
 * @link      http://www.techdivision.com
 */
interface SerializerFactoryInterface
{

    /**
     * Creates and returns the serializer instance.
     *
     * @param \TechDivision\Import\Serializer\Configuration\SerializerConfigurationInterface $serializerConfiguration The serializer configuration
     *
     * @return \TechDivision\Import\Serializer\ConfigurationAwareSerializerInterface The serializer instance
     */
    public function createSerializer(SerializerConfigurationInterface $serializerConfiguration);
}
