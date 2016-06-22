<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 13:34
 */

namespace josafafilho\urlparser\UrlComponents\AuthenticationComponents;

/**
 * Class User
 * @package josafafilho\urlparser\UrlComponents\AuthenticationComponents
 */
class User implements UserInterface {

	/**
	 * @var string
	 */
	private $user;

	/**
	 * User constructor.
	 *
	 * @param string $user
	 */
	public function __construct( $user ) {
		$this->user = $user;
	}

	/**
	 * @return string
	 */
	public function getUser() {
		return $this->user;
	}

	public function __toString() {
		return $this->user;
	}
}