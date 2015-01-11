<?php

/**
 * see LICENSE
 */

namespace OAuth\Roles;

/**
 *
 * @author samik
 */
interface AuthorizationServer {
    /**
     * @param ResourceOwner $resourceOwner The digital identity of the owner of the requested resource
     * @throws IncompleteAttributeException
     */
    public function registerResourceOwner($resourceOwner);
    /**
     * @param ResourceServer $resourceServer The server holding the requested resource
     * @throws IncompleteAttributeException
     */
    public function registerResourceServer($resourceServer);
    /**
     * @param Client $client a client trying to access resource
     * @throws IncompleteAttributeException
     */
    public function registerClient($client);
    /**
     * @param ResourceAuthRequest $resourceAuthRequest a request by client for authorization to access resource
     * @return AuthToken a token of authorization from authorization server
     * @throws NoAuthException
     * @throws ServiceException
     */
    public function getAuthorization($resourceAuthRequest);
    /**
     * @param AuthToken $auth a token of authorization from authorization server
     * @param ResourceAccessRequest $resourceAccessRequest a request by client for access token
     * @return AccessToken Access token issued by Authorization Server
     * @throws AccessDeniedException
     * @throws ServiceException
     */
    public function getAccessToken($auth, $resourceAccessRequest);
    /**
     * @param AuthToken $auth a token of authorization from authorization server
     * @return RefreshToken a refresh token for client's access to resource when user is not online
     * @throws AccessDeniedException
     * @throws ServiceException
     */
    public function getRefreshToken($auth);
}
