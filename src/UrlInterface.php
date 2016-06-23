<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 12:54
 */

namespace josafafilho\urlparser;

use josafafilho\urlparser\UrlComponents\AuthenticationInterface;
use josafafilho\urlparser\UrlComponents\FragmentInterface;
use josafafilho\urlparser\UrlComponents\HostInterface;
use josafafilho\urlparser\UrlComponents\PathInterface;
use josafafilho\urlparser\UrlComponents\QueryInterface;
use josafafilho\urlparser\UrlComponents\SchemeInterface;

/**
 * Interface UrlInterface
 * @package josafafilho\urlparser
 */
interface UrlInterface
{
    /**
     * UrlInterface constructor.
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
    );

    /**
     * @return SchemeInterface
     */
    public function getScheme();

    /**
     * @return AuthenticationInterface
     */
    public function getAuthentication();

    /**
     * @return HostInterface
     */
    public function getHost();

    /**
     * @return PathInterface
     */
    public function getPath();

    /**
     * @return QueryInterface
     */
    public function getQuery();

    /**
     * @return FragmentInterface
     */
    public function getFragment();

    public function __toString();
}