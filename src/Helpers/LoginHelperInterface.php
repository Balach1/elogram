<?php

namespace Instagram\Helpers;

use League\OAuth2\Client\Token\AccessToken;

/**
 * LoginHelperInterface
 *
 * @package    Instagram
 * @author     Hassan Khan <contact@hassankhan.me>
 * @link       https://github.com/hassankhan/instagram-sdk
 * @license    MIT
 */
interface LoginHelperInterface
{
    /**
     * Sets CSRF nonce and returns the login URL.
     *
     * @return string
     */
    public function getLoginUrl();

    /**
     * Validates CSRF and returns the access token.
     *
     * @param string $grant
     * @param array  $options
     *
     * @return AccessToken
     */
    public function getAccessToken($grant = 'authorization_code', $options = []);
}
