<?php

/*
 * see LICENSE
 */

namespace OAuth;

/**
 *
 * @author samik
 */
interface Attribute {
    /**
     * @param string $name name of the attribute to initialize
     * @return Attribute a defined attribute
     * @throws InvalidNameException
     */
    public static function forName($name);
    /**
     * @return mixed The value of this attribute in agreed upon format
     */
    public function getValue();
}
