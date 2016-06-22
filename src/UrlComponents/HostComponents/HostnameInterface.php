<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 12:41
 */

namespace josafafilho\urlparser\UrlComponents\HostComponents;

/**
 * Interface HostnameInterface
 * @package josafafilho\urlparser\UrlComponents\HostComponents
 */
interface HostnameInterface {

	/**
	 * HostnameInterface constructor.
	 *
	 * @param string $hostname
	 */
	public function __construct( $hostname );

	/**
	 * @return string
	 */
	public function getHostname();

	public function __toString();
}