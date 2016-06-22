<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 14:21
 */

namespace josafafilho\urlparser\UrlComponents;

/**
 * Class Path
 * @package josafafilho\urlparser\UrlComponents
 */
class Path implements PathInterface {

	/**
	 * @var string
	 */
	private $path;

	/**
	 * Path constructor.
	 *
	 * @param string $path
	 */
	public function __construct( $path ) {
		$this->path = $path;
	}

	/**
	 * @return string
	 */
	public function getPath() {
		return $this->path;
	}

	public function __toString() {
		return $this->path;
	}
}