<?php

/**
 * see LICENSE
 */
namespace OAuth\Responses;
/**
 *
 * @author samik
 */
interface ResourceAccessResponse {
    public function getAccessToken();
    public function getRefreshToken();
}
