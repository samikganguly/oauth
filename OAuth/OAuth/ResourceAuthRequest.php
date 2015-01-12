<?php

/**
 * see LICENSE
 */

namespace OAuth\Requests;

/**
 *
 * @author samik
 */
interface ResourceAuthRequest {
    /**
     * builds the request object from superglobals
     */
    public static function buildFromHTTP();
    public function getClientID();
    public function getRedirectURI();
    public function getScope();
    public function getResponseType();
    public function getState();
    public function __toString();
}
