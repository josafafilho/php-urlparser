<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 14:29
 */

namespace josafafilho\urlparser\UrlComponents;

/**
 * Class Query
 * @package josafafilho\urlparser\UrlComponents
 */
class Query implements QueryInterface
{

    /**
     * @var string $query
     */
    private $query;

    /**
     * Query constructor.
     *
     * @param string $query
     */
    public function __construct($query)
    {
        $this->query = $query;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    public function __toString()
    {
        return $this->query ? "?$this->query" : '';
    }
}