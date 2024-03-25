<?php

/**
 * TechDivision\Import\Dbal\Repositories\CachedRepositoryInterface
 *
 * PHP version 7
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Dbal\Repositories;

/**
 * The interface for a cached repository implementation.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2021 TechDivision GmbH <info@techdivision.com>
 * @license   https://opensource.org/licenses/MIT
 * @link      https://github.com/techdivision/import-dbal
 * @link      http://www.techdivision.com
 */
interface CachedRepositoryInterface extends RepositoryInterface
{

    /**
     * Return's the primary key name of the entity.
     *
     * @return string The name of the entity's primary key
     */
    public function getPrimaryKeyName();

    /**
     * Prepares a unique cache key for the passed query name and params.
     *
     * @param string $queryName The query name to prepare the cache key for
     * @param array  $params    The query params
     *
     * @return string The prepared cache key
     */
    public function cacheKey($queryName, array $params);

    /**
     * Query whether or not a cache value for the passed cache key is available.
     *
     * @param string $cacheKey The cache key to query for
     *
     * @return boolean TRUE if the a value is available, else FALSE
     */
    public function isCached($cacheKey);

    /**
     * Inversion of the isCached() method.
     *
     * @param string $cacheKey The cache key to query for
     *
     * @return boolean TRUE if the value is not available, else FALSE
     */
    public function notCached($cacheKey);

    /**
     * Add the passed value to the cache.
     *
     * @param string $cacheKey   The cache key
     * @param mixed  $value      The value to cache
     * @param array  $references An array with references to add
     *
     * @return void
     */
    public function toCache($cacheKey, $value, array $references = array());

    /**
     * Query whether or not a value for the passed cache key exists or not. If yes, the value
     * will be returned, else an exception will be thrown.
     *
     * @param string $cacheKey The cache key to return the value for
     *
     * @return mixed The value for the passed cache key
     * @throws \Exception Is thrown, if no value is available
     */
    public function fromCache($cacheKey);

    /**
     * Add's a cache reference from one key to another.
     *
     * @param string $from The key to reference from
     * @param string $to   The key to reference to
     *
     * @return void
     */
    public function addReference($from, $to);

    /**
     * Flush the cache, or the value with the passed key.
     *
     * @param mixed|null $cacheKey The key of the value to flush
     *
     * @return void
     */
    public function flushCache($cacheKey = null);
}
