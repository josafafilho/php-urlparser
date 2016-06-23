<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 13:36
 */

namespace josafafilho\urlparser\UrlComponents;


use josafafilho\urlparser\UrlComponents\AuthenticationComponents\PasswordInterface;
use josafafilho\urlparser\UrlComponents\AuthenticationComponents\UserInterface;

class Authentication implements AuthenticationInterface
{

    /**
     * @var UserInterface
     */
    private $user;

    /**
     * @var PasswordInterface
     */
    private $password;

    /**
     * Authentication constructor.
     *
     * @param $user
     * @param $password
     */
    public function __construct(UserInterface $user, PasswordInterface $password)
    {
        $this->user     = $user;
        $this->password = $password;
    }

    /**
     * @return UserInterface
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return PasswordInterface
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function __toString()
    {
        $str = '';
        if ((string)$this->user) {
            $str = $this->user . ((string)$this->password ? ":{$this->password}" : '') . '@';
        }

        return $str;
    }
}