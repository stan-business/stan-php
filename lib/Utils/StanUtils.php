<?php
/**
 * StanUtils
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Stan
 * @author Brightweb
 * @link https://stan-business.fr
 */

namespace Stan\Utils;

class StanUtils
{
    /**
     * 
     * @return string A 12 characters random string
     */
    public static function generateState()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_-@';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 12; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}