<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 13:50
 */

namespace josafafilho\urlparser;


use josafafilho\urlparser\UrlComponents\AuthenticationFactory;
use josafafilho\urlparser\UrlComponents\Fragment;
use josafafilho\urlparser\UrlComponents\HostFactory;
use josafafilho\urlparser\UrlComponents\Path;
use josafafilho\urlparser\UrlComponents\PathNormalizer;
use josafafilho\urlparser\UrlComponents\Query;
use josafafilho\urlparser\UrlComponents\Scheme;

class UrlBuilder {

	/**
	 * @param $urlString
	 *
	 * @throws InvalidArgumentException
	 * @return UrlInterface
	 */
	public static function buildUrl( $urlString ) {
		$parsedUrl = parse_url( $urlString );

		if ( $parsedUrl === false ) {
			throw new \InvalidArgumentException( "Malformed URL: {$urlString}" );
		}
		$scheme   = self::extractValue( $parsedUrl, "scheme" );
		$user     = self::extractValue( $parsedUrl, "user" );
		$pass     = self::extractValue( $parsedUrl, "pass" );
		$host     = self::extractValue( $parsedUrl, "host" );
		$port     = self::extractValue( $parsedUrl, "port" );
		$path     = PathNormalizer::normalize( self::extractValue( $parsedUrl, "path" ) );
		$query    = self::extractValue( $parsedUrl, "query" );
		$fragment = self::extractValue( $parsedUrl, "fragment" );

		return new Url(
			new Scheme( $scheme ),
			AuthenticationFactory::makeAuthentication( $user, $pass ),
			HostFactory::makeHost( $host, $port ),
			new Path( $path ),
			new Query( $query ),
			new Fragment( $fragment )
		);
	}

	private static function extractValue( $haystack, $key, $default = '' ) {
		$value = $default;
		if ( isset( $haystack[ $key ] ) ) {
			$value = $haystack[ $key ];
		}

		return $value;
	}
}