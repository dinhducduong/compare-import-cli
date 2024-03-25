<?php

/**
 * TechDivision\Import\Dbal\Utils\PrimaryKeyUtilInterface
 *
 * PHP version 7
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Dbal\Utils;

/**
 * Interface for an utility class for edition based primary key handling.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */
interface PrimaryKeyUtilInterface extends SqlCompilerInterface
{

    /**
     * The token used to identifiy a primary key column.
     *
     * @var string
     */
    const TOKEN = 'pk';

    /**
     * Returns the primary key member name for the actual Magento edition.
     *
     * @return string The primary key member name
     * @throws \Exception Is thrown if the edition is not supported/available
     */
    public function getPrimaryKeyMemberName();
}
