<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 13:45
 */

namespace josafafilho\urlparser\UrlComponents;


use josafafilho\urlparser\UrlComponents\AuthenticationComponents\Password;
use josafafilho\urlparser\UrlComponents\AuthenticationComponents\User;

/**
 * Class AuthenticationFactory
 * @package josafafilho\urlparser\UrlComponents
 */
class AuthenticationFactory
{

    /**
     * @param string $user
     * @param string $pass
     *
     * @return AuthenticationInterface
     */
    public static function makeAuthentication($user, $pass)
    {
        return new Authentication(new User($user), new Password($pass));
    }
}