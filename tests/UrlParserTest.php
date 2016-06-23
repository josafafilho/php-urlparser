<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 12:01
 */

namespace josafafilho\urlparser\test;

use josafafilho\urlparser\UrlParser;

class UrlParserTest extends \PHPUnit_Framework_TestCase
{

    public function regularUrlsProvider()
    {
        return [
            ['http://josafafilho:abc123@domain.com:3000/path?param1=value1&param2=value2#anchor'],
            ['https://domain.com/'],
            ['ftp://user@domain.com:20/path/to/content#hi'],
            ['www.domain.com']
        ];
    }

    public function malformedUrlsProvider()
    {
        return [
            ['justaprotocol://'],
            ['http:///example.com'],
            ['http://:80'],
            ['http://user@:80']
        ];
    }

    public function dottedUrlsProvider()
    {
        return [
            [
                'http://josafafilho:abc123@domain.com:3000/path/../././?param1=value1&param2=value2#anchor',
                'http://josafafilho:abc123@domain.com:3000/path/?param1=value1&param2=value2#anchor'
            ],
            ['htt..ps://domain.com/', 'htt..ps://domain.com/'],
            ['ftp://user..@domain.com:20/path/to/../content#hi', 'ftp://user..@domain.com:20/path/to/content#hi'],
            ['www.domain...com', 'www.domain...com'],
            ['www.domain...com/.../../oi', 'www.domain...com/.../oi']
        ];
    }

    /**
     * @dataProvider regularUrlsProvider
     */
    public function testRegularUrl($url)
    {
        $urlParser = new UrlParser($url);
        $parsedUrl = $urlParser->parse();

        $this->assertEquals($url, (string)$parsedUrl);
    }

    /**
     * @dataProvider malformedUrlsProvider
     * @expectedException \InvalidArgumentException
     */
    public function testMalformedUrl($url)
    {
        $urlParser = new UrlParser($url);
        $parsedUrl = $urlParser->parse();
        $this->assertNotEquals($url, (string)$parsedUrl);
    }

    /**
     * @dataProvider dottedUrlsProvider
     */
    public function testDottedUrl($url, $expected)
    {
        $urlParser = new UrlParser($url);
        $parsedUrl = $urlParser->parse();
        $this->assertEquals($expected, (string)$parsedUrl);
    }

}
