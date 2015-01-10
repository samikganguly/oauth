<?php

/**
 * see LICENSE
 */

namespace OAuth;

/**
 *
 * @author samik
 */
interface AuthorizationServer {
    /**
     * @param ResourceOwner $resourceOwner The digital identity of the owner of the requested resource
     */
    public function registerResourceOwner($resourceOwner);
    /**
     * @param ResourceServer $resourceServer The server holding the requested resource
     */
    public function registerResourceServer($resourceServer);
    /**
     * @param ResourceAuthRequest $resourceAuthRequest a request by client for authorization to access resource
     * @return AuthToken a token of authorization from authorization server
     * @throws NoAuthException
     * @throws ServiceException
     */
    public function getAuthorization($resourceAuthRequest);
    public function getAccessToken($auth, $resourceAccessRequest);
    public function getRefreshToken($auth);
}
