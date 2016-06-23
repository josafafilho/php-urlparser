<?php
/**
 * Created by PhpStorm.
 * User: josafafilho
 * Date: 6/22/16
 * Time: 15:24
 */

namespace josafafilho\urlparser\UrlComponents;

/**
 * Class PathNormalizer
 * @package josafafilho\urlparser\UrlComponents
 */
class PathNormalizer implements PathNormalizerInterface
{

    /**
     * @param $path
     *
     * @return string;
     */
    public static function normalize($path)
    {
        $pathParts  = explode("/", $path);
        $cleanParts = [];

        foreach ($pathParts as $part) {
            if ($part != ".." && $part != ".") {
                $cleanParts[] = $part;
            }
        }

        return implode("/", $cleanParts);
    }

}