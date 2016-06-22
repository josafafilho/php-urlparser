<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 14:09
 */

namespace josafafilho\urlparser\UrlComponents\HostComponents;

/**
 * Class Hostname
 * @package josafafilho\urlparser\UrlComponents\HostComponents
 */
class Hostname implements HostnameInterface {

	/**
	 * @var string
	 */
	private $hostname;

	/**
	 * Hostname constructor.
	 *
	 * @param string $hostname
	 */
	public function __construct( $hostname ) {
		$this->hostname = $hostname;
	}

	/**
	 * @return string
	 */
	public function getHostname() {
		return $this->hostname;
	}

	public function __toString() {
		return $this->hostname;
	}
}