<?php

/**
 * see LICENSE
 */

namespace OAuth\impl;

/**
 * Description of ResourceServer
 *
 * @author samik
 */
define("DB_DSN", "mysql:hostname=localhost;dbname=resource_server");
define("DB_USER", "root");
define("DB_PASS", "root");
class ResourceServer implements \OAuth\Roles\ResourceServer {
    private $scopes;
    public function getResource($resourceID, $accessToken) {
        
    }

    public function listScopes() {
        if(empty($this->scopes)) {
            $this->scopes = array();
            $db = new \PDO(DB_DSN, DB_USER, DB_PASS);
            $scopes = $db->query("SELECT idScope, name FROM scope");
            while($scope = $scopes->fetch(\PDO::FETCH_ASSOC)) {
                $this->scopes[$scope['idScope']] = $scope['name'];
            }
        }
        return $this->scopes;
    }
}
