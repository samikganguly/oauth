<?php

/**
 * see LICENSE
 */

namespace OAuth\Responses;

/**
 *
 * @author samik
 */
interface ResourceAuthResponse {
    public function getAuthCode();
    public function getState();
}
