<?php

/**
 * TechDivision\Import\Dbal\Utils\EntityStatus
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
 * Utility class containing the entity status.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */
class EntityStatus
{

    /**
     * The key with the key to decide to update/create a row.
     *
     * @var string
     */
    const MEMBER_NAME = 'techdivision_import_utils_entityStatus_memberName';

    /**
     * The key for the row to be created.
     *
     * @var string
     */
    const STATUS_CREATE = 'create';

    /**
     * The key for the row to be updated.
     *
     * @var string
     */
    const STATUS_UPDATE = 'update';

    /**
     * The key for a row that has to be deleted.
     *
     * @var string
     */
    const STATUS_DELETE = 'delete';
}
