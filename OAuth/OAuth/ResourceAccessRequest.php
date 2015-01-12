<?php

/**
 * see LICENSE
 */

namespace OAuth\Requests;

/**
 *
 * @author samik
 */
interface ResourceAccessRequest {
    public static function buildFromHTTP();
    public function getRedirectURI();
    public function getGrantType();
    public function getClient();
    public function __toString();
}
