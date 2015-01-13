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
    public function getDuration();
}
