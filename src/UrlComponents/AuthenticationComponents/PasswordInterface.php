<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 12:46
 */

namespace josafafilho\urlparser\UrlComponents\AuthenticationComponents;

/**
 * Interface PasswordInterface
 * @package josafafilho\urlparser\UrlComponents\AuthenticationComponents
 */
interface PasswordInterface {
	/**
	 * PasswordInterface constructor.
	 *
	 * @param string $pass
	 */
	public function __construct( $pass );

	/**
	 * @return string
	 */
	public function getPassword();

	public function __toString();

}