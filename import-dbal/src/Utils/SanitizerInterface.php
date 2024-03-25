<?php

/**
 * \TechDivision\Import\Dbal\Utils\SanitizerInterface
 *
 * PHP version 7
 *
 * @author    Team CSI <csi-kolbermoor@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Dbal\Utils;

/**
 * Interface for all row data sanitizer implementations.
 *
 * @author    Team CSI <csi-kolbermoor@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */
interface SanitizerInterface
{

    /**
     * Sanitizes and returns row data for given statement.
     *
     * @param array  $row       The current row data
     * @param string $statement The SQL statement to sanitize for
     *
     * @return array The sanitized row data
     */
    public function execute(array $row, string $statement) : array;
}
