<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 13:01
 */

namespace josafafilho\urlparser\UrlComponents;


use josafafilho\urlparser\UrlComponents\AuthenticationComponents\PasswordInterface;
use josafafilho\urlparser\UrlComponents\AuthenticationComponents\UserInterface;

interface AuthenticationInterface
{

    public function __construct(UserInterface $user, PasswordInterface $password);

    public function getUser();

    public function getPassword();

    public function __toString();

}