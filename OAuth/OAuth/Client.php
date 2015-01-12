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
     * @param string $name name of the required attribute
     * @return Attribute an Attribute exposed by this resource owner
     */
    public function getAttribute($name);
    public function checkAuthState($resourceAuthResp);
}
