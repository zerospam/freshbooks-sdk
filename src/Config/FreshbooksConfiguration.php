<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 30/05/18
 * Time: 3:17 PM
 */

namespace ZEROSPAM\Freshbooks\Config;

use ZEROSPAM\Framework\SDK\Config\OAuthConfiguration;
use ZEROSPAM\Freshbooks\Middleware\Error\UnprocessableEntityMiddleware;
use ZEROSPAM\OAuth2\Client\Provider\FreshBooks;

/**
 * Class FreshbooksConfiguration
 *
 * Use the Freshbooks OAuth Provider
 *
 * @package ZEROSPAM\Freshbooks\Config
 */
class FreshbooksConfiguration extends OAuthConfiguration
{

    /**
     * Class to use for the provider.
     *
     * @return string
     */
    protected function providerClass(): string
    {
        return FreshBooks::class;
    }

    public function defaultMiddlewares(): array
    {
        return [new UnprocessableEntityMiddleware()];
    }
}
