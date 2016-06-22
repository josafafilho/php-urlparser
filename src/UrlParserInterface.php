<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 11:49
 */

namespace josafafilho\urlparser;

/**
 * Interface UrlParserInterface
 * @package josafafilho\urlparser
 */
interface UrlParserInterface {

	/**
	 * UrlParserInterface constructor.
	 *
	 * @param string $url
	 */
	public function __construct( $url );

	/**
	 * @return UrlInterface
	 */
	public function parse();
}