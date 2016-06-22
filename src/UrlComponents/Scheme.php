<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 13:53
 */

namespace josafafilho\urlparser\UrlComponents;

/**
 * Class Scheme
 * @package josafafilho\urlparser\UrlComponents
 */
class Scheme implements SchemeInterface {

	/**
	 * @var string
	 */
	private $scheme;

	/**
	 * Scheme constructor.
	 *
	 * @param string $scheme
	 */
	public function __construct( $scheme ) {
		$this->scheme = $scheme;
	}

	/**
	 * @return string
	 */
	public function getScheme() {
		return $this->scheme;
	}

	public function __toString() {
		return $this->scheme ? "{$this->scheme}://" : '';
	}
}