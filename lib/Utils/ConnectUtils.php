<?php
/**
 * ConnectUtils
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Stan
 * @author Brightweb
 * @link https://stan-business.fr
 */

namespace Stan\Utils;

use Stan\Configuration;

class ConnectUtils
{
    const ScopePhone = "phone";
    const ScopeEmail = "email";
    const ScopeAddress = "address";
    const ScopeProfile = "profile";

    /**
     * @param string $client_id Your Stan client ID from https://compte.stan-app.fr
     * @param string $redirect_uri Your redirect_uri
     * @param string $state 8 string random characters to identify a session and secure an authorization, use Utils::generateState()
     * @param array $scope The data you will request
     * @param Configuration $conf Provide it for custom host
     * 
     * @return string The authorize request link
     */
    public static function generateAuthorizeRequestLink($client_id, $redirect_uri, $state, $scope = array(), $conf = null)
    {
        if ( empty($scope) ) {
            $scope = array(self::ScopePhone, self::ScopeEmail, self::ScopeAddress, self::ScopeProfile);
        }

        $default_scope = "openid";

        $str_scope = $default_scope . " " . implode(" ", $scope);
        $response_type = "code";
        if ( is_null($conf) ) {
            $conf = Configuration::getDefaultConfiguration();
        }

        $params = array(
            "response_type" => "code",
            "scope" => $str_scope,
            "client_id" => $client_id,
            "state" => $state,
            "redirect_uri" => $redirect_uri
        );

        $q = http_build_query($params);

        return $conf->getHost() . "/oauth/auth?" . $q;
    }
}