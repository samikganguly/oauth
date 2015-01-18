<?php

/**
 * see LICENSE
 */

namespace OAuth\Roles;

/**
 *
 * @author samik
 */
interface Client {
    /**
     * exposes attributes of this client
     * @param string $name name of the required attribute
     * @return Attribute an Attribute exposed by this resource owner
     */
    public function getAttribute($name);
    /**
     * cross checks the state received from authorization server with the sent value
     * to avoid cross-site scripting
     * @param ResourceAuthRequest $resourceAuthReq authorization request sent
     * @param ResourceAuthResponse $resourceAuthResp corresponding response coming from authorization server
     */
    public function checkAuthState($resourceAuthReq, $resourceAuthResp);
}
