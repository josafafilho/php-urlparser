<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 12:45
 */

namespace josafafilho\urlparser\UrlComponents\AuthenticationComponents;

/**
 * Interface UserInterface
 * @package josafafilho\urlparser\UrlComponents\AuthenticationComponents
 */
interface UserInterface {

	/**
	 * UserInterface constructor.
	 *
	 * @param string $user
	 */
	public function __construct( $user );

	/**
	 * @return string
	 */
	public function getUser();

	public function __toString();
}