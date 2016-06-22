<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 11:51
 */

namespace josafafilho\urlparser;

/**
 * Class UrlParser
 * @package josafafilho\urlparser
 */
class UrlParser implements UrlParserInterface {


	private $url;

	/**
	 * @var string
	 */
	private $urlString;

	/**
	 * UrlParser constructor.
	 *
	 * @param string $url
	 */
	public function __construct( $url ) {
		$this->urlString = $url;
	}

	public function parse() {
		if ( is_null( $this->url ) ) {
			$this->url = UrlBuilder::buildUrl( $this->urlString );
		}

		return $this->url;
	}
}