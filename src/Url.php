<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 13:17
 */

namespace josafafilho\urlparser;


use josafafilho\urlparser\UrlComponents\AuthenticationInterface;
use josafafilho\urlparser\UrlComponents\FragmentInterface;
use josafafilho\urlparser\UrlComponents\HostInterface;
use josafafilho\urlparser\UrlComponents\PathInterface;
use josafafilho\urlparser\UrlComponents\QueryInterface;
use josafafilho\urlparser\UrlComponents\SchemeInterface;

/**
 * Class Url
 * @package josafafilho\urlparser
 */
class Url implements UrlInterface
{

    /**
     * @var SchemeInterface $scheme
     */
    private $scheme;

    /**
     * @var AuthenticationInterface $auth
     */
    private $auth;

    /**
     * @var HostInterface $host
     */
    private $host;

    /**
     * @var PathInterface $path
     */
    private $path;

    /**
     * @var QueryInterface $query
     */
    private $query;

    /**
     * @var FragmentInterface $fragment
     */
    private $fragment;

    /**
     * Url constructor.
     *
     * @param SchemeInterface $scheme
     * @param AuthenticationInterface $auth
     * @param HostInterface $host
     * @param PathInterface $path
     * @param QueryInterface $query
     * @param FragmentInterface $fragment
     */
    public function __construct(
        SchemeInterface $scheme,
        AuthenticationInterface $auth,
        HostInterface $host,
        PathInterface $path,
        QueryInterface $query,
        FragmentInterface $fragment
    ) {
        $this->scheme = $scheme;
        $this->auth = $auth;
        $this->host = $host;
        $this->path = $path;
        $this->query = $query;
        $this->fragment = $fragment;
    }

    /**
     * @return SchemeInterface
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * @return AuthenticationInterface
     */
    public function getAuthentication()
    {
        return $this->auth;
    }

    /**
     * @return HostInterface
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return PathInterface
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return QueryInterface
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @return FragmentInterface
     */
    public function getFragment()
    {
        return $this->fragment;
    }

    public function __toString()
    {
        return "{$this->scheme}{$this->auth}{$this->host}{$this->path}{$this->query}{$this->fragment}";
    }
}