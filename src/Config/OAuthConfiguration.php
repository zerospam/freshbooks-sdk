<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 30/05/18
 * Time: 3:17 PM
 */

namespace ZEROSPAM\Freshbooks\Config;

use League\OAuth2\Client\Grant\AuthorizationCode;
use League\OAuth2\Client\Grant\RefreshToken;
use League\OAuth2\Client\Token\AccessToken;
use ZEROSPAM\OAuth2\Client\Provider\FreshBooks;

class OAuthConfiguration
{

    /**
     * @var string
     */
    private $clientId;

    /**
     * @var string
     */
    private $clientSecret;

    /**
     * @var string
     */
    private $redirectUrl;

    /**
     * OAuthConfiguration constructor.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @param string $redirectUrl
     */
    public function __construct(string $clientId, string $clientSecret, string $redirectUrl)
    {
        $this->clientId     = $clientId;
        $this->clientSecret = $clientSecret;
        $this->redirectUrl  = $redirectUrl;
    }


    /**
     * Get a OAuthProvider
     *
     * @return FreshBooks
     */
    public function getProvider(): FreshBooks
    {
        return new FreshBooks(
            [
                'clientId'     => $this->clientId,
                'clientSecret' => $this->clientSecret,
                'redirectUri'  => $this->redirectUrl,
            ]
        );
    }

    /**
     * Get the redirect URL
     *
     * @return string
     */
    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }


    /**
     * Get access token for given code
     *
     * @param string $code
     *
     * @return AccessToken
     */
    public function getAccessToken(string $code): AccessToken
    {
        return $this->getProvider()->getAccessToken(
            new AuthorizationCode(),
            [
                'code' => $code,
            ]
        );
    }

    /**
     * Give a new access token refreshed
     *
     * @param AccessToken $token
     *
     * @return AccessToken
     */
    public function refreshAccessToken(AccessToken $token): AccessToken
    {
        return $this->refreshToken($token->getRefreshToken());
    }

    /**
     * Use the refresh token to get a new access token
     *
     * @param string $refreshToken
     *
     * @return AccessToken
     */
    public function refreshToken(string $refreshToken): AccessToken
    {
        return $this->getProvider()->getAccessToken(
            new RefreshToken(),
            [
                'refresh_token' => $refreshToken,
            ]
        );
    }
}
