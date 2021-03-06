<?php

/**
 * see LICENSE
 */

namespace OAuth\Roles;

/**
 *
 * @author samik
 */
interface ResourceServer {
    /**
     * @return mixed a list of available access scopes
     */
    public function listScopes();
    /**
     * @param string $resourceID ID of the requested resource
     * @param AccessToken $accessToken Access token issued by Authorization Server
     * @return mixed a handle of this resource
     * @throws AccessDeniedException
     * @throws InvalidScopeException
     * @throws ServiceException
     */
    public function getResource($resourceID, \OAuth\AccessToken $accessToken);
}
