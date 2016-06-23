<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 12:40
 */

namespace josafafilho\urlparser\UrlComponents;

/**
 * Interface SchemeInterface
 * @package josafafilho\urlparser\UrlComponents
 */
interface SchemeInterface
{

    /**
     * SchemeInterface constructor.
     *
     * @param string $scheme
     */
    public function __construct($scheme);

    /**
     * @return string
     */
    public function getScheme();

    public function __toString();
}