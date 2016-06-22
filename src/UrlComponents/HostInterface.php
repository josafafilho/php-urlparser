<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 13:03
 */

namespace josafafilho\urlparser\UrlComponents;


use josafafilho\urlparser\UrlComponents\HostComponents\HostnameInterface;
use josafafilho\urlparser\UrlComponents\HostComponents\PortInterface;

/**
 * Interface HostInterface
 * @package josafafilho\urlparser\UrlComponents
 */
interface HostInterface {
	/**
	 * HostInterface constructor.
	 *
	 * @param HostnameInterface $domain
	 * @param PortInterface $port
	 */
	public function __construct( HostnameInterface $domain, PortInterface $port );

	/**
	 * @return HostnameInterface
	 */
	public function getDomain();

	/**
	 * @return PortInterface
	 */
	public function getPort();

	public function __toString();

}