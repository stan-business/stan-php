<?php
/**
 * UtilsTest
 * PHP version 7.3
 *
 * @category Class
 * @package  Stan
 * @author Brightweb
 * @link https://stan-business.fr
 */

namespace Stan\Test\Utils;

use Stan\Utils\StanUtils;
use Stan\Test\Api\TestCase;

/**
 * UtilsTest Class Doc Comment
 *
 * @category Class
 * @package  Stan
 * @author Brightweb
 * @link https://stan-business.fr
 */
class UtilsTest extends TestCase
{

    /**
     * Test case for GenerateState
     *
     */
    public function testGenerateState()
    {
        $state = StanUtils::generateState();
        $this->assertSame(strlen($state), 12);
    }
}
