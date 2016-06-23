<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 14:13
 */

namespace josafafilho\urlparser\UrlComponents\HostComponents;


class Port implements PortInterface
{

    /**
     * @var int
     */
    private $port;

    /**
     * Port constructor.
     *
     * @param int $port
     */
    public function __construct($port)
    {
        $this->port = $port;
    }

    /**
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    public function __toString()
    {
        return strval($this->port);
    }
}