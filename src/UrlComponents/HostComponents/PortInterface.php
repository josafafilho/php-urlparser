<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 12:43
 */

namespace josafafilho\urlparser\UrlComponents\HostComponents;


/**
 * Interface PortInterface
 * @package josafafilho\urlparser\UrlComponents\HostComponents
 */
interface PortInterface {

	/**
	 * PortInterface constructor.
	 *
	 * @param int $port
	 */
	public function __construct( $port );

	/**
	 * @return int
	 */
	public function getPort();

	public function __toString();
}