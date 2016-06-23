<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 12:51
 */

namespace josafafilho\urlparser\UrlComponents;

/**
 * Interface QueryInterface
 * @package josafafilho\urlparser\UrlComponents
 */
interface QueryInterface
{

    /**
     * QueryInterface constructor.
     *
     * @param string $query
     */
    public function __construct($query);

    /**
     * @return string
     */
    public function getQuery();

    public function __toString();

}