<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 14:32
 */

namespace josafafilho\urlparser\UrlComponents;

/**
 * Class Fragment
 * @package josafafilho\urlparser\UrlComponents
 */
class Fragment implements FragmentInterface
{

    /**
     * @var string $fragment
     */
    private $fragment;

    /**
     * Fragment constructor.
     *
     * @param string $fragment
     */
    public function __construct($fragment)
    {
        $this->fragment = $fragment;
    }

    /**
     * @return string
     */
    public function getFragment()
    {
        return $this->fragment;
    }

    public function __toString()
    {
        return $this->fragment ? "#$this->fragment" : '';
    }
}