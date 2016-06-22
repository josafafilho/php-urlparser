<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 12:49
 */

namespace josafafilho\urlparser\UrlComponents;

/**
 * Interface PathInterface
 * @package josafafilho\urlparser\UrlComponents
 */
interface PathInterface {
	/**
	 * PathInterface constructor.
	 *
	 * @param string $path
	 */
	public function __construct( $path );

	/**
	 * @return string
	 */
	public function getPath();

	public function __toString();

}