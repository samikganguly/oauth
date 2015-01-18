<?php

/**
 * see LICENSE
 */

namespace OAuth;

/**
 *
 * @author samik
 */
interface AccessToken {
    public function getTokenType();
    public function getTokenVal();
    /**
     * @return mixed pair of dates, start and end, in an associative array
     */
    public function getDuration();
}
