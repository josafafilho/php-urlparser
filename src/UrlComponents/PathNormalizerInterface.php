<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 15:23
 */

namespace josafafilho\urlparser\UrlComponents;

/**
 * Interface PathNormalizerInterface
 * @package josafafilho\urlparser\UrlComponents
 */
interface PathNormalizerInterface {

	/**
	 * Removes single and double dots from path
	 *
	 * @param $path
	 *
	 * @return string
	 */
	public static function normalize( $path );
}