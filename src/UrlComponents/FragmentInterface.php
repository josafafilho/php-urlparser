<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 12:53
 */

namespace josafafilho\urlparser\UrlComponents;

/**
 * Interface FragmentInterface
 * @package josafafilho\urlparser\UrlComponents
 */
interface FragmentInterface
{

    /**
     * FragmentInterface constructor.
     *
     * @param string $fragment
     */
    public function __construct($fragment);

    /**
     * @return string
     */
    public function getFragment();

    public function __toString();
}