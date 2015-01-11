<?php

/**
 * see LICENSE
 */

namespace OAuth\Roles;

/**
 *
 * @author samik
 */
interface ResourceOwner {
    /**
     * @param string $name name of the required attribute
     * @return Attribute an Attribute exposed by this resource owner
     */
    public function getAttribute($name);
    /**
     * @param ResourceServer $resourceServer a resource server hosting owner's resources
     * @throws InvalidResourceServerException
     */
    public function addResourceServer($resourceServer);
    /**
     * @param Client $client a client trying to access resource
     * @param Scope $scope a scope defined for resource server
     * @throws InvalidClientException
     * @throws InvalidScopeException
     */
    public function authorizeClient($client, $scope);
}
