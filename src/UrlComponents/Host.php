<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 14:00
 */

namespace josafafilho\urlparser\UrlComponents;


use josafafilho\urlparser\UrlComponents\HostComponents\HostnameInterface;
use josafafilho\urlparser\UrlComponents\HostComponents\PortInterface;

/**
 * Class Host
 * @package josafafilho\urlparser\UrlComponents
 */
class Host implements HostInterface
{

    /**
     * @var HostnameInterface
     */
    private $domain;

    /**
     * @var PortInterface
     */
    private $port;

    /**
     * Host constructor.
     *
     * @param HostnameInterface $domain
     * @param PortInterface $port
     */
    public function __construct(HostnameInterface $domain, PortInterface $port)
    {
        $this->domain = $domain;
        $this->port   = $port;
    }

    /**
     * @return HostnameInterface
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @return PortInterface
     */
    public function getPort()
    {
        return $this->port;
    }

    public function __toString()
    {
        return $this->domain . ((string)$this->port ? ":{$this->port}" : '');
    }
}