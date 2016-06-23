<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 14:07
 */

namespace josafafilho\urlparser\UrlComponents;

use josafafilho\urlparser\UrlComponents\HostComponents\Hostname;
use josafafilho\urlparser\UrlComponents\HostComponents\Port;


/**
 * Class HostFactory
 * @package josafafilho\urlparser\UrlComponents
 */
class HostFactory
{

    /**
     * @param string $hostname
     * @param int $port
     *
     * @return HostInterface
     */
    public static function makeHost($hostname, $port)
    {
        return new Host(new Hostname($hostname), new Port($port));
    }
}