<?php
/**
 * ConnectTest
 * PHP version 7.3
 *
 * @category Class
 * @package  Stan
 * @author Brightweb
 * @link https://stan-business.fr
 */

namespace Stan\Test\Utils;

use Stan\Utils\ConnectUtils;
use Stan\Test\Api\TestCase;

/**
 * ConnectTest Class Doc Comment
 *
 * @category Class
 * @package  Stan
 * @author Brightweb
 * @link https://stan-business.fr
 */
class ConnectUtilsTest extends TestCase
{

    /**
     * Test case for GenerateAuthorizeRequest
     *
     */
    public function testGenerateAuthorizeRequestLink()
    {
        $authorize_url = ConnectUtils::generateAuthorizeRequestLink("client_id", "https://stan-business.fr", "abc");
        $expected_url = "https://api.stan-app.fr/v1/oauth/auth?response_type=code&scope=openid+phone+email+address+profile&client_id=client_id&state=abc&redirect_uri=https%3A%2F%2Fstan-business.fr";
        $this->assertSame($expected_url, $authorize_url);
    }
}
