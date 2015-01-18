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
define("SCOPETAB", "scope");
define("SCOPETAB_COL_ID", "idScope");
define("SCOPETAB_COL_NAME", "name");
define("RESTAB", "resource");
define("RESTAB_COL_ID", "idRes");
define("RESTAB_COL_TYPE", "type");
define("RESTAB_COL_VAL", "value");
define("RES_SERVER_SECRET", "secret");
/**
 * This class implements a database based resource server. It supports following 
 * two resource-types:
 * file - a generic file served as a download, then RESTAB_COL_VAL = path of the file in server
 * embedded - a string value stored in this database, then RESTAB_COL_VAL = string value
 */
class DBResourceServer implements \OAuth\Roles\ResourceServer {
    private static $scopes;
    /**
     * AccessToken value is assumed to have following form:
     * urlencode("authserver=<authorization server>&scope=<scope>&sig=<encrypted hash of two previous values>")
     * @param string $resourceID
     * @param \OAuth\AccessToken $accessToken
     * @throws \OAuth\Exceptions\AccessDeniedException
     */
    public function getResource($resourceID, \OAuth\AccessToken $accessToken) {
        $dur = $accessToken->getDuration();
        $acc = $accessToken->getTokenVal();
        $type = $accessToken->getTokenType();
        $now = new \DateTime();
        if ($dur['start'] > $now || $dur['end'] < $now) {
            throw new \OAuth\Exceptions\AccessDeniedException("Access token is expired");
        }
        //TODO: check signature and scope
    }

    public function listScopes() {
        if(empty(DBResourceServer::$scopes)) {
            DBResourceServer::$scopes = array();
            $db = new \PDO(DB_DSN, DB_USER, DB_PASS);
            $scopes = $db->query("SELECT ".SCOPETAB_COL_ID.", ".SCOPETAB_COL_NAME." FROM ".SCOPETAB);
            while($scope = $scopes->fetch(\PDO::FETCH_ASSOC)) {
                DBResourceServer::$scopes[$scope['idScope']] = $scope['name'];
            }
        }
        return DBResourceServer::$scopes;
    }
}
