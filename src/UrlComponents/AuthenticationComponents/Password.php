<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 13:32
 */

namespace josafafilho\urlparser\UrlComponents\AuthenticationComponents;

/**
 * Class Password
 * @package josafafilho\urlparser\UrlComponents\AuthenticationComponents
 */
class Password implements PasswordInterface {

	/**
	 * @var string
	 */
	private $password;

	/**
	 * Password constructor.
	 *
	 * @param string $pass
	 */
	public function __construct( $pass ) {
		$this->password = $pass;
	}

	/**
	 * @return string
	 */
	public function getPassword() {
		return $this->password;
	}

	public function __toString() {
		return $this->password;
	}
}